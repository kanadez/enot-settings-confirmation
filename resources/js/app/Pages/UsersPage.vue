<template>
    <div>
        <div class="flex mb-4">
            <div class="w-1/3 justify-start">
                Пользователи
            </div>
            <!--<div class="grid w-2/3 justify-items-end">
                <Button @click="openCreateUserModal">
                    <Icon type="add" size="24" class="w-4 h-4 mr-2"/>
                    Создать пользователя
                </Button>
            </div>-->
        </div>
        <Users v-if="isUsersLoaded"
               :users="this.$store.state.users.users"
               :filtersData="this.$store.state.users.UserFiltersData"
               :loading="true"
               @change-page="changePage"
               @change-per-page="changePerPage"
               @delete-user="deleteUser"
               @edit-user="editUser"
               @load-filter="loadFilter"
        />
        <CreateUserModal
            v-if="isCreateUserModalOpen"
            title="Создать пользователя"
            :formData="this.$store.state.users.userCreateFormData"
            @close="closeCreateUserModal"
            @created="closeCreateUserModal();loadUsers();"
        />
        <EditUserModal
            v-if="isEditUserModalOpen"
            title="Редактировать пользователя"
            :formData="this.$store.state.users.userCreateFormData"
            :userData="this.$store.state.users.userEditData"
            @close="closeEditUserModal"
            @updated="closeEditUserModal();loadUsers();"
        />

        <loading v-model:active="isLoading"
                 :can-cancel="false"
                 :is-full-page="true"/>
    </div>
</template>

<script>

import Users from "../Components/Users";
import Button from "../UI/Button";
import Icon from "../UI/Icon";
import CreateUserModal from "../Components/CreateUserModal";
import EditUserModal from "../Components/EditUserModal";
import {RedirectMixin} from "../Mixins/redirect-mixin";
import {AuthMixin} from "../Mixins/auth-mixin";
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';

const DEFAULT_PER_PAGE = 2000;

export default {
    name: "UsersPage",
    computed: {
        isLoading() {
            return this.$store.state.users.loading;
        },
        isUsersLoaded() {
            return this.$store.state.users.users !== null;
        },
        perPage() {
            return this.$store.state.auth.settings.per_page || DEFAULT_PER_PAGE;
        }
    },
    data() {
        return {
            page: 1,
            filters: null,

            isCreateUserModalOpen: false,
            isEditUserModalOpen: false,
            modalContents: null,
        }
    },
    components: {Users, CreateUserModal, EditUserModal, Button, Icon, Loading},
    mixins: [RedirectMixin, AuthMixin],
    created() {
        this.redirectLoginIfNotAuth();
        this.redirectPathIfNoAdminAccess(
            this.$router.resolve({name: 'dashboard-settings'}).path
        );

        this.loadFiltersData();
        this.loadUsers();
    },
    methods: {
        loadUsers() {
            this.$store.dispatch("users/getUsers", {page: this.page, per_page: this.perPage, ...this.filters});
        },
        loadFiltersData() {
            this.$store.dispatch("users/getUserFiltersData", {});
        },
        openCreateUserModal() {
            this.isCreateUserModalOpen = true;
        },
        closeCreateUserModal() {
            this.modalContents = null;
            this.isCreateUserModalOpen = false;
            document.removeEventListener('keyup', this.modalCloseOnEscape);
        },
        editUser(user_id) {
            this.$store.dispatch('users/edit', {id: user_id});
            this.isEditUserModalOpen = true;
        },
        closeEditUserModal() {
            this.modalContents = null;
            this.isEditUserModalOpen = false;
            document.removeEventListener('keyup', this.modalCloseOnEscape);
        },
        changePage(page) {
            this.page = page;
            this.loadUsers();
        },
        changePerPage(perPage) {
            this.$store.dispatch("auth/setPerPage", perPage).then(
                (success) => {
                    this.page = 1;
                    this.loadUsers();
                }
            );

        },
        deleteUser(id) {
            this.$store.dispatch("users/delete", {id: id}).then(
                (response) => {
                    this.loadUsers();
                }
            );
        },
        loadFilter(filters) {
            this.filters = filters;
            this.loadUsers();
        },
    },
}
</script>

<style scoped>

</style>
