require('../bootstrap');

import AccountsComponent from './components/AccountsComponent.vue'
import Vue from "vue";

Vue.component('accounts-component', AccountsComponent);

const app = new Vue({
    el      : '#app',
});