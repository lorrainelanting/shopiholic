import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

import UserProfile from "./components/UserProfile.vue";

const routes = [
    {
        path: "/user/profile",
        name: "userProfile",
        component: UserProfile
    }
];

const router = new VueRouter({
    el: "#app",
    mode: "history", // removes the '#' in url
    routes: routes
});

export default router;
