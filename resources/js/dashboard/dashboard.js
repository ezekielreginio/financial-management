require('../bootstrap');

import DashboardComponent from './components/DashboardComponent.vue'

import Vue from "vue";

Vue.component('dashboard-component', DashboardComponent);

const app = new Vue({
    el      : '#app',
});