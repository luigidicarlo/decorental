<template>
  <div class="shopping-cart-table">
    <div v-if="cart && cart.products.length > 0">
      <div class="table-responsive">
        <table class="table">
          <thead class="bg-header">
            <tr>
              <th scope="col" class="border-0">
                <div class="p-2 px-3 text-uppercase">Producto</div>
              </th>
              <th scope="col" class="border-0">
                <div class="py-2 text-uppercase">Precio</div>
              </th>
              <th scope="col" class="border-0">
                <div class="py-2 text-uppercase">Cantidad</div>
              </th>
              <th scope="col" class="border-0">
                <div class="py-2 text-uppercase">Total</div>
              </th>
              <th scope="col" class="border-0">
                <div class="py-2 text-uppercase">Remover</div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="product in products" v-bind:key="product.id">
              <th scope="row" class="border-0">
                <div class="p-2 text-center">
                  <img :src="product.image" alt width="70" class="img-fluid rounded shadow-sm" />
                  <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0">
                      <a href="#" class="text-dark d-inline-block align-middle">{{ product.name }}</a>
                    </h5>
                    <span
                      class="text-muted font-weight-normal font-italic d-block"
                    >{{ product.category }}</span>
                  </div>
                </div>
              </th>
              <td class="border-0 align-middle">
                <strong>{{ (product.price - product.price * (product.discount / 100)).toFixed(2) }}</strong>
              </td>
              <td class="border-0 align-middle">
                <div class="row mw-100">
                  <div class="col-8">
                    <input
                      type="number"
                      id="quantity"
                      class="form-control p-2"
                      :value="product.quantity"
                    />
                  </div>
                  <div class="col-4">
                    <button v-on:click="updateCart(product)" class="text-dark">
                      <i class="fa fa-edit"></i>
                    </button>
                  </div>
                </div>
              </td>
              <td class="border-0 align-middle">
                <strong>{{ ((product.price - product.price * (product.discount / 100)) * product.quantity).toFixed(2) }}</strong>
              </td>
              <td class="border-0 align-middle">
                <button v-on:click="deleteCart(product)" class="text-dark">
                  <i class="fa fa-trash"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-12 mx-auto">
          <div
            class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold bg-header"
          >Resumen de Orden</div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom">
                <strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">{{ total }}</h5>
              </li>
            </ul>
            <a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Enviar Presupuesto</a>
          </div>
        </div>
      </div>
    </div>
    <div v-else>
      <h1 class="text-center">No hay productos en el carrito</h1>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      cart: JSON.parse(sessionStorage.getItem("cart")),
      products: [],
      total: 0
    };
  },
  mounted() {
    if (this.cart.products.length > 0) {
      axios
        .post(
          "http://localhost:8080/shopping-cart-products",
          JSON.parse(sessionStorage.getItem("cart"))
        )
        .then(response => {
          this.products = response.data;
          this.getTotal();
        });
    }
  },
  methods: {
    getTotal() {
      let total = 0;
      this.products.forEach(elem => {
        total += +(
          (elem.price - elem.price * (elem.discount / 100)) *
          elem.quantity
        ).toFixed(2);
      });
      this.total = total.toFixed(2);
    },
    getCart() {
      if (!sessionStorage.getItem("cart")) {
        return { products: [] };
      } else {
        return JSON.parse(sessionStorage.getItem("cart"));
      }
    },
    updateCart(product) {
      var cart = getCart();
      var aux = cart.products.find(function(elem) {
        return elem.id === product.id;
      });
      var newQuantity = document.querySelectorAll('#quantity')[0].value;
      console.log(newQuantity);
      var index = cart.products.indexOf(aux);
      if (index !== -1) {
        cart.products.splice(index, 1);
        cart.products.push({id: product.id, quantity: +newQuantity});
      } else {
        console.error("No se pudo actualizar el producto.");
      }
      this.getTotal();
      sessionStorage.setItem("cart", JSON.stringify(cart));
    },
    deleteCart(product) {
      const prod = this.products.find(elem => elem.id === product.id);
      const index = this.products.indexOf(prod);
      this.products.splice(index, 1);
      this.cart.products = this.products;
      this.getTotal();
      sessionStorage.setItem("cart", JSON.stringify(this.cart));
    }
  }
};
</script>