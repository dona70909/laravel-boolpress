window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import App from "./views/App.vue";
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import PageAbout from '../js/components/PageAbout.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
    {
        path: '/',
        name: 'about',
        component: PageAbout,
    }],

});


const app = new Vue({
    router,
    el: '#root',
    render: h => h(App)
});