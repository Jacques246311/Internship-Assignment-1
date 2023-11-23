import './bootstrap';
// resources/js/app.js
require('./bootstrap');

window.Vue = require('vue');

Vue.component('user-chart', require('./components/UserChart.vue').default);

const app = new Vue({
    el: '#app',
});

