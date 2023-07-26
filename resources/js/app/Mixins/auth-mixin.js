/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

let AuthMixin = {

    data: function () {
        return {
            user: null
        }
    },

    computed: {
        isReady() {
            return this.$store.state.auth.ready;
        },
        isLoggedIn() {
            return this.$store.state.auth.user !== null;
        },
        hasAdminAccess() {
            if (this.isLoggedIn) {
                if (this.$store.state.auth.user === undefined || this.$store.state.auth.user === null) {
                    return false;
                } else {
                    return this.$store.state.auth.user.has_admin_access || false;
                }
            } else {
                return false;
            }
        }
    },

    created: function () {

    },

    methods: {

        getCurrentUser() {
            this.user = JSON.parse(localStorage.getItem('user'));

            if (this.user && this.user.token) {
                this.$store.dispatch('auth/refresh').then(() => {
                    this.$store.commit('auth/ready', true);
                });

                return;
            }

            this.$store.commit('auth/ready', true);
        },

    }

}

export {AuthMixin};
