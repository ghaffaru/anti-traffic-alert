import Vue from 'vue';
import { Plugin } from "vue-fragment";
Vue.use(Plugin);
import MainComponent from './components/MainComponent.vue';

require("bootstrap-css-only/css/bootstrap.min.css");
require("mdbvue/lib/css/mdb.min.css");
require("@fortawesome/fontawesome-free/css/all.min.css");

new Vue({
    el: '#app',
    components: { MainComponent }
})