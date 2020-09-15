require('./bootstrap');

window.Vue = require('vue');

Vue.component('example', require())

const app = new Vue({
    el: '#app'
});
