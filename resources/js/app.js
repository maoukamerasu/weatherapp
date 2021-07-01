import Vue from 'vue'
window.Vue = require('vue');
require('./bootstrap');

Vue.component('example-component',require('./components/welcome.vue').default);
console.log("testd")
const app = new Vue({
    el: '#app',

});