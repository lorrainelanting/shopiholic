<template>
  <div class="container">
    <table class="table table-borderless shadow-sm">
      <thead>
        <tr class="border">
          <td><input type="checkbox" v-model="selectAll" /></td>
          <td>Product</td>
          <td>Unit Price</td>
          <td>Quantity</td>
          <td>Total Price</td>
          <td>Action</td>
        </tr>
      </thead>
    </table>

    <table class="table table-borderless shadow-sm">
      <thead>
        <tr class="border-bottom">
          <th><input type="checkbox" /></th>
          <th colspan="5">Philips</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="cartItem in cartItems"
          v-bind:key="cartItem.id"
          v-bind:cartItem="cartItem"
        >
          <td>
            <input type="checkbox" v-model="selected" :value="cartItem.id" />
          </td>
          <td>{{ cartItem.description }}</td>
          <td>₱{{ cartItem.unitPrice }}</td>
          <td>
            <button class="btn">
              <i class="fas fa-minus fa-sm text-muted"></i>
            </button>
            {{ cartItem.quantity }}
            <button class="btn">
              <i class="fas fa-plus fa-sm text-muted"></i>
            </button>
          </td>
          <td>
            ₱{{
              calcTotalPrice({
                unitPice: cartItem.unitPrice,
                quantity: cartItem.quantity,
              })
            }}
          </td>
          <td>Delete</td>
        </tr>
      </tbody>
    </table>

    <table class="table table-borderless shadow-sm">
      <tbody>
        <tr>
          <td class="align-middle">
            <input type="checkbox" v-model="selectAll" />
          </td>
          <td class="align-middle">Select All (2)</td>
          <td class="align-middle">Delete</td>
          <td class="text-danger font-weight-bold align-middle">
            Move to My Likes
          </td>
          <td class="text-right align-middle">
            Merchandise Subtotal (0 items):
          </td>
          <td class="font-weight-bold text-danger align-middle">₱200</td>
          <td>
            <button class="btn btn-primary w-100">Check Out</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["cart"],
  data: function () {
    return {
      cartItems: [
        {
          id: "1",
          code: "P0001",
          brand: "Philips",
          category: "coffee-maker",
          description: "Coffee maker",
          quantity: 1,
          unitPrice: 100,
        },
        {
          id: "2",
          code: "P0002",
          brand: "Philips",
          category: "coffee-maker",
          description: "Coffee maker",
          quantity: 2,
          unitPrice: 100,
        },
      ],

      selected: [],
    };
  },

  computed: {
    selectAll: {
      get: function () {
        return this.cartItems
          ? this.selected.length == this.cartItems.length
          : false;
      },
      set: function (value) {
        var selected = [];

        if (value) {
          this.cartItems.forEach(function (cartItem) {
            selected.push(cartItem.id);
          });
        }

        this.selected = selected;
      },
    },
  },

  methods: {},

  mounted() {},
};
</script>
