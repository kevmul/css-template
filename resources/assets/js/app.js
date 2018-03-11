
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap.js';
import Alert from './components/Alert.vue';
import BlogForm from './components/BlogForm.js';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    components: {
        Alert,
        BlogForm
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
        width() {
            this.showNav();
        }
    }
});
