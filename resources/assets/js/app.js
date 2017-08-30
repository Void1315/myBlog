
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

import Example from './components/Tag.vue'
import Editor from './components/Editor.vue'
import Mas from './components/Mas.vue'
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
Vue.use(ElementUI)

Vue.component('example', require('./components/Example.vue'));
Vue.component('tage',Example);
Vue.component('editor',Editor);
Vue.component('mas',Mas);
const app = new Vue({
    el: '#app'
});
