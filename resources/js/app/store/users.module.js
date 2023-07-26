import UsersService from '../services/users.service';

const init = {
    loading: false,
    users: null,
    userEditData: {},
    userCreateFormData: {},
    UserFiltersData: {},
    payoutsPickUserFormData: {},
}

export const users = {
    namespaced: true,
    state: init,
    actions: {
        getUsers({commit}, params) {
            commit('startLoading');
            return UsersService.getUsers(params).then(
                data => {
                    commit('stopLoading');
                    commit('getUsersSuccess', data);
                    return Promise.resolve(true);
                },
                error => {
                    commit('stopLoading', false);
                    commit('getUsersFailure');
                    return Promise.reject(error);
                }
            );
        },

        getUserCreateFormData({commit}) {
            //commit('startLoading');
            return UsersService.getUserCreateFormData().then(
                data => {
                    //commit('stopLoading');
                    commit('getUserCreateFormDataSuccess', data);
                    return Promise.resolve(true);
                },
                error => {
                    //commit('stopLoading');
                    commit('getUserCreateFormDataFailure');
                    return Promise.reject(error);
                }
            );
        },

        getUserFiltersData({commit}) {
            //commit('startLoading');
            return UsersService.getUserFiltersData().then(
                data => {
                    //commit('stopLoading');
                    commit('getUserFiltersDataSuccess', data);
                    return Promise.resolve(true);
                },
                error => {
                    //commit('stopLoading');
                    commit('getUserFiltersDataFailure');
                    return Promise.reject(error);
                }
            );
        },

        create({commit}, params) {
            return UsersService.createUser(params).then(
                data => {
                    commit('createUserSuccess', data);
                    return Promise.resolve(true);
                },
                error => {
                    commit('createUserFailure');
                    return Promise.reject(error);
                }
            );
        },

        edit({commit}, params) {
            commit('startLoading');
            return UsersService.editUser(params).then(
                data => {
                    commit('stopLoading');
                    commit('editUserSuccess', data);
                    return Promise.resolve(true);
                },
                error => {
                    commit('stopLoading');
                    commit('editUserFailure');
                    return Promise.reject(error);
                }
            );
        },

        update({commit}, params) {
            commit('startLoading');
            return UsersService.updateUser(params).then(
                data => {
                    commit('stopLoading');
                    return Promise.resolve(true);
                },
                error => {
                    commit('stopLoading');
                    return Promise.reject(error);
                }
            );
        },

        delete({commit}, params) {
            commit('startLoading');
            return UsersService.deleteUser(params).then(
                data => {
                    commit('stopLoading');
                    return Promise.resolve(true);
                },
                error => {
                    commit('stopLoading');
                    return Promise.reject(error);
                }
            );
        },


    },
    mutations: {
        startLoading(state) {
            state.loading = true;
        },
        stopLoading(state) {
            state.loading = false;
        },
        getUsersSuccess(state, users) {
            state.users = users;
        },
        getUsersFailure(state) {
            state.users = null;
        },
        editUserSuccess(state,  data) {
            state.userEditData = data;
        },
        editUserFailure(state) {
            state.userEditData = null;
        },
        getUserCreateFormDataSuccess(state, data) {
            state.userCreateFormData = data;
        },
        getUserCreateFormDataFailure(state) {
            state.userCreateFormData = null;
        },
        getPayoutsPickUserFormDataSuccess(state, data) {
            state.payoutsPickUserFormData = data;
        },
        getPayoutsPickUserFormDataFailure(state) {
            state.payoutsPickUserFormData = null;
        },
        getUserFiltersDataSuccess(state, data) {
            state.UserFiltersData = data;
        },
        getUserFiltersDataFailure(state) {
            state.UserFiltersData = null;
        },
    }
}
