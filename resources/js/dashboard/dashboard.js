require('../bootstrap');

import DashboardComponent from './components/DashboardComponent.vue'
import VueChartsCSS from "vue.charts.css";

import Vue from "vue";

Vue.component('dashboard-component', DashboardComponent);
Vue.use(VueChartsCSS);

const app = new Vue({
    el      : '#app',
});