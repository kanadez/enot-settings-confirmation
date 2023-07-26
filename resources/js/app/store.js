import {createStore} from "vuex";
import {auth} from "./store/auth.module";
import {register} from "./store/register.module";
import {users} from "./store/users.module";
import {dashboardSettings} from "./store/dashboard/settings.module";

const store = createStore({
    modules: {
        auth,
        register,
        users,
        dashboardSettings
    }
});

export default store;
