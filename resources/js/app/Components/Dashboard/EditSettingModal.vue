<template>
    <div class="fixed w-full h-full top-0 left-0 flex items-center justify-center" id="create-setting-modal">
        <div class="modal-overlay z-10 absolute w-full h-full bg-black opacity-10"></div>
        <div
            class="modal-container flex fixed w-full h-full z-50 overflow-y-auto items-center justify-center"
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
                            <label class="block text-gray-500 text-sm md:text-right mb-1 md:mb-0 pr-4" for="value">
                                Значение
                            </label>
                        </div>
                        <div class="w-3/4">
                            <input class="" v-model="params.value" id="value" type="text" placeholder="Введите значение настойки">
                        </div>
                    </div>
                    <div class="flex justify-end mt-8">
                        <button @click="$emit('close')"
                                class="mr-2 btn btn-primary-outline font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                            Отмена
                        </button>
                        <button @click="updateSetting"
                                class="btn btn-primary font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                            Сохранить
                        </button>
                    </div>
                </form>

                <Errors v-if="this.errors" :errors="this.errors"/>
            </div>
        </div>
    </div>
</template>

<script>

import Errors from "../../UI/Errors";

export default {
    name: "EditSettingModal",
    components: {Errors},
    props: {
        title: String,
        formData: Object,
        settingData: Object,
    },
    computed: {},
    watch: {
        settingData: function () {
            this.fillForm();
        }
    },
    data() {
        return {
            isSending: false,
            params: {
                id: null,
                value: '',
            },
            errors: null,
        }
    },
    methods: {

        closeOnFreeSpace(click) {
            if (click.target.classList.contains('modal-container')) this.$emit('close');
        },

        updateSetting() {
            if (this.isSending) return;
            this.errors = null;
            this.isSending = true;
            this.$store.dispatch(`dashboardSettings/update`, this.params).then(
                success => {
                    this.clearForm();
                    this.$emit('updated');
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

        fillForm() {
            this.params.id = this.settingData.id;
            this.params.value = this.settingData.value;
        },

        clearForm() {
            this.params.id = null;
            this.params.value = '';
        },
    },

    mounted() {

    },

    created() {
        //this.loadFormData();
    }
}
</script>

<style scoped>

</style>
