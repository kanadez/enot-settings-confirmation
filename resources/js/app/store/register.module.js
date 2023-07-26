import RegisterService from '../services/register.service';

const init = {
    ready: false,
}

export const register = {
    namespaced: true,
    state: init,
    actions:{

        register({commit}, user) {
            return RegisterService.register(user).then(
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

    },
    mutations: {
        success(state, data) {
        },
        failure(state) {
        },
        ready(state, bool) {
            state.ready = bool;
        },
    }
}
