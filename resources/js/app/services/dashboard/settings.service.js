const SETTINGS_API_URL = '/api/dashboard/settings';

class SettingsService {

    getSettings(params) {
        return axios.post(SETTINGS_API_URL, params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    editSetting(params) {
        return axios.get(SETTINGS_API_URL + `/${params.id}/edit`, {}).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    updateSetting(params) {
        return axios.post(SETTINGS_API_URL + `/${params.id}/update`, params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    confirmSettingChange(params) {
        return axios.post(SETTINGS_API_URL + `/${params.id}/confirm`, params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

}

export default new SettingsService();
