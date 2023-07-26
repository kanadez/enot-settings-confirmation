const AUTH_API_URL = '/api/auth';

class RegisterService {

    successCallback(response) {
        return Promise.resolve(response.data);
    }

    errorCallback(error) {
        return Promise.reject(error);
    }

    register(user) {
        return axios.post(AUTH_API_URL + '/register', user).then(
            this.successCallback.bind(this),
            this.errorCallback.bind(this)
        );
    }

}

export default new RegisterService();
