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
            name: 'Home',
            component: Home,
            meta: {
                title: '_blank | Home'
            }
        },
        {
            path: '/get_started',
            name: 'GetStarted',
            component: GetStarted,
            meta: {
                title: '_blank | Get Started'
            }
        },
        // {
        //     path: '/contact',
        //     component: Contact
        // }
    ],
});