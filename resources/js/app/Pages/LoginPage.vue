<template>
    <div class="auth-container">
        <div class="login-form">
            <h3 class="text-lg font-bold mb-4">Авторизация</h3>
            <form @submit.prevent="authorize">
                <Input type="text" v-model="email" class="text-center mb-2" />
                <Input type="password" v-model="password" class="text-center mb-2" />
                <Button :disabled="loading" class="mb-2 w-full justify-center">Войти в систему</Button>
                <RouterLink :to="$router.resolve({name: 'register'}).path" class="text-sm text-emerald-600 underline w-full inline-block text-center">Нет аккаунта?</RouterLink>
                <Errors :errors="errors" />
            </form>
        </div>
    </div>
</template>

<script>
import Input from "../UI/Input";
import Button from "../UI/Button";
import Errors from "../UI/Errors";
import {RedirectMixin} from "../Mixins/redirect-mixin";
import {AuthMixin} from "../Mixins/auth-mixin";

export default {
    name: "SettingsPage",
    components: {Errors, Button, Input},
    mixins: [RedirectMixin, AuthMixin],
    computed: {

    },
    created() {
        this.redirectPathIfAuth(this.$router.resolve({name: 'admin-users'}).path);
    },
    data() {
        return {
            email: '',
            password: '',
            loading: false,
            errors: null,
        }
    },
    methods: {
        authorize() {
            if(this.loading) return;
            this.loading = true;
            this.$store.dispatch('auth/login', {
                email: this.email,
                password: this.password
            }).then(
                success => {
                    this.$router.push({path: this.$router.resolve({name: 'admin-users'}).path})
                },

                error => {
                    this.errors = error.response.data;
                }
            ).catch(error => {

            }).finally(() => {
                this.loading = false;
            });
        }
    }
}
</script>

<style scoped>

</style>
