
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('chat', require('./components/Chat.vue'));

Vue.component('chat-form', require('./components/ChatForm.vue'));

const app = new Vue({
    el: '#app',
    data:{
        chats: ''
    },
    created(){
        const userId = $('meta[name="userId"]').attr('content');
        const friendId = $('meta[name="friendId"]').attr('content');

        //receive all messages from sender
        if(friendId !== undefined){
            axios.post('/chat/getChat/' + friendId)
                .then((response) => {
                    this.chats = response.data
            })
        }

        //broadcast the message
        Echo.private('chat.' + friendId + '.' + userId)
            .listen('ChatEvent', (e) => {
                this.chats.push(e.message);
                console.log(e.message);
            });
    }
});
