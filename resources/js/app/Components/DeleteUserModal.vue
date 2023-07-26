<template>
    <div class="fixed w-full h-full top-0 left-0 flex items-center justify-center" id="create-user-modal">
        <div class="modal-overlay z-10 absolute w-full h-full bg-black opacity-90"></div>
        <div class="modal-container flex fixed w-full h-full z-50 overflow-y-auto items-center justify-center">
            <div class="bg-white rounded-xl p-4 flex flex-col modal">
                <div class="border-b border-gray-100 pb-2 mb-2 flex justify-between">
            <span class=" font-bold">
                Удалить пользователя?
            </span>
                    <span class="rounded-full p-2 cursor-pointer hover:bg-gray-200" @click="$emit('close')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-700" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </span>
                </div>
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-6">
                            Удалить пользователя {{ params.email }}?
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="button">
                                Удалить
                            </button>
                        </div>
                    </form>
                    <p class="text-center text-gray-500 text-xs">
                        &copy;2020 Acme Corp. All rights reserved.
                    </p>
                </div>

                <Errors v-if="this.errors" :errors="this.errors"/>
            </div>
        </div>
    </div>
</template>

<script>

import Errors from "../UI/Errors";

export default {
    name: "DeleteUserModal",
    components: {Errors},
    props: {},
    computed: {},
    data() {
        return {
            isSending: false,
            params: {
                id: '',
                email: '',
            },
            errors: null,
        }
    },
    methods: {
        deleteUser() {
            if (this.isSending) return;
            this.errors = null;
            this.isSending = true;
            this.$store.dispatch('users/delete', this.params).then(
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
            this.params.id = '';
            this.params.email = '';
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
