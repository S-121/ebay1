          <!-- =========================================================================================
              File Name: CardBasic.vue
              Description: Basic Cards
              ----------------------------------------------------------------------------------------
              Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
                Author: Pixinvent
              Author URL: http://www.themeforest.net/user/pixinvent
          ========================================================================================== -->

<template>
  <div id="demo-basic-card">
    <div class="vx-row">
      <div class="vx-col w-full sm:w-1/4 lg:w-1/5 mb-base">
        <vx-card>
          <h5 class="mb-2">Search</h5>
          <vs-divider></vs-divider>
          <div class="flex justify-between flex-wrap filter">
            <feather-icon icon="TruckIcon" class="inline-block mr-2" />Shipping site
            <vx-tooltip text>
              <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
            </vx-tooltip>
          </div>
          <v-select
            :options="search_site_value"
            :clearable="false"
            :dir="$vs.rtl ? 'rtl' : 'ltr'"
            v-model="ebay.site"
            class="mb-4 md:mb-0"
          />
          <div v-if="ebay.site.label == 'eBay'">
            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="GlobeIcon" class="inline-block mr-2" />Shipping location
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <v-select
              :options="countryOptions"
              :clearable="false"
              :dir="$vs.rtl ? 'rtl' : 'ltr'"
              v-model="ebay.country"
              class="mb-4 md:mb-0"
            />

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="Share2Icon" class="inline-block mr-2" />Listing type
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <v-select
              :options="listOptions"
              :clearable="false"
              :dir="$vs.rtl ? 'rtl' : 'ltr'"
              v-model="ebay.list"
              class="mb-4 md:mb-0"
            />

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <span>
                <font size="4">$</font>
              </span>Price
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <vs-input label-placeholder="Min Price" v-model="ebay.minprice" class="filter_text" />
              <vs-input label-placeholder="Max Price" v-model="ebay.maxprice" class="filter_text" />
            </div>

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="ClockIcon" class="inline-block mr-2" />Sale date range
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <flat-pickr
                :config="configFromdateTimePicker"
                v-model="ebay.fromDate"
                placeholder="From Date"
                @on-change="onFromChange"
                class="filter_text"
              />
              <flat-pickr
                :config="configTodateTimePicker"
                v-model="ebay.toDate"
                placeholder="To Date"
                @on-change="onToChange"
                class="filter_text"
              />
            </div>
            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="MapPinIcon" class="inline-block mr-2" />Condition
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <v-select
              :options="conditionOption"
              :clearable="false"
              :dir="$vs.rtl ? 'rtl' : 'ltr'"
              v-model="ebay.condition"
              class="mb-4 md:mb-0"
            />
          </div>
          <div v-if="ebay.site.label != 'eBay'">
            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="ShoppingBagIcon" class="inline-block mr-2" />Shipping type
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <v-select
              :options="typeOptions"
              :clearable="false"
              :dir="$vs.rtl ? 'rtl' : 'ltr'"
              class="mb-4 md:mb-0"
            />

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="DollarSignIcon" class="inline-block mr-2" />Price
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <vs-input label-placeholder="Min Price" v-model="ali.minprice" class="filter_text" />
              <vs-input label-placeholder="Max Price" v-model="ali.maxprice" class="filter_text" />
            </div>

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="AwardIcon" class="inline-block mr-2" />Store Feedback
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <vs-input label-placeholder="Min Feedback" v-model="ali.minfeed" class="filter_text" />
              <vs-input label-placeholder="Max Feedback" v-model="ali.maxfeed" class="filter_text" />
            </div>

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="StarIcon" class="inline-block mr-2" />Rating
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <vs-input label-placeholder="Min Rating" v-model="ali.minrating" class="filter_text" />
              <vs-input label-placeholder="Max Rating" v-model="ali.maxrating" class="filter_text" />
            </div>

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="BarChartIcon" class="inline-block mr-2" />Votes
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <vs-input label-placeholder="Min Votes" v-model="ali.minvotes" class="filter_text" />
              <vs-input label-placeholder="Max Votes" v-model="ali.maxvotes" class="filter_text" />
            </div>

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <feather-icon icon="PercentIcon" class="inline-block mr-2" />Number of sales
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <div class="flex justify-between flex-wrap">
              <vs-input label-placeholder="Min Sales" v-model="ali.minsales" class="filter_text" />
              <vs-input label-placeholder="Max Sales" v-model="ali.maxsales" class="filter_text" />
            </div>

            <div class="flex justify-between flex-wrap filter">
              <vs-divider></vs-divider>
              <clock-icon size="1.5x" class="custom-class"></clock-icon>Sale date range
              <vx-tooltip text>
                <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
              </vx-tooltip>
            </div>
            <v-select
              :options="conditionOption"
              :clearable="false"
              v-model="ali.condition"
              :dir="$vs.rtl ? 'rtl' : 'ltr'"
              class="mb-4 md:mb-0"
            />
          </div>
        </vx-card>
      </div>

      <div class="vx-col w-full sm:w-3/4 lg:w-4/5 mb-base">
        <vx-card>
          <div class="my-6">
            <div class="flex justify-between flex-wrap">
              <img
                :src="ebay.site.value"
                style="position: relative;top: 17px;left: 3%;"
                alt
                class="site_logo"
              />
              <vs-input
                icon="search"
                size="large"
                label-placeholder="Search"
                v-model="ebay.search"
                style="width:75%;float:left;border-width:3px"
              />
              <vs-button
                @click="search_site()"
                radius
                color="primary"
                size="large"
                type="border"
                icon="search"
                style="float:left;position: relative;top: 18px;right: 5%;"
              ></vs-button>
            </div>
          </div>
          <vs-divider></vs-divider>
          <div class="flex justify-between flex-wrap">
            <vs-table max-items="20" pagination :data="products" style="width:100%;">
              <template slot="header">
                <h3>Results:</h3>
                <router-link
                  tag="div"
                  class="vx-logo cursor-pointer flex items-center"
                  to="/analytic"
                >
                  <vs-button color="primary" type="relief">ANALYTIC</vs-button>
                </router-link>
              </template>
              <template slot="thead">
                <vs-th>img</vs-th>
                <vs-th>title</vs-th>
                <vs-th>price</vs-th>
                <vs-th>search</vs-th>
                <vs-th>
                  <vs-checkbox v-model="all_check" @change="allCheck()"></vs-checkbox>
                </vs-th>
                <!-- <vs-th>Nro</vs-th> -->
              </template>

              <template slot-scope="{data}">
                <vs-tr :data="tr" :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td :data="tr.image.imageUrl">
                    <div style="text-align:center;width:100px;height:100px">
                      <img
                        style="display:inline-block;max-width:100px;max-height:100px;"
                        :src="`${tr.image.imageUrl}`"
                      />
                    </div>
                  </vs-td>
                  <vs-td :data="tr.title">{{tr.title}}</vs-td>

                  <vs-td :data="tr.price.value">${{tr.price.value}}</vs-td>

                  <vs-td :data="tr.itemWebUrl">
                    <a :href="`${tr.itemWebUrl}`" target="_blank">view on ebay</a>
                  </vs-td>
                  <vs-td>
                    <vs-checkbox v-model="tr.id" @change="select_item()"></vs-checkbox>
                  </vs-td>
                  <!-- <vs-td :data="tr.id">{{tr.itemId}}</vs-td> -->

                  <template class="expand-user" slot="expand">
                    <div class="con-expand-users">
                      <div class="con-btns-user">
                        <div class="con-userx">
                          <div
                            style="text-aling:center;margin: 0 20px;overflow:hidden"
                            :data="images"
                            :key="indeximages"
                            v-for="(images, indeximages) in tr.additionalImages"
                          >
                            <img
                              :src="`${images.imageUrl}`"
                              style="display:inline-block;max-width:100px;max-height:100px"
                              alt
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </template>
                </vs-tr>
              </template>
            </vs-table>
            <vs-table
              v-if="isAliProducts"
              max-items="20"
              pagination
              :data="aliProducts"
              style="width:100%;"
            >
              <template slot="header">
                <h3>Results:</h3>
                <router-link
                  tag="div"
                  class="vx-logo cursor-pointer flex items-center"
                  to="/alianalytic"
                >
                  <vs-button color="primary" type="border">ANALYTIC</vs-button>
                </router-link>
              </template>
              <template slot="thead">
                <vs-th>img</vs-th>
                <vs-th>title</vs-th>
                <vs-th>price</vs-th>
                <vs-th>sales</vs-th>
                <vs-th>
                  <vs-checkbox v-model="all_check" @change="aliCheck()"></vs-checkbox>
                </vs-th>
                <!-- <vs-th>Nro</vs-th> -->
              </template>

              <template slot-scope="{data}">
                <vs-tr :data="tr" :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td :data="tr.pic_url">
                    <div style="text-align:center;width:100px;height:100px">
                      <img
                        style="display:inline-block;max-width:100px;max-height:100px;"
                        :src="`${tr.pic_url}`"
                      />
                    </div>
                  </vs-td>
                  <vs-td :data="tr.title">
                    <a :href="`${tr.detail_url}`" target="_blank">{{tr.title}}</a>
                  </vs-td>

                  <vs-td :data="tr.price">${{tr.price}}</vs-td>

                  <vs-td :data="tr.sales">{{tr.sales}}</vs-td>
                  <vs-td>
                    <vs-checkbox v-model="tr.id" @change="select_item()"></vs-checkbox>
                  </vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </vx-card>
      </div>
    </div>
  </div>
</template>

<script>
import VuePerfectScrollbar from "vue-perfect-scrollbar";
import { videoPlayer } from "vue-video-player";
import flatPickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";
import VxTimeline from "@/components/timeline/VxTimeline.vue";
import "video.js/dist/video-js.css";
import vSelect from "vue-select";

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
  data() {
    return {
      all_check: 0,
      isProducts: false,
      isAliProducts: false,
      site_logo: require("@/assets/images/logo/ebaynew.png"),
      configFromdateTimePicker: {
        minDate: new Date().setDate(new Date().getDate() - 30),
        maxDate: new Date()
      },
      configTodateTimePicker: {
        minDate: null,
        maxDate: new Date()
      },
      ali: {
        site: {
          label: "Aliexpress",
          value: require("@/assets/images/logo/alinew.png")
        },
        minprice: "",
        maxprice: "",
        minfeed: "",
        maxfeed: "",
        minrating: "",
        maxrating: "",
        minvotes: "",
        maxvotes: "",
        minsales: "",
        maxsales: "",
        condition: { label: "Brand New", value: "NEW" }
      },
      ebay: {
        site: {
          label: "eBay",
          value: require("@/assets/images/logo/ebaynew.png")
        },
        minprice: "",
        maxprice: "",
        minfeed: "",
        maxfeed: "",
        country: { label: "All Locations", value: "all" },
        list: { label: "All Listings", value: "all" },
        condition: { label: "Brand New", value: "NEW" },
        fromDate: null,
        toDate: null
      },
      listOptions: [
        { label: "All Listings", value: "all" },
        { label: "Fixed Price", value: "FIXED_PRICE" },
        { label: "Auction", value: "AUCTION" }
      ],
      search_site_value: [
        {
          label: "Aliexress",
          value: require("@/assets/images/logo/alinew.png")
        },
        { label: "eBay", value: require("@/assets/images/logo/ebaynew.png") }
      ],
      dateOptions: [
        { label: "30 Days", value: "30" },
        { label: "21 Days", value: "21" },
        { label: "14 Days", value: "14" },
        { label: "7 Days", value: "7" }
      ],
      conditionOption: [
        { label: "Brand New", value: "NEW" },
        { label: "Used", value: "USED" }
      ],
      countryOptions: [
        { label: "All Locations", value: "all" },
        { label: "United States", value: "US" },
        { label: "United Kingdom", value: "UK" },
        { label: "Canada", value: "CA" },
        { label: "Australia", value: "AU" },
        { label: "China", value: "CN" },
        { label: "France", value: "FR" },
        { label: "Germany", value: "CA" },
        { label: "Italy", value: "DE" },
        { label: "Spain", value: "ES" },
        { label: "Malaysia", value: "MY" }
      ],
      typeOptions: ["All", "ePacket", "Standard"],
      // card 1
      value1: "1",
      card_1: {},
      card_2: {},
      card_3: {},
      card_4: {},
      card_5: {},
      card_6: {},
      card_7: {},
      card_8: {},

      chatLog: [],
      chatMsgInput: "",

      card_9: {},

      timelineData: [
        {
          color: "primary",
          icon: "PlusIcon",
          title: "New Task Added",
          desc: "Bonbon macaroon jelly beans gummi bears jelly lollipop apple",
          time: "25 Days Ago"
        },
        {
          color: "warning",
          icon: "AlertCircleIcon",
          title: "Task Update Found",
          desc: "Cupcake gummi bears soufflé caramels candy",
          time: "15 Days Ago"
        },
        {
          color: "success",
          icon: "CheckIcon",
          title: "Task Finished",
          desc: "Candy ice cream cake. Halvah gummi bears",
          time: "20 mins ago"
        }
      ],

      name: "",
      email: "",
      msg: "",

      playerOptions: {},
      settings: {
        // perfectscrollbar settings
        maxScrollbarLength: 60,
        wheelSpeed: 0.6
      },
      products: [],
      aliProducts: []
    };
  },
  methods: {
    allCheck: function() {
      this.products.map(el => {
        return (el.id = this.all_check);
      });
      this.select_item();
    },
    aliCheck: function() {
      this.aliProducts.map(el => {
        return (el.id = this.all_check);
      });
      this.aliSelect_item();
    },
    onFromChange(selectedDates, dateStr, instance) {
      this.$set(this.configTodateTimePicker, "minDate", dateStr);
    },
    onToChange(selectedDates, dateStr, instance) {
      this.$set(this.configFromdateTimePicker, "maxDate", dateStr);
    },
    change_site: function() {
      alert();
    },
    select_item: function() {
      const items = this.products.filter(el => el.id == true);
      console.log("itesm", items);
      this.$store.commit("products/UPDATE_ANALITIC_PRODUCTS", items);
      this.$store.commit("products/UPDATE_SEARCH_KEYWORD", this.ebay.search);
    },
    aliSelect_item: function() {
      const items = this.aliProducts.filter(el => el.id == true);
      // console.log("itesm", items);
      this.$store.commit("products/UPDATE_ALIANALITIC_PRODUCTS", items);
      this.$store.commit("products/UPDATE_SEARCH_KEYWORD", this.ebay.search);
    },
    search_site: function() {
      var payload = {};
      this.$vs.loading();
      if (this.ebay.site.label == "eBay") {
        payload = {
          keyword: this.ebay.search,
          site: this.ebay.site.label,
          minprice: this.ebay.minprice,
          maxprice: this.ebay.maxprice,
          minfeed: this.ebay.minfeed,
          maxfeed: this.ebay.maxfeed,
          country: this.ebay.country.value,
          list: this.ebay.list.value,
          condition: this.ebay.condition.value,
          fromDate: this.ebay.fromDate,
          toDate: this.ebay.toDate,
          token: localStorage.getItem("ebayToken")
        };
      } else {
        payload = {
          keyword: this.ebay.search,
          site: this.ali.site.label,
          minprice: this.ali.minprice,
          maxprice: this.ali.maxprice,
          minfeed: this.ali.minfeed,
          maxfeed: this.ali.maxfeed,
          minrating: this.ali.minrating,
          maxrating: this.ali.maxrating,
          minvotes: this.ali.minvotes,
          maxvotes: this.ali.maxvotes,
          minsales: this.ali.minsales,
          maxsales: this.ali.maxsales,
          condition: this.ali.condition.value,
          token: localStorage.getItem("aliToken")
        };
      }
      // console.log("payload", payload);
      // return;
      this.$store
        .dispatch("products/search", payload)
        .then(res => {
          if (payload.site == "eBay") {
            this.products = res.data.products;
            this.products.map(el => {
              return (el.id = false);
            });
            this.isProducts = true;
            this.isAliProducts = false;
            this.aliProducts = [];
          } else {
            this.aliProducts = res.data.products;
            this.aliProducts.map(el => {
              return (el.id = false);
            });
            this.isAliProducts = true;
            this.isProducts = false;
            this.products = [];
          }
          this.$vs.loading.close();
        })
        .catch(error => {
          this.$vs.loading.close();
          this.$vs.notify({
            title: "Error",
            text: error.message,
            iconPack: "feather",
            icon: "icon-alert-circle",
            color: "danger"
          });
        });
    }
  },
  computed: {
    scrollbarTag() {
      return this.$store.getters.scrollbarTag;
    }
  },
  mounted() {
    // const scroll_el = this.$refs.chatLogPS.$el || this.$refs.chatLogPS;
    // scroll_el.scrollTop = this.$refs.chatLog.scrollHeight;
  },
  created() {}
};
</script>

<style lang="scss">
#demo-basic-card {
  .filter {
    margin-top: 10%;
  }
  // td,
  // th,
  // tr {
  // 	border: 1px solid black;
  // }
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
    width: 48%;
    float: left;
  }
  .overlay-card {
    .vx-card__collapsible-content {
      max-height: 485px;
    }
  }
  .chat-card-log {
    height: 360px;

    .chat-sent-msg {
      background-color: #f2f4f7 !important;
    }
  }
  .card-video {
    .video-js {
      height: 370px;
    }
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
}
.vs-con-table .vs-con-tbody .con-vs-checkbox {
  display: inline-block;
}
</style>

