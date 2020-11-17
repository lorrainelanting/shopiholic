<template>
  <div class="col mb-4">
    <div
      v-on:click="showDetails('TODO: Show details')"
      class="card shadow-sm p-3 mb-5 bg-white rounded"
    >
      <img
        v-bind:src="imageSrc"
        class="card-img-top card-img-product"
        alt="coffee-maker"
      />
      <div class="card-body">
        <h5 class="card-title">{{ title }}</h5>
        <p class="card-text">{{ price }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["product"],
  data: function () {
    return {};
  },
  methods: {
    showDetails: function (message) {
      alert(message);
    },
  },
  computed: {
    imageSrc: function () {
      if (this.product && this.product.imageSrc) {
        return this.product.imageSrc;
      } else {
        return "images/coffee-maker.jpg";
      }
    },
    title: function () {
      if (this.product && this.product.title) {
        return this.product.title;
      } else {
        return "Philips coffee maker";
      }
    },
    price: function () {
      if (this.product && this.product.price) {
        return this.product.price;
      } else {
        return "P700";
      }
    },
  },
  mounted() {
    console.log(this.title);
  },
};
</script>
