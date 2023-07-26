<template>
    <LayoutAuth v-if="isReady && !isLoggedIn" />
    <LayoutAdmin v-else-if="isReady && isLoggedIn && hasAdminAccess" />
    <LayoutDashboard v-else-if="isReady && isLoggedIn && !hasAdminAccess" />
</template>

<script>
import LayoutAdmin from "./Layouts/LayoutAdmin";
import LayoutAuth from "./Layouts/LayoutAuth";
import LayoutDashboard from "./Layouts/LayoutDashboard";
import {AuthMixin} from "./Mixins/auth-mixin";

export default {
    name: "App",
    components: {LayoutAuth, LayoutAdmin, LayoutDashboard},
    mixins: [
        AuthMixin
    ],
    computed: {

    },
    data() {
        return {

        }
    },
    async created() {
        this.getCurrentUser();
    }
}
</script>

<style scoped>

</style>
