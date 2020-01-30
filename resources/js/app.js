
require('./bootstrap');
window.Vue = require("vue")

import Vue from 'vue'
import VueRouter from 'vue-router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Enlist from './views/enlist/EnlistComponent'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/enlistment',
            name: 'enlist',
            component: Enlist,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});