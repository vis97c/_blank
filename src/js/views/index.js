import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './_home.vue'
import GetStarted from './_get_started.vue'
// import Contact from './_contact.vue'

Vue.use(VueRouter)

export default new VueRouter({
    linkActiveClass: "active",
    mode: "history",
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/get_started',
            component: GetStarted
        },
        // {
        //     path: '/contact',
        //     component: Contact
        // }
    ],
})