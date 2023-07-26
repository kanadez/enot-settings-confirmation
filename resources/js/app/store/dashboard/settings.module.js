import SettingsService from '../../services/dashboard/settings.service';

const init = {
    loading: false,
    settings: null,
    settingEditData: {},
}

export const dashboardSettings = {
    namespaced: true,
    state: init,
    actions: {
        getSettings({commit}, params) {
            commit('startLoading');
            return SettingsService.getSettings(params).then(
                data => {
                    commit('stopLoading');
                    commit('getSettingsSuccess', data.data);
                    return Promise.resolve(true);
                },
                error => {
                    commit('stopLoading', false);
                    commit('getSettingsFailure');
                    return Promise.reject(error);
                }
            );
        },

        edit({commit}, params) {
            commit('startLoading');
            return SettingsService.editSetting(params).then(
                data => {
                    commit('stopLoading');
                    commit('editSettingSuccess', data.data);
                    return Promise.resolve(true);
                },
                error => {
                    commit('stopLoading');
                    commit('editSettingFailure');
                    return Promise.reject(error);
                }
            );
        },

        update({commit}, params) {
            commit('startLoading');
            return SettingsService.updateSetting(params).then(
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

        confirm({commit}, params) {
            commit('startLoading');
            return SettingsService.confirmSettingChange(params).then(
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
        getSettingsSuccess(state, settings) {
            state.settings = settings;
        },
        getSettingsFailure(state) {
            state.settings = null;
        },
        editSettingSuccess(state,  data) {
            state.settingEditData = data;
        },
        editSettingFailure(state) {
            state.settingEditData = null;
        },
    }
}
