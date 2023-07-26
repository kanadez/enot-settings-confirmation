import {createRouter, createWebHistory} from "vue-router";

// ------------- Admin ------------- //
import HomePage from "./Pages/HomePage";
import MainPage from "./Pages/MainPage";
import LoginPage from "./Pages/LoginPage";
import UsersPage from "./Pages/UsersPage";
import RegisterPage from "./Pages/RegisterPage";

// ------------- User --------------//
import DashboardHomePage from "./Pages/Dashboard/DashboardHomePage";
import DashboardSettingsPage from "./Pages/Dashboard/DashboardSettingsPage";

const routes = [
    {
        path: '/',
        component: MainPage,
        name: 'main'
    },
    {
        path: '/login',
        component: LoginPage,
        name: 'login'
    },
    {
        path: '/register',
        component: RegisterPage,
        name: 'register'
    },

    // ------ Admin ------- //
    {
        path: '/admin/',
        component: HomePage,
        name: 'admin-home'
    },
    {
        path: '/admin/users',
        component: UsersPage,
        name: 'admin-users'
    },

    // ----- Dashboard ----- //
    {
        path: '/dashboard',
        component: DashboardHomePage,
        name: 'dashboard-home'
    },
    {
        path: '/dashboard/settings',
        component: DashboardSettingsPage,
        name: 'dashboard-settings'
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
