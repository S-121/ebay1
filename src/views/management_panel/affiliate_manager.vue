<template>
  <div class>
    <vs-tabs>
      <vs-tab label="Home">
        <vs-row vs-justify="center">
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4">
            <div class="child-card">
              <vs-card class="cardx">
                <div class="text-h4" slot="header">
                  <h4>Earning Information</h4>
                </div>
                <div>
                  <vs-row>
                    <vs-col
                      class="vs-col-p"
                      type="flex"
                      vs-justify="center"
                      vs-align="center"
                      vs-w="6"
                    >
                      <p :key="item" v-for="item in earn">{{item.name}}</p>
                    </vs-col>
                    <vs-col
                      class="vs-col-p"
                      style="text-align:center;"
                      type="flex"
                      vs-justify="center"
                      vs-align="center"
                      vs-w="6"
                    >
                      <p :key="item" v-for="item in earn">
                        <b>{{item.price}}</b>
                      </p>
                    </vs-col>
                  </vs-row>
                </div>
              </vs-card>
            </div>
          </vs-col>
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4">
            <div class="child-card">
              <vs-card class="cardx">
                <div class="text-h4" slot="header">
                  <h4>My referral url:</h4>
                </div>
                <div>
                  <center>
                    <!-- <vs-input
                      icon="email"
                      label-placeholder="Enter your Paypal Email"
                      style="width:90%;text-align:left;"
                    />-->
                    <vx-input-group class="mb-base">
                      <vs-input v-model="input4" />

                      <template slot="append">
                        <div class="append-text btn-addon">
                          <vs-button color="primary" type="border">
                            <feather-icon icon="CopyIcon" />
                          </vs-button>
                        </div>
                      </template>
                    </vx-input-group>
                    <vs-button color="dark" type="border" to="/payout/request_payout">Request payout</vs-button>
                  </center>
                </div>
              </vs-card>
            </div>
          </vs-col>
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4">
            <div class="child-card">
              <vs-card class="cardx">
                <div class="text-h4" slot="header">
                  <h4>My paypal email</h4>
                </div>
                <div>
                  <center>
                    <vs-input
                      icon="email"
                      label-placeholder="Enter your Paypal Email"
                      style="width:70%;text-align:left;"
                    />
                    <br />
                    <vs-button
                      color="dark"
                      type="border"
                      @click="$vs.notify({text:'PayPal email is required!',color:'#ff404f',position:'top-center'})"
                    >Save</vs-button>
                  </center>
                </div>
              </vs-card>
            </div>
          </vs-col>
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
            <div class="child-card">
              <vs-card class="cardx">
                <div class="text-h4" slot="header">
                  <h3>Referrals</h3>
                </div>
                <div>
                  <vs-table max-items="10" pagination :data="users" search>
                    <template slot="thead">
                      <vs-th>Full name</vs-th>
                      <vs-th>Payment date</vs-th>
                      <vs-th>Payout day</vs-th>
                      <vs-th>Amount earned</vs-th>
                      <vs-th>Earned</vs-th>
                    </template>

                    <template slot-scope="{data}">
                      <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                        <vs-td :data="data[indextr].name">{{data[indextr].name}}</vs-td>
                        <vs-td :data="data[indextr].payment">{{data[indextr].payment}}</vs-td>
                        <vs-td :data="data[indextr].payout">{{data[indextr].payout}}</vs-td>
                        <vs-td :data="data[indextr].amount">{{data[indextr].amount}}</vs-td>
                        <vs-td :data="data[indextr].earned">{{data[indextr].earned}}</vs-td>
                      </vs-tr>
                    </template>
                  </vs-table>
                </div>
              </vs-card>
            </div>
          </vs-col>
        </vs-row>
      </vs-tab>
      <vs-tab label="Service">
        <div class="con-tab-ejemplo">
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
              <div class="child-card">
                <vs-card class="cardx">
                  <div class="text-h4" slot="header">
                    <h4>Successful referrals</h4>
                  </div>
                  <div class="text-b" style="text-align:center;">
                    <b>0</b>
                  </div>
                </vs-card>
              </div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
              <div class="child-card">
                <vs-card class="cardx">
                  <div class="text-h4" slot="header">
                    <h4>Non-paying referrals</h4>
                  </div>
                  <div class="text-b" style="text-align:center;">
                    <b>94</b>
                  </div>
                </vs-card>
              </div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
              <div class="child-card">
                <vs-card class="cardx">
                  <div class="text-h4" slot="header">
                    <h4>Canceled referrals</h4>
                  </div>
                  <div class="text-b" style="text-align:center;">
                    <b>10</b>
                  </div>
                </vs-card>
              </div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
              <div class="child-card">
                <vs-card class="cardx">
                  <div class="text-h4" slot="header">
                    <h4>Total referrals</h4>
                  </div>
                  <div class="text-b" style="text-align:center;">
                    <b>104</b>
                  </div>
                </vs-card>
              </div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <div class="child-card">
                <vs-card class="cardx">
                  <div>
                    <vs-table max-items="30" pagination :data="services" search>
                      <template slot="thead">
                        <vs-th>Full name</vs-th>
                        <vs-th>Email</vs-th>
                        <vs-th>Date of registration</vs-th>
                        <vs-th>Status</vs-th>
                      </template>

                      <template slot-scope="{data}">
                        <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                          <vs-td :data="data[indextr].name">{{data[indextr].name}}</vs-td>
                          <vs-td :data="data[indextr].email">{{data[indextr].email}}</vs-td>
                          <vs-td :data="data[indextr].date">{{data[indextr].date}}</vs-td>
                          <vs-td :data="data[indextr].status">{{data[indextr].status}}</vs-td>
                        </vs-tr>
                      </template>
                    </vs-table>
                  </div>
                </vs-card>
              </div>
            </vs-col>
          </vs-row>
        </div>
      </vs-tab>
    </vs-tabs>
  </div>
</template>
<script>
export default {
  data: () => ({
    users: [
      {
        name: "*****am10@gmail.com",
        payment: "Leanne Graham",
        payout: "Bret",
        amount: "Sincere@april.biz",
        earned: "hildegard.org"
      },
      {
        name: "*****inlogix@gmail.com",
        payment: "Ervin Howell",
        payout: "Antonette",
        amount: "Shanna@melissa.tv",
        earned: "anastasia.net"
      }
    ],
    earn: [
      {
        name: "Cleared balance:",
        price: "$ 49.17"
      },
      {
        name: "Pending balance:",
        price: "$ 0"
      },
      {
        name: "Referred users:",
        price: "104"
      },
      {
        name: "Commission earning:",
        price: "20 %"
      }
    ],
    services: [
      {
        name: "Leanne Graham",
        email: "*****am10@gmail.com",
        date: "1/16/2019 10:31:20 PM",
        status: "New"
      }
    ]
  }),
  methods: {
    randomCenter() {
      function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
      }
      let color = `rgb(${getRandomInt(0, 255)},${getRandomInt(
        0,
        255
      )},${getRandomInt(0, 255)})`;
      this.$vs.notify({
        title: "Position top-center",
        text: "Lorem ipsum dolor sit amet, consectetur",
        color: color,
        position: "top-center"
      });
    }
  }
};
</script>
<style>
.child-card {
  padding: 5px;
}
.text-h4 {
  padding: 10px;
}
.vs-col-p {
  padding: 5px;
}
.vs-col-p p {
  padding: 3px;
  font-size: 14px;
}
.text-b b {
  font-size: 30px;
  color: #076178;
}
.mb-base {
  width: 80%;
}
</style>