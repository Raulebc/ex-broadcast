require('./bootstrap');

// require('alpinejs');

window.Vue = require('vue');

/**
 *  Components
 */
Vue.component('chat-component', require('./components/ChatComponent.vue').default);

new Vue({
    el: '#app'
});
