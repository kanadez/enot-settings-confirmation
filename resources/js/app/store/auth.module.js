import AuthService from '../services/auth.service';

const init = {
    ready: false,
    user: null,
    settings: null,
}

export const auth = {
    namespaced: true,
    state: init,
    actions:{
        login({commit}, user) {
            return AuthService.login(user).then(
                data => {
                    commit('success', data);
                    return Promise.resolve(true);
                },

                error => {
                    commit('failure');
                    return Promise.reject(error);
                }
            );
        },

        refresh({commit}) {
            return AuthService.refresh().then(
                data => {
                    commit('success', data);
                    return Promise.resolve(true);
                },
                error => {
                    commit('failure', error);
                    return Promise.reject(error);
                }
            );
        },

        setPerPage({commit}, perPage) {
            commit('setPerPage', perPage);
            return Promise.resolve(true);
        },

        logout({ commit }) {
            return AuthService.logout().then(
                () => {
                    commit('logout');
                    return Promise.resolve();
                },
                error => {
                    commit('failure');
                    return Promise.reject(error);
                }
            );
        },
    },
    mutations: {
        setPerPage(state, perPage) {
            state.settings.per_page = perPage;
        },
        success(state, data) {
            state.user = data.user;
            state.settings = data.settings;
        },
        logout(state) {
            state.user = null;
            state.settings = null;
        },
        failure(state) {
            state.user = null;
            state.settings = null;
        },
        ready(state, bool) {
            state.ready = bool;
        },
    }
}
