
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
import 'element-ui/lib/theme-default/base.css'
import HeadImage from './components/HeadImage.vue'
import Ylook from './components/Ylook.vue'
import TageSerch from './components/TageSerch.vue'
import TagePanel from './components/TagePanel.vue'
import YaddTage from './components/YaddTage.vue'


Vue.use(ElementUI);
Vue.component('tage-serch',TageSerch);
Vue.component('example', require('./components/Example.vue'));
Vue.component('tage',Example);
Vue.component('editor',Editor);
Vue.component('mas',Mas);
Vue.component('y-look',Ylook);
Vue.component('headimage',HeadImage);
Vue.component('tage-panel',TagePanel);
Vue.component('y-add-tage',YaddTage);
const app = new Vue({
    el: '#app'
});
