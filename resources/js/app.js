
require('./bootstrap');

window.Vue = require('vue');

let mynavbar = require('./components/navbar.vue');
let myfooter = require('./components/footer.vue');

let message = require('./components/message.vue');

import VueChatScroll from 'vue-chat-scroll';

Vue.use(VueChatScroll);
const app = new Vue({
    el: '#app',
    components:{
    	'app-navbar':mynavbar,
    	'app-footer':myfooter,
    	'app-message':message
    },
    data()
    {
    	return {
    		messages:[],
    		message:''
    	};
    },
    methods:{
    	sendMessage()
    	{
    		if(this.message.trim())
    		{
    			this.messages.push({name:'Hook',message:this.message});
    			this.message = '';
    		}
    		console.log(this.messages);
    	}
    },
    mounted()
    {
        console.log(Echo.channel('chat'));
        Echo.channel('chat').listen('App.Event.ChatEvent',(e)=>{console.log(e.order.name);
            });
    },
    created()
    {
        console.log('here');
    }
});
