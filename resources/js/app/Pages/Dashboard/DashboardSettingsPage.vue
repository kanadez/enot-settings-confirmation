<template>
    <div>
        <div class="flex mb-4">
            <div class="w-1/3 justify-start">
                Настройки
            </div>
        </div>
        <Settings v-if="isSettingsLoaded"
               :settings="this.$store.state.dashboardSettings.settings"
               :loading="true"
               @edit-setting="editSetting"
        />
        <EditSettingModal
            v-if="isEditSettingModalOpen"
            title="Редактировать настройку"
            :settingData="this.$store.state.dashboardSettings.settingEditData"
            @close="closeEditSettingModal"
            @updated="closeEditSettingModal();loadSettings();"
        />

        <loading v-model:active="isLoading"
                 :can-cancel="false"
                 :is-full-page="true"/>
    </div>
</template>

<script>

import Settings from "../../Components/Dashboard/Settings";
import Button from "../../UI/Button";
import Icon from "../../UI/Icon";
import EditSettingModal from "../../Components/Dashboard/EditSettingModal";
import {RedirectMixin} from "../../Mixins/redirect-mixin";
import {AuthMixin} from "../../Mixins/auth-mixin";
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';

const DEFAULT_PER_PAGE = 2000;

export default {
    name: "SettingsPage",
    computed: {
        isLoading() {
            return this.$store.state.dashboardSettings.loading;
        },
        isSettingsLoaded() {
            return this.$store.state.dashboardSettings.settings !== null;
        },
        perPage() {
            return DEFAULT_PER_PAGE;
        }
    },
    data() {
        return {
            page: 1,
            filters: null,

            isCreateSettingModalOpen: false,
            isEditSettingModalOpen: false,
            modalContents: null,
        }
    },
    components: {Settings, EditSettingModal, Button, Icon, Loading},
    mixins: [RedirectMixin, AuthMixin],
    created() {
        this.redirectLoginIfNotAuth();

        this.loadSettings();
    },
    methods: {
        loadSettings() {
            this.$store.dispatch("dashboardSettings/getSettings", {page: this.page, per_page: this.perPage, ...this.filters});
        },
        openCreateSettingModal() {
            this.isCreateSettingModalOpen = true;
        },
        closeCreateSettingModal() {
            this.modalContents = null;
            this.isCreateSettingModalOpen = false;
            document.removeEventListener('keyup', this.modalCloseOnEscape);
        },
        editSetting(setting_id) {
            this.$store.dispatch('dashboardSettings/edit', {id: setting_id});
            this.isEditSettingModalOpen = true;
        },
        confirmSetting(setting_id) {
            this.isEditSettingConfirmModalOpen = true;
        },
        closeEditSettingModal() {
            this.modalContents = null;
            this.isEditSettingModalOpen = false;
            document.removeEventListener('keyup', this.modalCloseOnEscape);
        },

    },
}
</script>

<style scoped>

</style>
