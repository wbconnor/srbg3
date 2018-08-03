
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('wheels-table', require('./components/Wheels.vue'));
Vue.component('filter-form', require('./components/Filters.vue'));

const app = new Vue({
    el: '#app',
    //components: { projects },
});


// import Vue from 'vue';
// import App from './App';
//
// require('./bootstrap');
//
// Vue.component('wheels', require('./components/Wheels.vue'));
// // Vue.component('projects-client-side', require('./components/ProjectsClientSide.vue'));
//
// const app = new Vue({
//     el: '#app',
//     components: { App },
//     template: '<App/>',
// });
