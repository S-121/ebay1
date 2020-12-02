<template>
  <vs-row vs-justify="center">
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
      <div class="control">
        <vs-card class="cardx">
          <div slot="header" class="control_h1">
            <h1>My subscriptions</h1>
          </div>
          <div>
            <p>Here you can upgrade, cancel and manage your active subscriptions.</p>
            <p>
              <b style="color:red;">NOTE1:</b> you cancel your subscription, you’ll still be able to use ZIK up to the date of your renewal.
            </p>
            <p>
              <b style="color:red;">NOTE2:</b> If you upgrade your membership but don’t cancel your previous subscription, our system will automatically disable the old one.
            </p>
          </div>
        </vs-card>
      </div>
    </vs-col>
    <iframe
      frameborder="0"
      scrolling="no"
      title="Customer reviews powered by Trustpilot"
      loading="auto"
      src="https://widget.trustpilot.com/trustboxes/5419b732fbfb950b10de65e5/index.html?templateId=5419b732fbfb950b10de65e5&amp;businessunitId=5bb5bbf06db088000129d48c#locale=en-GB&amp;styleHeight=24px&amp;styleWidth=100%25&amp;theme=light"
      style="position: relative; height: 24px; width: 100%; border-style: none; display: block; overflow: hidden;"
    ></iframe>
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
      <div class="control">
        <vs-card class="cardx" style="text-align:center;">
          <div slot="header" class="control_h1">
            <h4>Bulk Subscription</h4>
          </div>
          <div class="text">
            <div class="child_text">
              <h2 style="color:#0f7c93;">
                <b>Standard - Monthly</b>
              </h2>
            </div>
            <div class="child_text1">
              <div class="child_text2">
                <h4>Renewal date: N/A</h4>
                <h4>Payment method: PAYPAL</h4>
                <h4>
                  Subscription status
                  <span style="color:red;">Canceled</span>
                </h4>
              </div>
            </div>
            <div class="child_button">
              <vs-button type="gradient" to="/view_invoice/upgrade">UPGRADE</vs-button>
            </div>
          </div>
        </vs-card>
      </div>
    </vs-col>
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
      <div class="control">
        <vs-card class="cardx">
          <div slot="header" class="control_h1">
            <h1>Payment History</h1>
          </div>
          <div>
            <vs-table max-items="7" pagination :data="datas" search>
              <template slot="thead">
                <vs-th>No</vs-th>
                <vs-th>Subscription type</vs-th>
                <vs-th>Merchant type</vs-th>
                <vs-th>Date paid</vs-th>
                <vs-th>Amount</vs-th>
                <vs-th>VAT</vs-th>
                <vs-th>Total amount</vs-th>
                <vs-th>Invoice</vs-th>
              </template>

              <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td :data="data[indextr].id">{{data[indextr].id}}</vs-td>
                  <vs-td :data="data[indextr].id">{{data[indextr].subscription}}</vs-td>
                  <vs-td :data="data[indextr].id">{{data[indextr].merchant}}</vs-td>
                  <vs-td :data="data[indextr].id">{{data[indextr].date_paid}}</vs-td>
                  <vs-td :data="data[indextr].id">{{data[indextr].amount}}</vs-td>
                  <vs-td :data="data[indextr].id">{{data[indextr].vat}}</vs-td>
                  <vs-td :data="data[indextr].id">{{data[indextr].total_amount}}</vs-td>
                  <vs-td :data="data[indextr].id">
                    <router-link to="/view_invoice/invoice">{{data[indextr].invoice}}</router-link>
                  </vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </vs-card>
      </div>
    </vs-col>
  </vs-row>
</template>
<script>
export default {
  data: () => ({
    datas: [
      {
        id: 1,
        subscription: "subscription",
        merchant: "merchant",
        date_paid: "date_paid",
        amount: "amount",
        vat: "vat",
        total_amount: "total_amount",
        invoice: "invoice"
      },
      {
        id: 2,
        subscription: "subscription",
        merchant: "merchant",
        date_paid: "date_paid",
        amount: "amount",
        vat: "vat",
        total_amount: "total_amount",
        invoice: "invoice"
      }
    ]
  })
};
</script>
<style>
.control {
  padding: 5px;
}
.vs-card--header h3 {
  padding: 10px;
}
.control_h1 h1 {
  padding: 15px;
}
.control_h1 h4 {
  padding: 10px;
  justify-content: center;
  align-items: center;
}
.child_text {
  padding: 10px;
}
.child_text1 {
  margin-top: 40px;
}
.child_text2 h4 {
  padding: 5px;
}
.child_button {
  margin-top: 50px;
  margin-bottom: 20px;
}
element.style {
  position: relative;
  height: 24px;
  width: 100%;
  border-style: none;
  display: block;
  overflow: hidden;
}
a:active,
a:visited,
a:hover,
a {
  color: black;
}
</style>