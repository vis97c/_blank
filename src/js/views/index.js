import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './_home.vue'
import GetStarted from './_get_started.vue'
// import Contact from './_contact.vue'
import NotFound from './_not_found.vue'

Vue.use(VueRouter)

const views = new VueRouter({
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
        // },
        {
            path: '*',
            redirect: '/404'
        },
        {
            path: '/404',
            name: '404',
            component: NotFound,
            meta: {
                title: '_blank | 404'
            }
        },
    ],
    mode: 'history',
    linkActiveClass: 'active-link',
    linkExactActiveClass: 'exact-active-link',
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { x: 0, y: 0 };
        }
    },
});
views.beforeEach((to, from, next) => {
    /* It will change the title when the router is change*/
    if (to.meta.title) {
        document.title = to.meta.title;
    }
    next();
});
export default views;