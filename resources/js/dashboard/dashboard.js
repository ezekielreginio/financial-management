require('../bootstrap');

import DashboardComponent from './components/DashboardComponent.vue'

window.Vue = require('vue').default;

Vue.component('dashboard-component', DashboardComponent);

const app = new Vue({
    el      : '#app',
});