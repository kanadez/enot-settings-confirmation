<template>
    <div class="">

    </div>
</template>

<script>
import Input from "../UI/Input";
import Button from "../UI/Button";
import Errors from "../UI/Errors";
import {RedirectMixin} from "../Mixins/redirect-mixin";
import {AuthMixin} from "../Mixins/auth-mixin";

export default {
    name: "HomePage",
    components: {Errors, Button, Input},
    mixins: [RedirectMixin, AuthMixin],
    computed: {

    },
    created() {
        this.redirectLoginIfNotAuth();
        this.redirectPathIfNoAdminAccess(
            this.$router.resolve({name: 'dashboard-settings'}).path
        );
        this.redirectPathIfAuth(
            this.$router.resolve({name: 'admin-users'}).path
        );
    },
    data() {
        return {
            loading: false,
            errors: null,
        }
    },
    methods: {

    }
}
</script>

<style scoped>

</style>
