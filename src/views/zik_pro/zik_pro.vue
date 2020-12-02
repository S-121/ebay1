          <!-- =========================================================================================
              File Name: CardBasic.vue
              Description: Basic Cards
              ----------------------------------------------------------------------------------------
              Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
                Author: Pixinvent
              Author URL: http://www.themeforest.net/user/pixinvent
          ========================================================================================== -->

<template>
  <vs-row vs-justify="center">
    <vs-col style="width:100%" type="flex" vs-justify="center" vs-align="center" vs-w="6">
      <vs-card class="cardx" fixedHeight>
        <div slot="header">
          <h3>ZIK PRO</h3>
        </div>
        <vs-divider></vs-divider>
        <vs-tabs>
          <vs-tab label="Bulk Scanner">
            <vs-row vs-justify="center">
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <div class="firstrow">
                  <vs-card class="cardx">
                    <div slot="header">
                      <h3>Scanned Sellers</h3>
                      <vs-divider></vs-divider>
                    </div>
                    <div>
                      <div class="con-tab-ejemplo">
                        <vs-table max-items="5" pagination :data="users" search>
                          <template slot="thead">
                            <vs-th>
                              <div class="child-button">
                                <vs-button color="warning" type="filled" icon="trash"></vs-button>
                              </div>
                              <div class="child-button">
                                <vs-button color="warning" type="filled" icon="public"></vs-button>
                              </div>
                            </vs-th>
                            <vs-th>
                              <feather-icon icon="GlobeIcon" class="inline-block mr-2" />
                            </vs-th>
                            <vs-th>Username</vs-th>
                            <vs-th>Date scanned</vs-th>
                            <vs-th>Date added</vs-th>
                            <vs-th>
                              <feather-icon icon="TrendingUpIcon" class="inline-block mr-2" />
                            </vs-th>
                            <vs-th>
                              <feather-icon icon="DollarSignIcon" class="inline-block mr-2" />
                            </vs-th>
                            <vs-th>
                              <feather-icon icon="StarIcon" class="inline-block mr-2" />
                            </vs-th>
                          </template>

                          <template slot-scope="{data}">
                            <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                              <vs-td>
                                <vs-row>
                                  <feather-icon
                                    icon="ArrowUpCircleIcon"
                                    size="small"
                                    class="inline-block mr-21"
                                  />
                                  <feather-icon
                                    icon="Trash2Icon"
                                    size="small"
                                    class="inline-block mr-21"
                                    v-on:click="del(data[indextr])"
                                  />
                                  <vs-checkbox color="success"></vs-checkbox>
                                </vs-row>
                              </vs-td>
                              <vs-td></vs-td>
                              <vs-td :data="data[indextr].username">{{data[indextr].username}}</vs-td>
                              <vs-td :data="data[indextr].date_scan">{{data[indextr].date_scan}}</vs-td>
                              <vs-td :data="data[indextr].date_add">{{data[indextr].date_add}}</vs-td>
                              <vs-td :data="data[indextr].trend">{{data[indextr].trend}}</vs-td>
                              <vs-td :data="data[indextr].price">{{data[indextr].price}}</vs-td>
                              <vs-td :data="data[indextr].id">{{data[indextr].website}}</vs-td>
                            </vs-tr>
                          </template>
                        </vs-table>
                      </div>
                    </div>
                  </vs-card>
                </div>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <div class="firstrow">
                  <vs-card class="cardx">
                    <div slot="header">
                      <h3>Multi Scanner</h3>
                      <vs-divider></vs-divider>
                    </div>
                    <div>
                      <div class="con-tab-ejemplo">
                        <vs-table max-items="5" pagination :data="users" search>
                          <template slot="thead">
                            <vs-th>Sellers</vs-th>
                            <vs-th>Date requested</vs-th>
                            <vs-th>Site</vs-th>
                            <vs-th>Folder</vs-th>
                            <vs-th>Status</vs-th>
                            <vs-th>Options</vs-th>
                          </template>

                          <template slot-scope="{data}">
                            <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                              <vs-td></vs-td>
                              <vs-td></vs-td>
                              <vs-td></vs-td>
                              <vs-td></vs-td>
                              <vs-td></vs-td>
                              <vs-td></vs-td>
                            </vs-tr>
                          </template>
                        </vs-table>
                      </div>
                    </div>
                  </vs-card>
                </div>
              </vs-col>
            </vs-row>
          </vs-tab>
          <vs-tab label="Best Selling eBay Items">
            <div class="con-tab-ejemplo">
              <vs-card class="cardx">
                <div slot="header">
                  <h3>Multi Scanner</h3>
                  <vs-divider></vs-divider>
                </div>
                <div>
                  <div class="con-tab-ejemplo">
                    <vs-table max-items="7" pagination :data="users1" search>
                      <template slot="thead">
                        <vs-th>Image</vs-th>
                        <vs-th>Title</vs-th>
                        <vs-th>Price</vs-th>
                        <vs-th>Sales</vs-th>
                        <vs-th></vs-th>
                        <vs-th></vs-th>
                      </template>

                      <template slot-scope="{data}">
                        <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                          <vs-td :data="data[indextr].image">
                            <div>
                              <img
                                style="width:50px;"
                                src="https://i.ebayimg.com/thumbs/images/g/WxoAAOxyRNJSb-of/s-l140.jpg"
                              />
                            </div>
                          </vs-td>
                          <vs-td :data="data[indextr].title">{{data[indextr].title}}</vs-td>
                          <vs-td :data="data[indextr].price">{{data[indextr].price}}</vs-td>
                          <vs-td :data="data[indextr].sales">{{data[indextr].sales}}</vs-td>
                          <vs-td>
                            <feather-icon icon="BarChart2Icon" class="inline-block mr-2" />
                          </vs-td>
                          <vs-td>
                            <feather-icon icon="CodesandboxIcon" class="inline-block mr-2" />
                          </vs-td>
                        </vs-tr>
                      </template>
                    </vs-table>
                  </div>
                </div>
              </vs-card>
            </div>
          </vs-tab>
          <vs-tab label="Ali Crowth Scanner">
            <div class="con-tab-ejemplo">
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
                  <div class="firstrow">
                    <vs-card class="cardx" fixedHeight>
                      <div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <feather-icon icon="LifeBuoyIcon" class="inline-block mr-2" />Growth rate
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <div class="flex justify-between flex-wrap">
                            <vs-input label-placeholder="Min Price" class="number_text" />
                          </div>
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <feather-icon icon="Edit3Icon" class="inline-block mr-2" />Number of sales
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <div class="flex justify-between flex-wrap">
                            <vs-row>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Min Price" class="filter_text" />
                              </vs-col>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Max Price" class="filter_text" />
                              </vs-col>
                            </vs-row>
                          </div>
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <feather-icon icon="DollarSignIcon" class="inline-block mr-2" />Price
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <div class="flex justify-between flex-wrap">
                            <vs-row>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Min Price" class="filter_text" />
                              </vs-col>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Max Price" class="filter_text" />
                              </vs-col>
                            </vs-row>
                          </div>
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <vs-divider></vs-divider>
                            <feather-icon icon="Share2Icon" class="inline-block mr-2" />Shipping type
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <v-select label="countryName" :options="countries" />
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <feather-icon icon="AwardIcon" class="inline-block mr-2" />Rating
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <div class="flex justify-between flex-wrap">
                            <vs-row>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Min Price" class="filter_text" />
                              </vs-col>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Max Price" class="filter_text" />
                              </vs-col>
                            </vs-row>
                          </div>
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <feather-icon icon="StarIcon" class="inline-block mr-2" />Votes
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <div class="flex justify-between flex-wrap">
                            <vs-row>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Min Price" class="filter_text" />
                              </vs-col>
                              <vs-col vs-w="6">
                                <vs-input label-placeholder="Max Price" class="filter_text" />
                              </vs-col>
                            </vs-row>
                          </div>
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <vs-divider></vs-divider>
                            <feather-icon icon="ClockIcon" class="inline-block mr-2" />Sale date range
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <v-select label="countryName" :options="countries" />
                        </div>
                        <div class="control">
                          <div class="flex justify-between flex-wrap filter">
                            <vs-divider></vs-divider>
                            <feather-icon icon="ListIcon" class="inline-block mr-2" />Order by
                            <vx-tooltip text>
                              <feather-icon
                                icon="HelpCircleIcon"
                                class="inline-block mr-2"
                                svgClasses="w-4 h-4"
                              />
                            </vx-tooltip>
                          </div>
                          <v-select label="countryName" :options="countries" />
                        </div>
                      </div>
                    </vs-card>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="9">
                  <div class="firstrow">
                    <vs-row>
                      <vs-col>
                        <div class="childrow">
                          <vs-card class="cardx" fixedHeight>
                            <vs-row class="button">
                              <vs-col vs-w="3">
                                <div class="buttons">
                                  <vs-button color="dark" type="relief">Highest sales</vs-button>
                                </div>
                              </vs-col>
                              <vs-col vs-w="5">
                                <div class="buttons">
                                  <vs-button color="success" type="relief">Highest Crowth Rate</vs-button>
                                </div>
                              </vs-col>
                            </vs-row>
                          </vs-card>
                        </div>
                      </vs-col>
                      <vs-col>
                        <div class="childrow">
                          <div class="con-tab-ejemplo">
                            <vs-card class="cardx">
                              <div class="con-tab-ejemplo">
                                <vs-table max-items="5" pagination :data="users2" search>
                                  <template slot="thead">
                                    <vs-th>
                                      <vs-checkbox color="danger" v-model="checkBox3"></vs-checkbox>
                                    </vs-th>
                                    <vs-th>Seller</vs-th>
                                    <vs-th>
                                      <feather-icon icon="LayersIcon" class="inline-block mr-2" />
                                    </vs-th>
                                    <vs-th>Image</vs-th>
                                    <vs-th>Title</vs-th>
                                    <vs-th>Shipping</vs-th>
                                    <vs-th>Votes</vs-th>
                                    <vs-th>Rating</vs-th>
                                    <vs-th>
                                      <feather-icon icon="BarChart2Icon" class="inline-block mr-2" />
                                    </vs-th>
                                    <vs-th>Price</vs-th>
                                    <vs-th>Growth</vs-th>
                                    <vs-th>
                                      <feather-icon icon="SearchIcon" class="inline-block mr-2" />
                                    </vs-th>
                                    <vs-th>
                                      <feather-icon
                                        icon="TrendingUpIcon"
                                        class="inline-block mr-2"
                                      />
                                    </vs-th>
                                  </template>

                                  <template slot-scope="{data}">
                                    <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                                      <vs-td>
                                        <vs-checkbox color="danger" v-model="checkBox3"></vs-checkbox>
                                      </vs-td>
                                      <vs-td :data="data[indextr].seller">{{data[indextr].seller}}</vs-td>
                                      <vs-td>
                                        <feather-icon icon="LayersIcon" class="inline-block mr-2" />
                                      </vs-td>
                                      <vs-td :data="data[indextr].image">{{data[indextr].image}}</vs-td>
                                      <vs-td :data="data[indextr].title">{{data[indextr].title}}</vs-td>
                                      <vs-td
                                        :data="data[indextr].shipping"
                                      >{{data[indextr].shipping}}</vs-td>
                                      <vs-td :data="data[indextr].votes">{{data[indextr].votes}}</vs-td>
                                      <vs-td :data="data[indextr].rating">{{data[indextr].rating}}</vs-td>
                                      <vs-td :data="data[indextr].sales">{{data[indextr].sales}}</vs-td>
                                      <vs-td :data="data[indextr].price">{{data[indextr].price}}</vs-td>
                                      <vs-td :data="data[indextr].growth">{{data[indextr].growth}}</vs-td>
                                      <vs-td>
                                        <feather-icon icon="SearchIcon" class="inline-block mr-2" />
                                      </vs-td>
                                      <vs-td>
                                        <feather-icon
                                          icon="TrendingUpIcon"
                                          class="inline-block mr-2"
                                        />
                                      </vs-td>
                                    </vs-tr>
                                  </template>
                                </vs-table>
                              </div>
                            </vs-card>
                          </div>
                        </div>
                      </vs-col>
                    </vs-row>
                  </div>
                </vs-col>
              </vs-row>
            </div>
          </vs-tab>
        </vs-tabs>
      </vs-card>
    </vs-col>
  </vs-row>
</template>
<script>
import VuePerfectScrollbar from "vue-perfect-scrollbar";
import { videoPlayer } from "vue-video-player";
import flatPickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";
import VxTimeline from "@/components/timeline/VxTimeline.vue";
import "video.js/dist/video-js.css";
import vSelect from "vue-select";
// import VueSweetalert2 from "vue-sweetalert2";

// Vue.use(datePicker);
// Vue.use(VueSweetalert2);
// Vue.use(VeeValidate);

import {
  TruckIcon,
  Share2Icon,
  MapPinIcon,
  ClockIcon,
  AwardIcon
} from "vue-feather-icons";

export default {
  components: {
    VuePerfectScrollbar,
    videoPlayer,
    VxTimeline,
    TruckIcon,
    Share2Icon,
    MapPinIcon,
    AwardIcon,
    ClockIcon,
    vSelect,
    flatPickr
  },
  data: () => ({
    users: [
      {
        price: 10,
        trend: 20,
        name: "Leanne Graham",
        username: "Bret",
        email: "Sincere@april.biz",
        website: "hildegard.org",
        date_scan: "7/2/2020",
        date_add: "3/15/2001"
      }
    ],
    users1: [],
    users2: [],
    pageOptions: [5, 10, 15],
    countries: ["All", "ePacket", "Standard"]
  }),
  created: function() {
    this.ebaygetData();
    this.ebaysaveData();
    this.aligetData();
    this.alisaveData();
  },
  methods: {
    del: function(data) {
      this.users.splice(data, 1);
    },
    ebaysaveData: function() {
      this.$store
        .dispatch("products/searchBestSellsProduct")
        .then(function(res) {
          if (res == "OK") {
            console.log("ok");
          }
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    ebaygetData: function() {
      let self = this;
      this.$store
        .dispatch("products/getBestSellsProduct")
        .then(function(res) {
          console.log(res.data.products);
          self.users1 = res.data.products;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    alisaveData: function() {
      this.$store
        .dispatch("products/searchAliexpressProduct")
        .then(function(res) {
          if (res == "OK") {
            console.log("ok");
          }
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    aligetData: function() {
      let self = this;
      this.$store
        .dispatch("products/getAliexpressProduct")
        .then(function(res) {
          console.log(res.data.products);
          self.users2 = res.data.products;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    mounted() {
      this.ebaygetData();
      this.aligetData();
    }
  }
};
</script>
<style>
.control {
  padding: 5%;
}
.button {
  padding: 10px;
}
.buttons {
  padding: 5px;
}
.firstrow {
  padding: 5px;
}
.con-expand-users .con-btns-user {
  display: flex;
  padding: 10px;
  padding-bottom: 0px;
  align-items: center;
  justify-content: space-between;
}
.con-userx {
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
.list-icon i {
  font-size: 0.9rem !important;
}
.site_logo {
  width: 100px;
  height: 50px;
  border-style: none;
}
.filter_text {
  width: 95%;
  float: left;
}
.filter {
  margin-top: 15px;
}
.number_text {
  width: 100%;
  float: left;
}
.chat-card-log {
  height: 360px;
}
.vs-divider {
  margin-top: 1%;
}
.vs-con-input-label.is-label-placeholder {
  margin-top: 1px;
}
.vs-con-input {
  margin-top: 15px;
}
.mr-21 {
  width: 24px;
  height: 24px;
}
.child-button {
  padding: 2px;
}
</style>