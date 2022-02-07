// require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import router from './Router/index';

const app = new Vue({
    el: '#app',
    router
});