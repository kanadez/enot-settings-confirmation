<template>
    <aside :class="`w-64 ${sidebarStatus}`" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
            <ul class="space-y-2">
                <li>
                    <a href="#" @click="toggleMenu" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" @click="route($router.resolve({name: 'dashboard-settings'}).path)" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Настройки</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script>
export default {
    name: "Sidebar",
    props: {

    },
    computed: {
        sidebarStatus() {
            return this.sidebarExpanded == true ? 'expanded' : 'narrowed';
        },
    },
    data() {
        return {
            sidebarExpanded: false
        }
    },
    methods: {
        toggleMenu() {
            this.sidebarExpanded = !this.sidebarExpanded;
        },

        route(path) {
            this.$router.push({path: path});
        }
    },
}
</script>

<style scoped>

aside {
    float: left;
}

aside.narrowed {
    width: 4rem;
}

aside.narrowed > div {
    overflow-x: hidden;
}

aside.narrowed > div, aside.expanded > div {
    background: transparent;
}

aside.narrowed li > a > span {
    overflow-x: hidden;
    margin-left: 1.2rem;
}

</style>
