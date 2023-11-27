import Vue from 'vue';
import UserSignupChart from './components/UserSignupChart.vue';

Vue.component('user-signup-chart', UserSignupChart);

const app = new Vue({
    el: '#app',
});
