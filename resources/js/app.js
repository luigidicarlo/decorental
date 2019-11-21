/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('shopping-cart-component', require('./components/ShoppingCartComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

document.addEventListener('DOMContentLoaded', function() {
    var button = $('#add-to-cart-toggler');
    button.on('click', function() {
        var product = {
            id: Number($('#add-to-cart').children()[0].value),
            quantity: Number($('#add-to-cart').children()[1].value),
        }
        addToCart(product);
    });
});

window.next = function() { 
    $('.carousel').carousel('next');
    return false;
}

window.previous = function() {
    $('.carousel').carousel('prev');
    return false;
}

window.getCart = function() {
    if (!sessionStorage.getItem('cart')) {
        return { products: [] };
    } else {
        return JSON.parse(sessionStorage.getItem('cart'));
    }
}

window.addToCart = function(product) {
    var cart = getCart();
    var aux = cart.products.find(function (elem) { return elem.id === product.id });
    if (aux) {
        var index = cart.products.indexOf(aux);
        cart.products[index].quantity += product.quantity;
    } else {
        cart.products.push(product);
    }
    sessionStorage.setItem('cart', JSON.stringify(cart));
}