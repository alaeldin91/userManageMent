require('./bootstrap');
require('vue-multiselect/dist/vue-multiselect.min.css')
window.Vue = require('vue').default;
Vue.component('containear_menu', require('./modules/menu/MenuContainear').default);
Vue.component('cardcontainear', require('./components/Card').default);
Vue.component('menu-group', require('./modules/menu/MenuGroups').default);

import Vue from 'vue'
const app = new Vue({
    el: '#app',
});
