<template>
    <div class="container mx-auto">
        <header class="pt-10 flex justify-between">
            <div class="flex items-center space-x-8">
                <div class="flex items-center space-x-4" style="padding-left:1.3rem">
                    <RouterLink :to="$router.resolve({name: 'admin-home'}).path" class="logo"></RouterLink>
                    <RouterLink :to="$router.resolve({name: 'admin-home'}).path" class="font-bold">Admin</RouterLink>
                </div>
            </div>
            <div class="flex items-center">
                <Button @click="logout"><Icon type="logout" size="24" class="w-4 h-4 mr-2"/>Выход</Button>
            </div>
        </header>
        <Sidebar/>
        <section class="content mb-4">
            <RouterView  />
        </section>
    </div>
</template>

<script>
import Button from "../UI/Button";
import Icon from "../UI/Icon";
import Sidebar from "../Components/Sidebar";

export default {
    name: "LayoutAdmin",
    components: {Sidebar, Icon, Button},
    data() {
        return {
            viewKey: 1
        };
    },
    methods: {
        logout() {
            this.$store.dispatch("auth/logout").then(
                success => {
                    this.$router.push({path: this.$router.resolve({name: 'login'}).path})
                },

                error => {

                }
            );
        },
    }
}
</script>

<style scoped>

</style>
