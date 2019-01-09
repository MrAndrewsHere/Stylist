
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-messages', require('./components/ChatMessages.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));


const app = new Vue({
    el: '#app',

    props:[

    ],
    data: {
        messages: [],
        peer_id: 1,
        user_id: 1,


    },

    created() {
        Echo.private('chat')
            .listen('MessageSent', (e) => {
                if(e.message.peer_id == this.user_id && this.peer_id == e.user.id ) {
                    this.messages.push({
                        message: e.message.message,
                        user: e.user
                    });
                }
            });


    },


    methods: {

        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data;
            });
        },



        feetch() {
            this.messages = '';
            axios.get('/messages',{ params: { peer_id:this.peer_id } }).then(response => {

                this.messages = response.data;
            });

        },

        changePeer(peer){
            this.peer_id = peer;
            this.to_peer_id = peer;
            this.feetch();
        },


        currentUser($user){
            this.user_id = $user.id;

        },





        addMessage(message) {
            this.messages.push(message);
            message.peer_id = this.peer_id;
            axios.post('/messages',message).then(response => {
                console.log(response.data);

            });
        }
    }
});
const demo = new Vue(
    {
        el:"#demo",
        props: [

        ],

        data:{
            count:0,
        },
        created() {
            console.log("Demo is mounted");
        },

        methods: {

            up (){
                this.count++;
            },
        },
        template: '<button v-on:click="up">Счётчик кликов — {{ count }}</button>',


    }
);
