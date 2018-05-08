
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap.js';
import Alert from './components/Alert.vue';
import Loader from './components/Loader.vue';
import BlogForm from './components/BlogForm.js';
import VueHighlightJS from 'vue-highlightjs';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Tell Vue.js to use vue-highlightjs
Vue.use(VueHighlightJS);

const app = new Vue({
    el: '#app',

    components: {
        Alert,
        BlogForm,
        Loader
    },

    data: {
        displayNav: false
    },

    methods: {
        toggleNav() {
            this.displayNav = !this.displayNav
        },
        showNav() {
            if ( window.innerWidth > 990 ) {
                return this.displayNav = false
            }
            return this.displayNav
        }
    },

    computed: {
        // width() {
        //     this.showNav();
        // }
    },

    directives: {
        escapeContent: {
            bind(el) {
                const html = el.innerHTML;

                el.textContent = html;
            }
        }
    }
});
