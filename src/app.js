window.$ = window.jQuery = require('jquery');
import Vue from 'vue';
import * as svgicon from 'vue-svgicon';
import App from './App.vue';

require('./compiled-icons');
Vue.use(svgicon);


Vue.config.productionTip = false

var app = new Vue({
  render: h => h(App),
}).$mount('#app')