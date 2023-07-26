const AUTH_API_URL = '/api/auth';

class AuthService {

    storeUserData(data) {
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + data.token;
        localStorage.setItem('user', JSON.stringify(data));
    }

    removeUserData() {
        localStorage.removeItem('user');
    }

    successCallback(response) {
        if(response.data.token) {
            this.storeUserData(response.data);
        }
        return Promise.resolve(response.data);
    }

    errorCallback(error) {
        this.removeUserData();
        return Promise.reject(error);
    }

    login(user) {
        return axios.post(AUTH_API_URL + '/login', user).then(
            this.successCallback.bind(this),
            this.errorCallback.bind(this)
        );
    }

    refresh() {
        return axios.get(AUTH_API_URL + "/user", {})
            .then(
                this.successCallback.bind(this),
                this.errorCallback.bind(this)
            );
    }

    logout() {
        return axios.post(AUTH_API_URL + "/logout").then(
            response => {
                this.removeUserData();
                return Promise.resolve();
            },
            this.errorCallback.bind(this)
        )
    }
}

export default new AuthService();
