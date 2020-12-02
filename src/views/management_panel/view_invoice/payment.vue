<template>
  <div>
    <center>
      <!-- <div v-if="!paidFor">
        <h1>Buy this Lamp - ${{ product.price }} OBO</h1>

        <p>{{ product.description }}</p>
      </div>-->

      <!-- <div v-if="paidFor">
        <h1>Noice, you bought a beautiful lamp!</h1>
      </div>-->

      <div ref="paypal"></div>
      <!-- <div style="text-align:right;width:69%;">
        <vs-button type="relief" to="/view_invoice/upgrade">Back</vs-button>
      </div>-->
    </center>
  </div>
</template>

<script>
// import image from "../assets/lamp.png"
export default {
  name: "HelloWorld",

  data: function() {
    return {
      loaded: false,
      paidFor: false,
      product: {
        price: 10,
        description: "leg lamp from that one movie",
        img: "./assets/lamp.jpg"
      }
    };
  },
  mounted: function() {
    const script = document.createElement("script");
    script.src =
      "https://www.paypal.com/sdk/js?client-id=AU56shJiHzoP5a3Mz9I7dCmCmFpP1lRx1q-u09XFSk9s0bvT_z-FL-CWCg8wYiVQdNcwbb1RpLc6FWB5";
    script.addEventListener("load", this.setLoaded);
    document.body.appendChild(script);
  },
  methods: {
    setLoaded: function() {
      this.loaded = true;
      window.paypal
        .Buttons({
          createOrder: (data, actions) => {
            return actions.order.create({
              purchase_units: [
                {
                  description: this.product.description,
                  amount: {
                    currency_code: "USD",
                    value: this.product.price
                  }
                }
              ]
            });
          },
          onApprove: async (data, actions) => {
            const order = await actions.order.capture();
            console.log(order.status);
            this.paidFor = true;
            if (order.status == "COMPLETED") {
              this.$router.replace({ name: "upgrade" });
            }
            // console.log(order);
          },
          onError: err => {
            // console.log(err);
          }
        })
        .render(this.$refs.paypal);
    }
  }
};
</script>