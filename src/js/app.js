window.$ = window.jQuery = require('jquery');
import Vue from 'vue';
import * as svgicon from 'vue-svgicon';
import router from './views'
import App from './App.vue';

require('./compiled-icons');
Vue.use(svgicon);


Vue.config.productionTip = false

var app = new Vue({
  router,
  render: h => h(App),
}).$mount('#appex');