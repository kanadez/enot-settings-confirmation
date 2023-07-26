window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const user = JSON.parse(localStorage.getItem('user'));
if(user && user.token) {
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + user.token;
}

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

import Cyberzilla from "./app/App";
import {createApp} from "vue";
import router from "./app/router";
import store from "./app/store";

const app = createApp(Cyberzilla)
    .use(router)
    .use(store).mount('#app')
