require('./bootstrap');

window.Vue = require('vue');

Vue.component('message', require('./components/message.vue'));

const app = new Vue({
    el: '#app',
    data: {
        message: '',
    },
    methods: {
        send() {
            console.log(this.message);
            this.message='';
        }
    },
});
