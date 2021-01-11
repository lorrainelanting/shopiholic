<template>
  <nav class="navbar navbar-light bg-light border-bottom">
    <a class="navbar-brand"
      ><img
        v-bind:src="logoImageSrc"
        alt="shopiholic-logo"
        class="home-nav-logo"
    /></a>
    <form class="form-inline">
      <input
        class="form-control mr-sm-2"
        type="search"
        placeholder="Search"
        aria-label="Search"
      />
      <button
        v-on:click="say('To do')"
        class="btn btn-outline-success my-2 my-sm-0"
        type="button"
      >
        <i class="fas fa-search"></i>
      </button>
    </form>
    <i
      v-on:mouseover="mouseover('To do')"
      v-on:click="showCart()"
      class="fas fa-shopping-cart fa-2x mr-3"
    ></i>
    <button v-on:click="showUserInfo()" class="btn btn-light">
      <i class="fas fa-user-circle fa-2x mr-2"></i>
    </button>
  </nav>
</template>

<script>
export default {
  data: function () {
    return {
      logoImageSrc: "/images/logo/logo.jpg",
    };
  },

  methods: {
    showUserInfo: function () {
      return (window.location.href = "/user/profile");
    },
    mouseover: function (message) {
      console.log(message);
    },
    showCart: function () {
      return (window.location.href = "/cart");
    },
  },

  mounted() {
    console.log("Component mounted.");
  },
};
</script>
