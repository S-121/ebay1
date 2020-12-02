<template>
  <div>
    <vs-button color="warning" type="filled" icon="print" v-on:click="print()">Print</vs-button>
    <vs-divider></vs-divider>
    <section class="content invoice" id="invoice" style="padding:20px 40px;">
      <vs-row>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
          <h1>
            <img src="@/assets/images/zik-logo.png" style="width:350px" />
            <small class="pull-right"></small>
          </h1>
          <address>
            <br />N.G.C.A Technology Enterprises LTD
            <br />1 Arpiliou, 8 Aristo Centre, Block B, Floor B, Office 204
            <br />8011 Paphos, Cyprus
            <br />info@zikanalytics.com
            <br />
            <br />Company ID: HE 370976
            <br />Tax ID: CY 10370976V
          </address>
          <br />
          <hr style="margin-top:0px;margin-bottom:0px;display:block" />Bill To:
          <address>
            <strong>Reda Mourchid</strong>
            <br />Morocco
            <br />Email: mohamedrida.mourchid147lcom@gmail.com
          </address>
          <br />
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <h1 style="text-align:right">
                <b>
                  <font color="#1e7fa8">Invoice</font>
                </b>
              </h1>
              <h4 style="text-align:right">
                <b>
                  <font color="#1e7fa8">Invoice # : B- 229493744</font>
                </b>
                <br />
              </h4>

              <h4 style="text-align:right;margin-top:20px">
                <font color="#1e7fa8">Balance Due</font>
              </h4>
              <h3 style="text-align:right">
                <font color="#1e7fa8">$ 59.99</font>
              </h3>
            </vs-col>

            <vs-col class="flex-col" type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <b>Date printed: 2020-07-13</b>
              <br />

              <b>Due Date : 6/15/2020 3:51:24 PM</b>
              <br />

              <b>VAT number:</b>
              <br />
            </vs-col>
          </vs-row>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
          <vs-table class="vs- table-striped" :data="datas1">
            <template slot="thead">
              <vs-th>Description</vs-th>
              <vs-th>Amount Paid</vs-th>
            </template>
            <template slot-scope="{data}">
              <vs-tr role="row" class="odd" :key="indextr" v-for="(tr, indextr) in data">
                <b>
                  <vs-td :data="data[indextr].description">{{data[indextr].description}}</vs-td>
                </b>
                <vs-td :data="data[indextr].amount_paid">{{data[indextr].amount_paid}}</vs-td>
              </vs-tr>
            </template>
          </vs-table>
        </vs-col>
      </vs-row>
      <vs-row>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
          <br />
          <br />
          <p class="lead">Amount paid:</p>
          <br />
          <div class="table-responsive">
            <vs-table class="vs- table-striped" :data="datas2">
              <template slot-scope="{data}">
                <vs-tr role="row" class="odd" :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td class="vs-td" :data="data[indextr].paymethod">{{data[indextr].paymethod}}</vs-td>
                  <vs-td class="vs-td" :data="data[indextr].price">{{data[indextr].price}}</vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </vs-col>
      </vs-row>
    </section>
  </div>
</template>
<script>
export default {
  data: () => ({
    datas1: [
      {
        description: "June payment for Paypal Subscription : StandardM",
        amount_paid: "$ 59.99"
      }
    ],
    datas2: [
      {
        paymethod: "Subscription price:",
        price: "$ 59.99"
      },
      {
        paymethod: "VAT:",
        price: "$ 0 (0%)"
      },
      {
        paymethod: "Total:",
        price: "$ 59.99"
      }
    ]
  }),
  methods: {
    print() {
      window.print();
    }
  }
};
</script>
<style>
#invoice {
  font-size: 16px;
  color: #1e7fa8;
}
.flex-col {
  float: right;
  text-align: right;
  margin-top: 50px;
}
.vs-td {
  background-color: rgb(247, 244, 244);
}
</style>