require('./bootstrap');

window.Vue = require('vue');

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

import Vue from 'vue';
import Vuesax from 'vuesax';
import 'vuesax/dist/vuesax.css'

Vue.use(Vuesax, {
    colors: {
      primary:'#457b9d',
      success:'#1d3557',
      danger:'#e63946',
      warning:'#f1faee',
      dark:'#a8dadc'
    }
  });

const app = new Vue({
    el: '#app',
});

var myCarousel = document.querySelector('#carousel-homepage');
var carousel = new bootstrap.Carousel(myCarousel);
