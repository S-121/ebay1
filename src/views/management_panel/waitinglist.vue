<template>
  <vs-row vs-justify="center">
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
      <div class="control">
        <vs-card class="cardx">
          <div slot="header">
            <h3>My Search List Queue</h3>
          </div>
          <div class="UI-cardBlock">
            <div class="alert alert-info fade in alert-dismissable">
              <h3>
                <strong>Important Notice:</strong>
                Your waiting list is not your saved list
                - this list only shows you your queued sellers. The
                information in this table is deleted every 20-25 days so
                to save a seller permanently you’ll need to add it to your
                watchlist.
              </h3>
            </div>
          </div>
          <div>
            <vs-table max-items="7" pagination :data="ebays" search>
              <template slot="thead">
                <vs-th>No</vs-th>
                <vs-th>Store Name</vs-th>
                <vs-th>Date added</vs-th>
                <vs-th>Status</vs-th>
                <vs-th>Delete</vs-th>
              </template>

              <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td :data="data[indextr].id">{{data[indextr].id}}</vs-td>
                  <vs-td :data="data[indextr].name">
                    <router-link to="/products/research">{{data[indextr].name}}</router-link>
                  </vs-td>
                  <vs-td :data="data[indextr].date">{{data[indextr].date}}</vs-td>
                  <vs-td>
                    <vs-progress :height="15" :percent="40" color="success"></vs-progress>
                  </vs-td>
                  <vs-td>
                    <vs-button color="danger" type="relief" v-on:click="del(data[indextr])">
                      <feather-icon icon="Trash2Icon" />
                    </vs-button>
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
    ebays: [
      {
        id: 1,
        name: "Leanne Graham",
        date: "Bret",
        status: "Sincere@april.biz"
      },
      {
        id: 2,
        name: "Ervin Howell",
        date: "Antonette",
        status: "Shanna@melissa.tv"
      }
    ]
  }),
  methods: {
    del: function(data) {
      this.ebays.splice(data, 1);
    }
  }
};
</script>
<style>
.control {
  padding: 5px;
}
.vs-card--header h3 {
  padding: 10px;
}
.UI-cardBlock {
  padding: 15px;
}
.fade.in {
  opacity: 1;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-info h3 {
  color: #fff;
}
.alert-info {
  color: #fff;
  background: linear-gradient(
      52deg,
      rgba(163, 163, 163, 0.09) 0%,
      rgba(163, 163, 163, 0.09) 33.3%,
      rgba(100, 100, 100, 0.09) 33.3%,
      rgba(100, 100, 100, 0.09) 66.6%,
      rgba(162, 162, 162, 0.09) 66.6%,
      rgba(162, 162, 162, 0.09) 99%
    ),
    linear-gradient(
      258deg,
      rgba(193, 193, 193, 0.06) 0%,
      rgba(193, 193, 193, 0.06) 33.3%,
      rgba(169, 169, 169, 0.06) 33.3%,
      rgba(169, 169, 169, 0.06) 66.6%,
      rgba(92, 92, 92, 0.06) 66.6%,
      rgba(92, 92, 92, 0.06) 99%
    ),
    linear-gradient(
      129deg,
      rgba(45, 45, 45, 0.03) 0%,
      rgba(45, 45, 45, 0.03) 33.3%,
      rgba(223, 223, 223, 0.03) 33.3%,
      rgba(223, 223, 223, 0.03) 66.6%,
      rgba(173, 173, 173, 0.03) 66.6%,
      rgba(173, 173, 173, 0.03) 99%
    ),
    linear-gradient(
      280deg,
      rgba(226, 226, 226, 0.06) 0%,
      rgba(226, 226, 226, 0.06) 33.3%,
      rgba(81, 81, 81, 0.06) 33.3%,
      rgba(81, 81, 81, 0.06) 66.6%,
      rgba(186, 186, 186, 0.06) 66.6%,
      rgba(186, 186, 186, 0.06) 99%
    ),
    linear-gradient(
      85deg,
      rgba(225, 225, 225, 0.04) 0%,
      rgba(225, 225, 225, 0.04) 33.3%,
      rgba(95, 95, 95, 0.04) 33.3%,
      rgba(95, 95, 95, 0.04) 66.6%,
      rgba(39, 39, 39, 0.04) 66.6%,
      rgba(39, 39, 39, 0.04) 99%
    ),
    linear-gradient(
      128deg,
      rgba(184, 184, 184, 0.06) 0%,
      rgba(184, 184, 184, 0.06) 33.3%,
      rgba(0, 0, 0, 0.06) 33.3%,
      rgba(0, 0, 0, 0.06) 66.6%,
      rgba(140, 140, 140, 0.06) 66.6%,
      rgba(140, 140, 140, 0.06) 99.89999999999999%
    ),
    linear-gradient(
      323deg,
      rgba(40, 40, 40, 0.07) 0%,
      rgba(40, 40, 40, 0.07) 33.3%,
      rgba(214, 214, 214, 0.07) 33.3%,
      rgba(214, 214, 214, 0.07) 66.6%,
      rgba(190, 190, 190, 0.07) 66.6%,
      rgba(190, 190, 190, 0.07) 99.89999999999999%
    ),
    linear-gradient(
      61deg,
      rgba(230, 230, 230, 0) 0%,
      rgba(230, 230, 230, 0) 33.3%,
      rgba(241, 241, 241, 0) 33.3%,
      rgba(241, 241, 241, 0) 66.6%,
      rgba(55, 55, 55, 0) 66.6%,
      rgba(55, 55, 55, 0) 99%
    ),
    linear-gradient(0deg, #012d41, #1ecee8);
  border: none;
  font-family: mtsitalic;
  font-size: 16px;
}
a:active,
a:visited,
a:hover,
a {
  color: black;
}
</style>