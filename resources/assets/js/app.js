/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./font-awesome');

// Import via npm mode_modules
require('material-dashboard/assets/js/core/jquery.min');
require('material-dashboard/assets/js/core/popper.min');
require('material-dashboard/assets/js/core/bootstrap-material-design.min');

require('material-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min');
// Notifications Plugin
require('material-dashboard/assets/js/plugins/bootstrap-notify');
//Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library
require('material-dashboard/assets/js/material-dashboard.min');

require('owl.carousel/dist/owl.carousel.min');
require('lity/dist/lity');

// require('material-dashboard/assets/demo/demo');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });