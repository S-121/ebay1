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
      <div class="vx-col w-full sm:w-4/4 lg:w-5/5 mb-base">
        <vx-card class="card">
          <div class="my-6">
            <div class="flex justify-between flex-wrap">
              <v-select
                style="width:16%;margin-top:1.5%;"
                size="large"
                :options="dateOptions"
                :clearable="false"
                :dir="$vs.rtl ? 'rtl' : 'ltr'"
                v-model="dateOptions.label"
                class="mb-4 md:mb-4"
              />
              <vs-input
                icon="search"
                size="large"
                label-placeholder="Search for competitor username or competitor ID..."
                v-model="sellerId"
                style="width:70%;float:left;border-width:3px"
              />
              <vs-button
                @click="search_competitor()"
                radius
                color="primary"
                size="large"
                type="border"
                icon="search"
                style="float:left;position: relative;top: 18px;right: 5%;"
              ></vs-button>
            </div>
          </div>
        </vx-card>
      </div>
    </div>
    <vs-row vs-justify="center">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="11"></vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
        <vs-card>
          <div>
            <h5>Result: 30</h5>
          </div>
        </vs-card>
      </vs-col>
    </vs-row>
    <vs-row vs-justify="center">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="PercentIcon" class="inline-block mr-2" />
                <h4>Sell through</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>48857.35 %</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="ListIcon" class="inline-block mr-2" />
                <h4>Active Listings</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>32</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="ShoppingCartIcon" class="inline-block mr-2" />
                <h4>Sold Items</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>33223</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="TrendingUpIcon" class="inline-block mr-2" />
                <h4>Sale Earnings</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>$ 54980</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
    </vs-row>
    <vs-row vs-justify="center">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="AwardIcon" class="inline-block mr-2" />
                <h4>Total Feedback</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>0</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="LayersIcon" class="inline-block mr-2" />
                <h4>Successful Listings</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>21</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div slot="header">
              <div class="flex justify-between flex-wrap filter">
                <feather-icon icon="DollarSignIcon" class="inline-block mr-2" />
                <h4>Average Price</h4>
                <vx-tooltip text></vx-tooltip>
              </div>
            </div>
            <div style="text-align:center;">
              <h1>$ 6.14</h1>
            </div>
          </vs-card>
        </div>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="3">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <div style="text-align:center;padding-top:10%;padding-bottom:10%;">
              <feather-icon icon="SaveIcon" class="inline-block mr-2" />
              <div style="text-align:center;padding">Add to Watchlist</div>
            </div>
          </vs-card>
        </div>
      </vs-col>
    </vs-row>
    <div class="vx-row">
      <div class="vx-col w-full sm:w-4/4 lg:w-5/5 mb-base">
        <vx-card class="card">
          <div class="my-6">
            <div class="flex justify-between flex-wrap">
              <div style="width:320px;">
                <div slot="header">
                  <feather-icon icon="DollarSignIcon" class="inline-block mr-2" />Sales
                </div>
                <div style="text-align:center;" class="inputpadding">
                  <vs-input label-placeholder="Min" v-model="ebay.minprice" class="filter_text" />
                  <vs-input label-placeholder="Max" v-model="ebay.maxprice" class="filter_text" />
                </div>
              </div>
              <div style="width:320px;">
                <div slot="header">
                  <feather-icon icon="StarIcon" class="inline-block mr-2" />Rating
                </div>
                <div style="text-align:center;">
                  <vs-input label-placeholder="Min" v-model="ebay.minprice" class="filter_text" />
                  <vs-input label-placeholder="Max" v-model="ebay.maxprice" class="filter_text" />
                </div>
              </div>
              <div style="width:320px;">
                <div slot="header">
                  <feather-icon icon="CalendarIcon" class="inline-block mr-2" />Current Price
                </div>
                <div style="text-align:center;">
                  <vs-input label-placeholder="Min" v-model="ebay.minprice" class="filter_text" />
                  <vs-input label-placeholder="Max" v-model="ebay.maxprice" class="filter_text" />
                </div>
              </div>
              <div style="width:320px;">
                <div slot="header">
                  <feather-icon icon="BatteryChargingIcon" class="inline-block mr-2" />Votes
                </div>
                <div style="text-align:center;">
                  <vs-input label-placeholder="Min" v-model="ebay.minprice" class="filter_text" />
                  <vs-input label-placeholder="Max" v-model="ebay.maxprice" class="filter_text" />
                </div>
              </div>
              <div>
                <vs-button color="primary" type="border" style="margin-top:20px;">Primary</vs-button>
              </div>
            </div>
          </div>
        </vx-card>
      </div>
    </div>
    <vs-row vs-justify="center">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
        <div class="smallcards">
          <vs-card class="cardx" fixedHeight>
            <template lang="html">
              <div>
                <vs-table pagination max-items="3" search :data="users">
                  <template slot="header">
                    <h3>Users</h3>
                  </template>
                  <template slot="thead">
                    <vs-th sort-key="image">Image</vs-th>
                    <vs-th sort-key="title">Title</vs-th>
                    <vs-th sort-key="shipping">Shipping</vs-th>
                    <vs-th sort-key="rating">Rating</vs-th>
                    <vs-th sort-key="votes">Votes</vs-th>
                    <vs-th sort-key="sales">Sales</vs-th>
                    <vs-th sort-key="price">Price</vs-th>
                    <vs-th sort-key="sss">Nro</vs-th>
                    <vs-th sort-key="aaa">Nro</vs-th>
                  </template>

                  <template slot-scope="{data}">
                    <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                      <vs-td :data="data[indextr].image">{{data[indextr].image}}</vs-td>
                      <vs-td :data="data[indextr].title">{{data[indextr].title}}</vs-td>
                      <vs-td :data="data[indextr].shipping">{{data[indextr].shipping}}</vs-td>
                      <vs-td :data="data[indextr].rating">{{data[indextr].rating}}</vs-td>
                      <vs-td :data="data[indextr].votes">{{data[indextr].votes}}</vs-td>
                      <vs-td :data="data[indextr].sales">{{data[indextr].sales}}</vs-td>
                      <vs-td :data="data[indextr].price">{{data[indextr].price}}</vs-td>
                      <vs-td :data="data[indextr].sss">{{data[indextr].sss}}</vs-td>
                      <vs-td :data="data[indextr].aaa">{{data[indextr].aaa}}</vs-td>
                    </vs-tr>
                  </template>
                </vs-table>
              </div>
            </template>
          </vs-card>
        </div>
      </vs-col>
    </vs-row>
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
import StatisticsCardLine from "@/components/statistics-cards/StatisticsCardLine.vue";
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
    StatisticsCardLine,
    Share2Icon,
    MapPinIcon,
    AwardIcon,
    ClockIcon,
    vSelect,
    flatPickr
  },
  data() {
    return {
      successful_listings: 0,
      average_price: "",
      total_listings: 0,
      feedback: 0,
      sold_items: 0,
      earn: "",
      sellerId: "",
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
      users: [
        {
          image: 1,
          title: "Leanne Graham",
          shipping: "Bret",
          rating: "a@april.biz",
          votes: "b@april.biz",
          sales: "d@april.biz",
          price: "e@april.biz",
          sss: "s@e.biz",
          aaa: "hildegard.org"
        }
      ],
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
      console.log("ddd", this.ebay.site);
      if (this.ebay.site == "ebay") {
        this.site_logo = require("@/assets/images/logo/ebaynew.png");
      } else {
        this.site_logo = require("@/assets/images/logo/alinew.png");
      }
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
    search_competitor: function() {
      this.$vs.loading();
      var payload = {
        DateRange: this.dateOptions.label ? this.dateOptions.label.value : 30,
        sellerId: this.sellerId
      };
      console.log("search competitor", payload);
      this.$store
        .dispatch("competitor/search", payload)
        .then(res => {
          this.products = res.data.products;
          this.products.map(el => {
            return (el.id = false);
          });
          this.isProducts = true;
          this.isAliProducts = false;
          this.aliProducts = [];
          //total_listings
          this.total_listings = this.products.length;
          // sold_items
          let solds = 0;
          for (let i = 0; i < this.products.length; i++) {
            solds += Number(this.products[i].item_details.quantity);
          }
          this.sold_items = solds;
          //successful_listings
          let list_persent = 0;
          for (let i = 0; i < this.products.length; i++) {
            list_persent += this.products[i].item_details.quantity ? 1 : 0;
          }
          this.successful_listings =
            (Number(list_persent) / this.products.length) * 100 + "%";
          // feedback
          let feedbackscore = 0;
          for (let i = 0; i < this.products.length; i++) {
            feedbackscore += Number(this.products[i].seller.feedbackScore);
          }
          this.feedback = feedbackscore;
          // average_price
          let average = 0;
          for (let i = 0; i < this.products.length; i++) {
            average += Number(this.products[i].price.value);
          }
          this.average_price =
            "$" + parseInt((average / this.products.length) * 100) / 100;

          // earn
          let earns = 0;
          for (let i = 0; i < this.products.length; i++) {
            earns +=
              Number(this.products[i].item_details.quantity) *
              this.products[i].price.value;
          }
          this.earn = "$" + parseInt(earns * 100) / 100;
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
    // total_listings() {
    // 	if (this.isMounted) {
    // 		return this.products.length;
    // 	}
    // 	return 0;
    // },
    // earn() {
    // 	var earns = 0;
    // 	if (this.isMounted) {
    // 		for (let i = 0; i < this.products.length; i++) {
    // 			earns += Number(this.products[i].sales) * this.products[i].price;
    // 		}
    // 		return "$" + parseInt(earns * 100) / 100;
    // 	}
    // 	return "$" + earns;
    // },
    // average_price() {
    // 	var average = 0;
    // 	if (this.isMounted) {
    // 		for (let i = 0; i < this.products.length; i++) {
    // 			average += Number(this.products[i].price);
    // 		}
    // 		return "$" + parseInt((average / this.products.length) * 100) / 100;
    // 	}
    // 	return "$" + average;
    // },
    // successful_listings() {
    // 	var list_persent = 0;
    // 	if (this.isMounted) {
    // 		for (let i = 0; i < this.products.length; i++) {
    // 			list_persent += this.products[i].sales ? 1 : 0;
    // 		}
    // 		return (Number(list_persent) / this.products.length) * 100 + "%";
    // 	}
    // 	return list_persent;
    // },
    // sold_items() {
    // 	var sold = 0;
    // 	if (this.isMounted) {
    // 		for (let i = 0; i < this.products.length; i++) {
    // 			sold += Number(this.products[i].sales);
    // 		}
    // 		return sold;
    // 	}
    // 	return sold;
    // }
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
    width: 45%;
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
  .smallcards {
    padding: 5px;
  }
  .vs-con-input-label.is-label-placeholder {
    margin-top: 1px;
  }
  .vs-con-input {
    margin-top: 15px;
  }
  .vs-con-input {
    padding: 5px;
  }
}
.vs-con-table .vs-con-tbody .con-vs-checkbox {
  display: inline-block;
}
</style>

