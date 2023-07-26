const USERS_API_URL = '/api/users';

class UsersService {

    getUsers(params) {
        return axios.post(USERS_API_URL, params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    getUserCreateFormData() {
        return axios.get(USERS_API_URL + '/create/form-data').then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    getUserFiltersData() {
        return axios.get(USERS_API_URL + '/filters/data').then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    createUser(params) {
        return axios.post(USERS_API_URL + '/create', params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    editUser(params) {
        return axios.get(USERS_API_URL + `/${params.id}/edit`, {}).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    updateUser(params) {
        return axios.post(USERS_API_URL + `/${params.id}/update`, params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

    deleteUser(params) {
        return axios.post(USERS_API_URL + '/delete', params).then(
            (response) => {
                return Promise.resolve(response.data);
            },
            (error) => {
                return Promise.reject(error);
            }
        );
    }

}

export default new UsersService();
