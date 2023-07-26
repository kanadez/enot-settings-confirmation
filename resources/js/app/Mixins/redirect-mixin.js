/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

let RedirectMixin = {

    data: function () {
        return {
            redirectExceptions: [
                this.$router.resolve({name: 'register'}).path
            ]
        }
    },

    computed: {

    },

    created: function () {

    },

    methods: {

        redirectLoginIfNotAuth() {
            if (this.isLoggedIn === false) { // не авторизован
                let currentRouteIsException = this.redirectExceptions.find(route => route == this.$route.path);
                if(currentRouteIsException == undefined){ // если текущий маршрут - не исключение для редиректа на логин, то редиректим
                    location.href = this.$router.resolve({name: 'login'}).path;
                }
            }
        },

        redirectPathIfAuth(path) {
            if (this.isLoggedIn === true) { // авторизован
                location.href = path;
            }
        },

        redirectPathIfNoAdminAccess(path) {
            if (this.isLoggedIn === true && this.hasAdminAccess === false) {
                location.href = path;
            }
        },

    }

}

export {RedirectMixin};
