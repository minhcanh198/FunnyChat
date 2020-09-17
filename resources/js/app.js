/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import message from './components/message.vue';
import VueChatScroll from 'vue-chat-scroll';
Vue.use(VueChatScroll)

const app = new Vue({
    el: '#app',
    data: {
        message: '',
        chat: {
            messages: [],
        }
    },

    components: {
        message: message
    },

    methods: {
        send() {
            if (this.message.length != 0) {
                this.chat.messages.push(this.message);
                this.message='';
            }
        }
    },
});
