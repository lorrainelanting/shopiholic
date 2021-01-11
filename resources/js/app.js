/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

/**
 * Imports
 */
import router from "./router.js";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

/**
 * Product Components
 */
Vue.component("product-list", require("./components/ProductList.vue").default);
Vue.component("product-card", require("./components/ProductCard.vue").default);

/**
 * Cart Components
 */
Vue.component("cart-items", require("./components/CartCard.vue").default);
/**
 * Partials Components
 */
Vue.component(
    "home-navbar",
    require("./components/partials/HomeNavbar.vue").default
);

/**
 * User Settings Components
 */
Vue.component("user-profile", require("./components/UserProfile.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.mixin({
    methods: {
        /**Calculate total price
         * @param {integer} unitPrice
         * @param {integer} quantity
         * @return integer
         * **/
        calcTotalPrice: function({ unitPice = 0, quantity = 0 }) {
            return unitPice * quantity;
        }
    }
});

const app = new Vue({
    router
}).$mount("#app");
