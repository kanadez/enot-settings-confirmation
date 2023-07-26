<template>
    <div class="rounded-xl p-2">
        <div v-if="settings.length === 0">Пока нет настроек. Выполните php artisan db:seed</div>
        <form v-else @submit.prevent="filterData">
            <table class="settings-table w-full table-auto">
                <thead class="">
                <tr>
                    <th>#</th>
                    <th>Настройка</th>
                    <th>Значение</th>
                    <th class="actions"></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(setting, index) in settings" :class="getRowClass(index)">
                    <td>{{ setting.id }}</td>
                    <td>{{ setting.key }}</td>
                    <td>{{ setting.value }}</td>
                    <td class="actions">
                        <a @click="editSetting(setting.id)"
                                class="cursor-pointer bg-gray-400 mr-1 hover:bg-gray-500 text-white-800 font-semibold py-1 px-1 border border-gray-400 rounded float-left">
                            <Icon type="edit" class="w-3 h-3 text-white" title="Редактировать"/>
                        </a>
                    </td>
                </tr>
                </tbody>
                <tfoot class="border-t border-gray-300">

                </tfoot>
            </table>
        </form>

        <Modal v-if="isModalOpen" title="Дополнительная информация" :contents="modalContents" @close="closeModal"/>
    </div>
</template>

<script>

import Modal from "./../Modal";
import Input from "../../UI/Input";
import Icon from "../../UI/Icon";
import Datepicker from 'vue3-date-time-picker';
import Button from "../../UI/Button";

const DEFAULT_PER_PAGE = 2000;

export default {
    name: "settings",
    components: {Button, Input, Icon, Modal, Datepicker},
    data() {
        return {
            isModalOpen: false,
            modalContents: null,
            per_page: DEFAULT_PER_PAGE,
        }
    },
    props: {
        settings: Object,
        loading: Boolean,
    },
    mounted() {
        this.per_page = DEFAULT_PER_PAGE;
    },
    computed: {

    },
    methods: {
        getRowClass(index) {
            return index % 2 === 0 ? 'bg-gray-50 hover:bg-gray-100 text-xxs' : 'hover:bg-gray-100';
        },
        closeModal() {
            this.modalContents = null;
            this.isModalOpen = false;
            document.removeEventListener('keyup', this.modalCloseOnEscape);
        },
        editSetting(id) {
            this.$emit('editSetting', id);
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

.settings-table th {
    font-size: .85em;
    text-align: left;
}

.settings-table .contact {
    color: rgb(4, 120, 87);
}

.settings-table td.actions, th.actions {
    min-width: 56px;
}

</style>
