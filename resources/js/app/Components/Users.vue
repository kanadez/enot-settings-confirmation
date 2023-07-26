<template>
    <div class="rounded-xl p-2">
        <form @submit.prevent="filterData">
            <table class="users-table w-full table-auto">
                <thead class="">
                <tr>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>Должность</th>
                    <th>Telegram</th>
                    <th>e-Mail</th>
                    <th>Часовой пояс</th>
                    <th>Рабочее время</th>
                    <th>Комментарий</th>
                    <th class="actions"></th>
                </tr>
                <tr>
                    <td><Input v-on:keyup.enter="filterData" type="text" v-model="filters.id" class="small" size="4"/></td>
                    <td><Input v-on:keyup.enter="filterData" type="text" v-model="filters.name" class="w-full"/></td>
                    <td>
                        <select @change="filterData" v-model="filters.position" class="w-full">
                            <option :value="undefined">Любая...</option>
                            <option v-for="position in filtersData.positions" :value="position.id">
                              {{ position.title }}
                            </option>
                        </select>
                    </td>
                    <td><Input v-on:keyup.enter="filterData" type="text" v-model="filters.telegram" class="w-full"/></td>
                    <td><Input v-on:keyup.enter="filterData" type="text" v-model="filters.email" class="w-full"/></td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(user, index) in users.users.data" :class="getRowClass(index)">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.position != null ? user.position.title : '' }}</td>
                    <td>
                        <span class="contact" v-for="contact in user.contacts">
                            <a v-if="contact.type == 'telegram'" class="text-blue-500" :href="`https://t.me/${contact.contact}`">
                                {{ ` ${contact.contact}` }}
                            </a>
                        </span>
                    </td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.timezone }}</td>
                    <td>{{ user.worktime }}</td>
                    <td>{{ user.comments }}</td>
                    <td class="actions">
                        <!--<a @click="editUser(user.id)"
                                class="cursor-pointer bg-gray-400 mr-1 hover:bg-gray-500 text-white-800 font-semibold py-1 px-1 border border-gray-400 rounded float-left">
                            <Icon type="edit" class="w-3 h-3 text-white" title="Редактировать"/>
                        </a>
                        <a @click="deleteUser(user.id, user.email)"
                                class="cursor-pointer bg-red-300 hover:bg-red-400 text-white-800 font-semibold py-1 px-1 border border-red-300 rounded float-left">
                            <Icon type="trash" class="w-3 h-3 text-white" title="Удалить"/>
                        </a>-->
                    </td>
                </tr>
                </tbody>
                <tfoot class="border-t border-gray-300">

                </tfoot>
            </table>
        </form>

        <div class="flex mb-4 justify-start">
            <select class="w-auto mr-2" @change="(e) => selectPerPage(e.target.value)" v-model="per_page">
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
            </select>
            <ul class="paginator">
                <li :class="page === users.users.current_page ? 'selected' : ''" v-for="page in users.users.last_page"
                    @click="selectPage(page)">{{ page }}
                </li>
            </ul>
        </div>

        <Modal v-if="isModalOpen" title="Дополнительная информация" :contents="modalContents" @close="closeModal"/>
    </div>
</template>

<script>

import Modal from "./Modal";
import Input from "../UI/Input";
import Icon from "../UI/Icon";
import Datepicker from 'vue3-date-time-picker';
import Button from "../UI/Button";

const DEFAULT_PER_PAGE = 2000;

export default {
    name: "users",
    components: {Button, Input, Icon, Modal, Datepicker},
    data() {
        return {
            isModalOpen: false,
            modalContents: null,
            filters: {},
            per_page: DEFAULT_PER_PAGE,
        }
    },
    props: {
        users: Object,
        filtersData: Object,
        loading: Boolean,
    },
    mounted() {
        this.per_page = this.$store.state.auth.settings.per_page || DEFAULT_PER_PAGE;
    },
    computed: {
        /*filtersValidated() { // нигде не используется, создавалось как валидация фильтров на фронте, перенес валидацию в бакенд
            let filters_to_validate = [
                'id',
                'name',
                'telegram',
                'email',
            ];
            let filters_validated = {};

            for (var key in this.filters) {
                let need_to_validate_filter = filters_to_validate.find(filter => filter == key) != undefined;
                let filter_value = this.filters[key];

                if (need_to_validate_filter) {
                    if (filter_value.length > 1) {
                        filters_validated[key] = filter_value;
                    }
                } else {
                    filters_validated[key] = filter_value;
                }
            }

            return filters_validated;
        },*/
    },
    methods: {
        getRowClass(index) {
            return index % 2 === 0 ? 'bg-gray-50 hover:bg-gray-100 text-xxs' : 'hover:bg-gray-100';
        },
        selectPage(page) {
            if (page === this.users.users.current_page) return
            this.$emit('changePage', page);
        },
        selectPerPage(perPage) {
            this.$emit('changePerPage', perPage);
        },
        closeModal() {
            this.modalContents = null;
            this.isModalOpen = false;
            document.removeEventListener('keyup', this.modalCloseOnEscape);
        },
        editUser(id) {
            this.$emit('editUser', id);
        },
        deleteUser(id, email) {
            if (!confirm(`Действительно удалить пользователя ${email}?`)) {
                return;
            }
            this.$emit('deleteUser', id);
        },
        async copyText(text, target) {
            try {
                await navigator.clipboard.writeText(text);
                this.pop('Скопировано', target);
            } catch ($e) {

            }
        },
        filterData() {
            this.$emit('loadFilter', this.filters);
        },
        copyData(payout, target) {
            this.$emit('copyData', payout);
            this.pop('Готово!', target)
        },
        pop(text, element) {
            let pop = document.createElement('div');
            pop.innerText = text;
            pop.classList.add(...'border p-1 rounded-md bg-white text-xs absolute shadow-md'.split(' '));
            element.after(pop);
            const a = pop.animate([{marginBottom: '0px', opacity: 0}, {
                marginBottom: '20px',
                opacity: 1
            }, {marginBottom: '40px', opacity: 0}], {duration: 400});
            a.onfinish = () => {
                pop.remove()
            };
        },
        printShort(external_id, length) {
            if (!external_id) return '';
            return external_id.toString().length > length ? external_id.toString().substr(0, length - 2) + '...' : external_id;
        },
        modalCloseOnEscape(e) {
            if (e.key === 'Escape') {
                this.closeModal();
            }
        },
        exportSelection() {
            this.$emit('loadFilter', this.filters);
            this.$emit('downloadFilter', this.filters);
        }

    }
}
</script>

<style scoped>

.users-table th {
    font-size: .85em;
    text-align: left;
}

.users-table .contact {
    color: rgb(4, 120, 87);
}

.users-table td.actions, th.actions {
    min-width: 56px;
}

</style>
