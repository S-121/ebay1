<template>
  <div>
    <vs-row vs-justify="center">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
        <vs-card>
          <div slot="header">
            <h3>
              Your current plan is:
              <b>STANDARD MONTHLY</b>
            </h3>
          </div>
          <div>
            <span>To upgrade your subscription please choose plan from below</span>
          </div>
        </vs-card>
      </vs-col>
    </vs-row>
    <br />
    <br />
    <div>
      <vs-row>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3"></vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
          <vs-popup class="holamundo" title="Pay Now" :active.sync="popupActivo">
            <div class="con-select-example">
              <div ref="paypal"></div>
            </div>
          </vs-popup>
          <vs-tabs alignment="center">
            <vs-tab label="Starter">
              <div class="con-tab-ejemplo">
                <vs-row vs-justify="center">
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="child-card">
                      <vs-card class="cardx">
                        <div style="text-align:center;">
                          <h6>BILLED MONTHLY</h6>
                          <br />
                          <div class="planPrice">
                            <span>$</span>
                            <h2>29</h2>
                            <span class="smallPr">99</span>
                            <span>/mo</span>
                          </div>
                          <br />
                          <div class="billedBadge" style="max-width: 190px;">Billed Monthly</div>
                          <br />
                          <div class="planCardBody">
                            <vs-list class="planList">
                              <vs-list-item icon="check" subtitle="eBay Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Ali Express Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Training &amp; webinars"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Live chat support"></vs-list-item>
                            </vs-list>
                          </div>
                          <div class="centerx">
                            <vs-button
                              @click="popupActivo=true"
                              type="gradient"
                              v-on:click="pay1()"
                            >Pay Now</vs-button>
                          </div>
                        </div>
                      </vs-card>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="child-card">
                      <vs-card class="cardx">
                        <div style="text-align:center;">
                          <h6>BILLED YEARLY</h6>
                          <br />
                          <div class="planPrice">
                            <span>$</span>
                            <h2>19</h2>
                            <span class="smallPr">99</span>
                            <span>/mo</span>
                          </div>
                          <br />
                          <div class="billedBadge" style="max-width: 190px;">$240 Billed Annually</div>
                          <br />
                          <div class="planCardBody">
                            <vs-list class="planList">
                              <vs-list-item icon="check" subtitle="eBay Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Ali Express Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Training &amp; webinars"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Live chat support"></vs-list-item>
                            </vs-list>
                          </div>
                          <div class="centerx">
                            <vs-button
                              @click="popupActivo=true"
                              type="gradient"
                              v-on:click="pay2()"
                            >Pay Now</vs-button>
                            <!-- <vs-popup class="holamundo" title="Pay Now" :active.sync="popupActivo2">
                              <div class="con-select-example">
                                <div ref="paypal"></div>
                              </div>
                            </vs-popup>-->
                          </div>
                        </div>
                      </vs-card>
                    </div>
                  </vs-col>
                </vs-row>
              </div>
            </vs-tab>
            <vs-tab label="Standard">
              <div class="con-tab-ejemplo">
                <vs-row vs-justify="center">
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="child-card">
                      <vs-card class="cardx">
                        <div style="text-align:center;">
                          <h6>BILLED MONTHLY</h6>
                          <br />
                          <div class="planPrice">
                            <span>$</span>
                            <h2>59</h2>
                            <span class="smallPr">99</span>
                            <span>/mo</span>
                          </div>
                          <br />
                          <div class="billedBadge" style="max-width: 190px;">Billed Monthly</div>
                          <br />
                          <div class="planCardBody">
                            <vs-list class="planList">
                              <vs-list-item icon="check" subtitle="eBay Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Ali Express Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Training &amp; webinars"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Live chat support"></vs-list-item>
                            </vs-list>
                          </div>
                          <div class="centerx">
                            <vs-button
                              @click="popupActivo=true"
                              type="gradient"
                              v-on:click="pay3()"
                            >Pay Now</vs-button>
                            <!-- <vs-popup class="holamundo" title="Pay Now" :active.sync="popupActivo3">
                              <div class="con-select-example">
                                <div ref="paypal"></div>
                              </div>
                            </vs-popup>-->
                          </div>
                        </div>
                      </vs-card>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="child-card">
                      <vs-card class="cardx">
                        <div style="text-align:center;">
                          <h6>BILLED YEARLY</h6>
                          <br />
                          <div class="planPrice">
                            <span>$</span>
                            <h2>40</h2>
                            <span>/mo</span>
                          </div>
                          <br />
                          <div class="billedBadge" style="max-width: 190px;">$480 Billed Annually</div>
                          <br />
                          <div class="planCardBody">
                            <vs-list class="planList">
                              <vs-list-item icon="check" subtitle="eBay Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Ali Express Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Training &amp; webinars"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Live chat support"></vs-list-item>
                            </vs-list>
                          </div>
                          <div class="centerx">
                            <vs-button
                              @click="popupActivo=true"
                              type="gradient"
                              v-on:click="pay4()"
                            >Pay Now</vs-button>
                            <!-- <vs-popup class="holamundo" title="Pay Now" :active.sync="popupActivo4">
                              <div class="con-select-example">
                                <div ref="paypal"></div>
                              </div>
                            </vs-popup>-->
                          </div>
                        </div>
                      </vs-card>
                    </div>
                  </vs-col>
                </vs-row>
              </div>
            </vs-tab>
            <vs-tab label="Enterprise">
              <div class="con-tab-ejemplo">
                <vs-row vs-justify="center">
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="child-card">
                      <vs-card class="cardx">
                        <div style="text-align:center;">
                          <h6>BILLED MONTHLY</h6>
                          <br />
                          <div class="planPrice">
                            <span>$</span>
                            <h2>89</h2>
                            <span class="smallPr">99</span>
                            <span>/mo</span>
                          </div>
                          <br />
                          <div class="billedBadge" style="max-width: 190px;">Billed Monthly</div>
                          <br />
                          <div class="planCardBody">
                            <vs-list class="planList">
                              <vs-list-item icon="check" subtitle="eBay Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Ali Express Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Training &amp; webinars"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Live chat support"></vs-list-item>
                            </vs-list>
                          </div>
                          <div class="centerx">
                            <vs-button
                              @click="popupActivo=true"
                              type="gradient"
                              v-on:click="pay5()"
                            >Pay Now</vs-button>
                            <!-- <vs-popup class="holamundo" title="Pay Now" :active.sync="popupActivo5">
                              <div class="con-select-example">
                                <div ref="paypal"></div>
                              </div>
                            </vs-popup>-->
                          </div>
                        </div>
                      </vs-card>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="child-card">
                      <vs-card class="cardx">
                        <div style="text-align:center;">
                          <h6>BILLED YEARLY</h6>
                          <br />
                          <div class="planPrice">
                            <span>$</span>
                            <h2>50</h2>
                            <span>/mo</span>
                          </div>
                          <br />
                          <div class="billedBadge" style="max-width: 190px;">$600 Billed Annually</div>
                          <br />
                          <div class="planCardBody">
                            <vs-list class="planList">
                              <vs-list-item icon="check" subtitle="eBay Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Ali Express Research tools"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Training &amp; webinars"></vs-list-item>
                              <vs-list-item icon="check" subtitle="Live chat support"></vs-list-item>
                            </vs-list>
                          </div>
                          <div class="centerx">
                            <vs-button
                              @click="popupActivo=true"
                              type="gradient"
                              v-on:click="pay6()"
                            >Pay Now</vs-button>
                            <!-- <vs-popup class="holamundo" title="Pay Now" :active.sync="popupActivo6">
                              <div class="con-select-example">
                                <div ref="paypal"></div>
                              </div>
                            </vs-popup>-->
                          </div>
                        </div>
                      </vs-card>
                    </div>
                  </vs-col>
                </vs-row>
              </div>
            </vs-tab>
          </vs-tabs>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3"></vs-col>
      </vs-row>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      popupActivo: false,
      options1: 29.99,
      options2: 19.99,
      options3: 59.99,
      options4: 40,
      options5: 89.99,
      options6: 50,
      loaded: false,
      paidFor: false,
      product: {
        price: 0,
        description: "leg lamp from that one movie",
        img: "./assets/lamp.jpg"
      },
      data: [
        {
          email: "",
          create_time: "",
          username: "",
          price: ""
        }
      ]
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
            // console.log(order);
            this.paidFor = true;
            this.popupActivo = false;

            let email = order.payer.email_address;
            let create_time = order.create_time;
            let username =
              order.payer.name.given_name + order.payer.name.surname;
            let price = this.product.price;

            this.data.email = email;
            this.data.create_time = create_time;
            this.data.username = username;
            this.data.price = price;

            console.log(this.data);
            this.$store
              .dispatch("products/payment", this.data)
              .then(function(res) {
                if (res.data == "payment") {
                  console.log("payment");
                } else {
                  console.log("no1");
                }
              })
              .catch(function(error) {
                console.log(error);
              });
          },
          onError: err => {
            // console.log(err);
          }
        })
        .render(this.$refs.paypal);
    },
    pay1() {
      this.product.price = this.options1;
    },
    pay2() {
      this.product.price = this.options2;
    },
    pay3() {
      this.product.price = this.options3;
    },
    pay4() {
      this.product.price = this.options4;
    },
    pay5() {
      this.product.price = this.options5;
    },
    pay6() {
      this.product.price = this.options6;
    }
  }
};
</script>
<style>
.ul-tabs {
  background-color: #ffffff;
}
.planPrice {
  display: flex;
  justify-content: center;
  position: relative;
  max-width: 135px;
  margin: 0 auto;
}
.child-card {
  padding: 5px;
}
.planPrice span:last-child {
  align-self: flex-end;
}
.billedBadge {
  max-width: 190px;
}
.cardPlan .billedBadge {
  color: #b1b1b1;
  font-family: mtsRegular;
}
.billedBadge {
  border: 1px solid #dddddd;
  padding: 3px 7px;
  border-radius: 50px;
  text-align: center;
  margin: 8px auto;
  font-size: 13px;
}
.planCardBody {
  padding: 0 20px 20px 20px;
  animation: slidePlan 400ms ease;
}
.planList {
  padding: 0 30px;
  list-style: none;
  max-width: 325px;
  margin: 20px auto;
}
</style>