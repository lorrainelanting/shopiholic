<template>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-6">
      <product-card
        v-for="product in products"
        v-bind:key="product.title"
        v-bind:product="product"
      />
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      products: [
        { title: "Title 1", price: "P100" },
        { title: "Title 2", price: "P200" },
        { title: "Title 3", price: "P300" },
        { title: "Title 4", price: "P400" },
      ],
    };
  },
  methods: {
    showDetails: function (message) {
      alert(message);
    },
  },
};
</script>
