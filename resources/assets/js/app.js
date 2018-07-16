
require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";


Vue.use(Buefy);
Vue.component('slugWidget', require('./components/slugWidget.vue'));

// var app = new Vue({
//     el: '#app',
//     data: {}
// })