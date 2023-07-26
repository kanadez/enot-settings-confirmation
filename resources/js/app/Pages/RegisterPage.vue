<template>
    <div class="auth-container">
        <div class="login-form">
            <h3 class="text-lg font-bold mb-4">Регистрация</h3>
            <form v-if="!registered" @submit.prevent="register">
                <Input type="text" v-model="name" placeholder="Имя" class="text-center mb-2" />
                <Input type="text" v-model="email" placeholder="e-Mail"  class="text-center mb-2" />
                <Input type="password" v-model="password" placeholder="Пароль" class="text-center mb-2" />
                <Input type="text" v-model="telegram" placeholder="Telegram ID"  class="text-center mb-2" />
                <Input type="text" v-model="phone" placeholder="Телефон"  class="text-center mb-2" />
                <Button :disabled="loading" class="mb-2 w-full justify-center">Зарегистрироваться</Button>
                <RouterLink :to="this.$router.resolve({name: 'login'}).path" class="text-sm text-emerald-600 underline w-full inline-block text-center">Уже есть аккаунт?</RouterLink>
                <Errors :errors="errors" />
            </form>
            <div v-if="registered" class="register-success">
                Вы успешно зарегистрированы
                <RouterLink :to="$router.resolve({name: 'login'}).path" class="text-sm text-emerald-600 underline">Авторизоваться</RouterLink>
            </div>
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
    name: "RegisterPage",
    components: {Errors, Button, Input},
    mixins: [RedirectMixin, AuthMixin],
    computed: {

    },
    created() {
        this.redirectPathIfAuth(this.$router.resolve({name: 'admin-users'}).path);
    },
    data() {
        return {
            name: '',
            email: '',
            password: '',
            telegram: '',
            phone: '',
            loading: false,
            registered: false,
            errors: null,
        }
    },
    methods: {
        register() {
            if(this.loading) return;
            this.loading = true;
            this.$store.dispatch('register/register', {
                name: this.name,
                email: this.email,
                password: this.password,
                telegram: this.telegram,
                phone: this.phone
            }).then(
                success => {
                    this.registered = true;
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
