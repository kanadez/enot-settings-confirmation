<template>
    <div class="fixed w-full h-full top-0 left-0 flex items-center justify-center" id="create-user-modal">
        <div class="modal-overlay z-10 absolute w-full h-full bg-black opacity-10"></div>
        <div
            class="modal-container pt-32 flex fixed w-full h-full z-50 overflow-y-auto items-center justify-center"
            @click="closeOnFreeSpace($event)"
        >
            <div class="bg-white rounded-xl p-4 flex flex-col modal">
                <div class="border-b border-gray-100 pb-2 mb-2 flex justify-between">
                    <span class=" font-bold">
                    {{ title }}
                    </span>
                    <span class="rounded-full p-2 cursor-pointer hover:bg-gray-200" @click="$emit('close')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-700" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </span>
                </div>
                <form class="bg-white px-8 pt-6 pb-8 mb-4">
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="name">
                            ФИО
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.name" id="name" type="text" placeholder="ФИО сотрудника">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="birthday">
                            Дата рождения
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.birthday" id="birthday" type="text" placeholder="Дата рождения">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="email">
                            e-Mail
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.email" id="email" type="text" placeholder="e-Mail">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="password">
                            Пароль
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.password" id="password" type="password" placeholder="Пароль">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="position">
                            Должность
                            </label>
                        </div>
                        <div class="w-3/4">
                            <select class="focus:outline-none focus:bg-white focus:border-gray-500"
                                    v-model="params.position" id="position" placeholder="Должность">
                                <option value="">Выберите должность ...</option>
                                <option
                                    v-for="position in formData.positions"
                                    :value="position.id"
                                >{{ position.title }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="full_position_title">
                                Полностью
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.full_position_title" id="full_position_title" type="text" placeholder="Полное название должности">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 text-sm font-bold">
                            Контакты
                            <a class="text-emerald-600" style="text-decoration: underline" href="javascript:void(0)" @click="addContact">
                                Добавить ещё
                            </a>
                        </label>
                    </div>
                    <div v-for="(contact, index) in params.contacts" class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-3/12 px-3 mb-6 md:mb-0">
                            <div class="relative">
                                <select class="focus:outline-none focus:bg-white focus:border-gray-500"
                                        v-model="contact.type" placeholder="Контакт">
                                    <option value="">Тип контакта</option>
                                    <option value="phone">Телефон</option>
                                    <option value="telegram">Telegram</option>
                                    <option value="messenger">Доп. мессенджер</option>
                                    <option value="sos">Экстренный</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full md:w-7/12 px-3 mb-6 md:mb-0">
                            <input class="focus:outline-none focus:bg-white focus:border-gray-500"
                                   v-model="contact.contact" type="text" placeholder="Значение контакта">
                        </div>
                        <div class="w-full md:w-2/12 px-3 mb-6 md:mb-0">
                            <a class="text-red-300" style="text-decoration: underline" href="javascript:void(0)" @click="removeContact(index)">
                                Удалить
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="trello">
                            Trello
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.trello" id="trello" type="text" placeholder="Trello">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="card">
                            Карта банка
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.card" id="card" type="text" placeholder="Карта банка">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="crypto_address">
                                Крипт. кошелек
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.crypto_address" id="crypto_address" type="text"
                                   placeholder="Криптовалютный кошелек">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4">
                                Оплата по ум.
                            </label>
                        </div>
                        <div class="flex w-3/4">
                            <div class="mr-4">
                                <input class="mr-1" v-model="params.payout_method" id="payout_method_card" name="payout_method" value="card" type="radio">
                                <label for="payout_method_card">Карта</label>
                            </div>
                            <div>
                                <input class="mr-1" v-model="params.payout_method" id="payout_method_crypto" name="payout_method" value="crypto" type="radio">
                                <label for="payout_method_crypto">Крипто-кошелек</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="bank">
                            Банк
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.bank" id="bank" type="text" placeholder="Банк">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="swift">
                            SWIFT
                            </label>
                        </div>
                        <div class="w-3/4">
                            <textarea class="w-full" v-model="params.swift" id="swift" type="text"
                                  placeholder="SWIFT"></textarea>
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="fixed_salary">
                                Фикс. ЗП
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.fixed_salary" id="fixed_salary" type="text"
                                   placeholder="Фиксированная зар. плата">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="address">
                            Адрес
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.address" id="address" type="text"
                               placeholder="Адрес проживания">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="timezone">
                            Часовой пояс
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.timezone" id="timezone" type="text" placeholder="Часовой пояс">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="worktime">
                            Рабочее время
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.worktime" id="worktime" type="text" placeholder="Рабочее время">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="startdate">
                            Начало работы
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.startdate" id="startdate" type="text"
                               placeholder="Дата начала работы">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-0">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="relocate_ready">
                                Готов переехать
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.relocate_ready" id="relocate_ready" type="checkbox" >
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="english_level">
                                Уровень англ.
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.english_level" id="english_level" type="text"
                                   placeholder="Уровень английского">
                        </div>
                    </div>
                    <div class="flex items-start mb-2">
                        <div class="w-1/4 pt-1">
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="comments">
                                Комментарии
                            </label>
                        </div>
                        <div class="w-3/4">
                            <textarea class="w-full" v-model="params.comments" id="comments" type="text"
                                      placeholder="Комментарии"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end mt-8">
                        <button @click="$emit('close')"
                                class="mr-2 btn btn-primary-outline font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                            Отмена
                        </button>
                        <button @click="createUser"
                                class="btn btn-primary font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                            Создать
                        </button>
                    </div>
                </form>

                <Errors v-if="this.errors" :errors="this.errors"/>
            </div>
        </div>
    </div>
</template>

<script>

import Errors from "../UI/Errors";

export default {
    name: "CreateUserModal",
    components: {Errors},
    props: {
        title: String,
        formData: Object,
    },
    computed: {},
    data() {
        return {
            isSending: false,
            params: {
                email: '',
                password: '',
                name: '',
                birthday: '',
                position: '',
                full_position_title: '',
                contacts: [{type: '', contact: ''}],
                trello: '',
                card: '',
                payout_method: 'card',
                bank: '',
                swift: '',
                address: '',
                timezone: '',
                worktime: '',
                startdate: '',
                comments: '',

                fixed_salary: '',
                crypto_address: '',
                relocate_ready: '',
                english_level: '',
            },
            errors: null,
        }
    },
    methods: {

        closeOnFreeSpace(click) {
            if (click.target.classList.contains('modal-container')) this.$emit('close');
        },

        createUser() {
            if (this.isSending) return;
            this.errors = null;
            this.isSending = true;
            this.$store.dispatch('users/create', this.params).then(
                success => {
                    this.clearForm();
                    this.$emit('created');
                },

                error => {
                    this.errors = error.response.data;
                    console.log(this.errors);
                }
            ).catch(error => {

            }).finally(() => {
                this.isSending = false;
            });
        },

        clearForm() {
            this.params.email = '';
            this.params.password = '';
            this.params.name = '';
            this.params.birthday = '';
            this.params.position = '';
            this.params.full_position_title = '';
            this.params.contacts = [{type: '', contact: ''}];
            this.params.trello = '';
            this.params.card = '';
            this.params.payout_method = 'card';
            this.params.bank = '';
            this.params.swift = '';
            this.params.address = '';
            this.params.timezone = '';
            this.params.worktime = '';
            this.params.startdate = '';
            this.params.comments = '';

            this.params.fixed_salary = '';
            this.params.crypto_address = '';
            this.params.relocate_ready = '';
            this.params.english_level = '';
        },

        loadFormData() {
            this.errors = null;
            this.$store.dispatch('users/getUserCreateFormData').then(
                success => {

                },

                error => {
                    this.errors = error.response.data;
                    console.log(this.errors);
                }
            ).catch(error => {

            });
        },

        addContact() {
            let new_contact = {
                type: '',
                contact: ''
            };
            this.params.contacts.push(new_contact);
        },

        removeContact(contact_index) {
            let filtered_contacts = [];

            for (let index in this.params.contacts) {
                let contact = this.params.contacts[index];

                if (index != contact_index) {
                    filtered_contacts.push(contact);
                }
            }

            this.params.contacts = filtered_contacts;
        },
    },

    created() {
        /*let modal = document.getElementById("create-user-modal");
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }*/

        this.loadFormData();
    }
}
</script>

<style scoped>

</style>
