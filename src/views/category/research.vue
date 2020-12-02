          <!-- =========================================================================================
              File Name: CardBasic.vue
              Description: Basic Cards
              ----------------------------------------------------------------------------------------
              Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
                Author: Pixinvent
              Author URL: http://www.themeforest.net/user/pixinvent
          ========================================================================================== -->
<style scoped>
.ol-category p {
  padding: 10px 15px;
}
.ol-category p:hover {
  z-index: 200;
  -webkit-transform: translateY(-4px);
  transform: translateY(-4px);
}
.maindiv {
  border: 1px solid #eee;
  padding: 20px 0px 15px 15px !important;
  margin-bottom: 0px !important;
}
</style>
          <template>
  <div id="demo-basic-card">
    <div class="vx-row">
      <div class="vx-col w-full sm:w-1/4 lg:w-1/5 mb-base">
        <vx-card>
          <h5 class="mb-2">Search</h5>
          <!-- <vs-divider></vs-divider>
					<div class="flex justify-between flex-wrap filter">
						<truck-icon size="1.5x" class="custom-class"></truck-icon>Shipping site
						<vx-tooltip text>
							<feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
						</vx-tooltip>
          </div>-->
          <vs-divider></vs-divider>
          <v-select
            :options="search_site_value"
            @change="show = !show"
            :clearable="false"
            :dir="$vs.rtl ? 'rtl' : 'ltr'"
            v-model="ebay.site"
            class="mb-4 md:mb-0"
          />

          <div class="flex justify-between flex-wrap filter">
            <truck-icon size="1.5x" class="custom-class"></truck-icon>Shipping location
            <vx-tooltip text>
              <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
            </vx-tooltip>
          </div>
          <vs-divider></vs-divider>
          <v-select
            :options="countryOptions"
            :clearable="false"
            :dir="$vs.rtl ? 'rtl' : 'ltr'"
            v-model="ebay.country"
            class="mb-4 md:mb-0"
          />

          <div class="flex justify-between flex-wrap filter">
            <share-2-icon size="1.5x" class="custom-class"></share-2-icon>Listing type
            <vx-tooltip text>
              <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
            </vx-tooltip>
          </div>
          <vs-divider></vs-divider>
          <v-select
            :options="listOptions"
            :clearable="false"
            :dir="$vs.rtl ? 'rtl' : 'ltr'"
            v-model="ebay.list"
            class="mb-4 md:mb-0"
          />

          <div class="flex justify-between flex-wrap filter">
            <span>$</span>Price
            <vx-tooltip text>
              <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
            </vx-tooltip>
          </div>
          <vs-divider></vs-divider>
          <div class="flex justify-between flex-wrap">
            <vs-input
              label-placeholder="Minimum Price"
              v-model="ebay.minprice"
              class="filter_text"
            />
            <vs-input
              label-placeholder="Maximum Price"
              v-model="ebay.maxprice"
              class="filter_text"
            />
          </div>

          <div class="flex justify-between flex-wrap filter">
            <clock-icon size="1.5x" class="custom-class"></clock-icon>Sale date range
            <vx-tooltip text>
              <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
            </vx-tooltip>
          </div>
          <vs-divider></vs-divider>
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
            <map-pin-icon size="1.5x" class="custom-class"></map-pin-icon>Condition
            <vx-tooltip text>
              <feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
            </vx-tooltip>
          </div>
          <vs-divider></vs-divider>
          <v-select
            :options="conditionOption"
            :clearable="false"
            :dir="$vs.rtl ? 'rtl' : 'ltr'"
            v-model="ebay.condition"
            class="mb-4 md:mb-0"
          />
          <vs-divider></vs-divider>
        </vx-card>
      </div>

      <div class="vx-col w-full sm:w-3/4 lg:w-4/5 mb-base">
        <vx-card>
          <div class="my-6">
            <div class="flex justify-between flex-wrap">
              <v-select
                label="categoryName"
                style="width:20%;margin-top:2%;"
                size="large"
                :options="get_childcategory()"
                :clearable="false"
                :dir="$vs.rtl ? 'rtl' : 'ltr'"
                class="mb-4 md:mb-4"
                @input="country => check_category(country)"
              />

              <vs-input
                icon="search"
                size="large"
                label-placeholder="Search"
                v-model="ebay.search"
                style="width:65%;float:left;border-width:3px"
              />
              <vs-button
                @click="search_category()"
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
          <div class="vx-row" v-if="!isProducts">
            <div
              class="vx-col w-full sm:w-1/2 lg:w-1/3 mb-base maindiv"
              :key="filter.categoryId"
              v-for="(filter, fIndex) in categories"
            >
              <h6 class="text-muted">{{ filter.categoryName }}</h6>
              <ol class="mt-4 ol-category">
                <li
                  :key="filter_item.categoryId"
                  v-for="(filter_item, index) in filter.childcategory"
                >
                  <p
                    style="cursor:pointer"
                    @click="check_category(filter_item)"
                    v-if="index < filter.limit_by"
                  >{{ filter_item.categoryName }}</p>
                </li>
              </ol>
              <vs-button
                class="btn btn-sussess"
                href="javascript:void(0)"
                @click="dynamic_toggle(fIndex)"
              >{{ filter.limit_by===8?'More': 'Less'}}</vs-button>
            </div>
            <!-- <div
              v-for="(category) in categories"
              :key="category.categoryId"
              class="vx-col w-full sm:w-1/2 lg:w-1/3 mb-base"
            >
              <div class="flex justify-between flex-wrap">
                <p @click="get_category">{{category.categoryName}}</p>
                <vs-table :data="category.childcategory">
                  <template slot-scope="{data}">
                    <vs-tr :key="tr.categoryId" v-for="(tr,indextr) in data">
                      <vs-td :data="tr.categoryId">
                        <p style="cursor:pointer" @click="check_category(tr)">{{tr.categoryName}}</p>
                      </vs-td>
                    </vs-tr>
                    <vs-tr>
                      <vs-td>
                        <vs-button class="btn btn-sussess" @click="readMore =! readMore">
                          <span v-if="readMore">Less</span>
                          <span v-else>More</span>
                        </vs-button>
                      </vs-td>
                    </vs-tr>
                  </template>
                </vs-table>
              </div>
            </div>-->
          </div>
          <div class="flex justify-between flex-wrap">
            <vs-table
              v-if="isProducts"
              max-items="20"
              pagination
              :data="products"
              style="width:100%;"
            >
              <template slot="header">
                <h3>Results:</h3>
                <router-link
                  tag="div"
                  class="vx-logo cursor-pointer flex items-center"
                  to="/analytic"
                >
                  <vs-button color="primary" type="border">ANALYTIC</vs-button>
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
    Share2Icon,
    MapPinIcon,
    AwardIcon,
    ClockIcon,
    vSelect,
    flatPickr,
    StatisticsCardLine
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
      isMounted: false,
      ebay: {
        categoryId: 0,
        search: "",
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
      aliProducts: [],
      categories: [
        {
          categoryName: "Antiques",
          categoryId: "20081",
          fullist: false,
          childcategory: [
            { categoryName: "Antiquities", categoryId: "37903" },
            { categoryName: "Architectural & Garden", categoryId: "4707" },
            { categoryName: "Asian Antiques", categoryId: "20082" },
            { categoryName: "Decorative Arts", categoryId: "20086" },
            { categoryName: "Ethnographic", categoryId: "2207" },
            { categoryName: "Furniture", categoryId: "20091" },
            { categoryName: "Home & Hearth", categoryId: "163008" },
            { categoryName: "Incunabula", categoryId: "22422" },
            {
              categoryName: "Linens & Textiles (Pre-1930)",
              categoryId: "181677"
            },
            { categoryName: "Manuscripts", categoryId: "23048" },
            { categoryName: "Maps, Atlases & Globes", categoryId: "37958" },
            { categoryName: "Maritime", categoryId: "37965" },
            {
              categoryName: "Mercantile, Trades & Factories",
              categoryId: "163091"
            },
            {
              categoryName: "Musical Instruments (Pre-1930)",
              categoryId: "181726"
            },
            { categoryName: "Other Antiques", categoryId: "12" },
            { categoryName: "Periods & Styles", categoryId: "100927" },
            { categoryName: "Primitives", categoryId: "1217" },
            { categoryName: "Reproduction Antiques", categoryId: "22608" },
            { categoryName: "Restoration & Care", categoryId: "163101" },
            { categoryName: "Rugs & Carpets", categoryId: "37978" },
            {
              categoryName: "Science & Medicine (Pre-1930)",
              categoryId: "20094"
            },
            { categoryName: "Sewing (Pre-1930)", categoryId: "156323" },
            { categoryName: "Silver", categoryId: "20096" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Art",
          categoryId: "550",
          fullist: false,
          childcategory: [
            { categoryName: "Art Drawings", categoryId: "552" },
            { categoryName: "Art Photographs", categoryId: "2211" },
            { categoryName: "Art Posters", categoryId: "28009" },
            { categoryName: "Art Prints", categoryId: "360" },
            { categoryName: "Art Sculptures", categoryId: "553" },
            { categoryName: "Folk Art & Indigenous Art", categoryId: "357" },
            {
              categoryName: "Mixed Media Art & Collage Art",
              categoryId: "554"
            },
            { categoryName: "Other Art", categoryId: "20158" },
            { categoryName: "Paintings", categoryId: "551" },
            { categoryName: "Textile Art & Fiber Art", categoryId: "156196" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Baby",
          categoryId: "2984",
          fullist: false,
          childcategory: [
            { categoryName: "Baby Gear", categoryId: "100223" },
            { categoryName: "Baby Safety & Health", categoryId: "20433" },
            { categoryName: "Bathing & Grooming", categoryId: "20394" },
            { categoryName: "Car Safety Seats", categoryId: "66692" },
            {
              categoryName: "Carriers, Slings & Backpacks",
              categoryId: "100982"
            },
            { categoryName: "Diapering", categoryId: "45455" },
            { categoryName: "Feeding", categoryId: "20400" },
            {
              categoryName: "Keepsakes & Baby Announcements",
              categoryId: "117388"
            },
            { categoryName: "Nursery Bedding", categoryId: "20416" },
            { categoryName: "Nursery Décor", categoryId: "66697" },
            { categoryName: "Nursery Furniture", categoryId: "20422" },
            { categoryName: "Other Baby", categoryId: "1261" },
            { categoryName: "Potty Training", categoryId: "37631" },
            { categoryName: "Strollers & Accessories", categoryId: "66698" },
            { categoryName: "Toys for Baby", categoryId: "19068" },
            { categoryName: "Wholesale Lots", categoryId: "48757" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Books",
          categoryId: "267",
          fullist: false,
          childcategory: [
            { categoryName: "Accessories", categoryId: "45110" },
            { categoryName: "Antiquarian & Collectible", categoryId: "29223" },
            { categoryName: "Audiobooks", categoryId: "29792" },
            { categoryName: "Catalogs", categoryId: "118254" },
            { categoryName: "Children & Young Adults", categoryId: "182882" },
            { categoryName: "Fiction & Literature", categoryId: "171228" },
            { categoryName: "Magazines", categoryId: "280" },
            { categoryName: "Nonfiction", categoryId: "171243" },
            { categoryName: "Other Books", categoryId: "268" },
            {
              categoryName: "Textbooks, Education & Reference",
              categoryId: "184644"
            },
            { categoryName: "Wholesale & Bulk Lots", categoryId: "29399" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Business & Industrial",
          categoryId: "12576",
          fullist: false,
          childcategory: [
            {
              categoryName: "Adhesives, Sealants & Tapes",
              categoryId: "109471"
            },
            { categoryName: "Agriculture & Forestry", categoryId: "11748" },
            {
              categoryName: "Building Materials & Supplies",
              categoryId: "41498"
            },
            {
              categoryName: "Cleaning & Janitorial Supplies",
              categoryId: "46534"
            },
            {
              categoryName: "CNC, Metalworking & Manufacturing",
              categoryId: "11804"
            },
            {
              categoryName: "Electrical Equipment & Supplies",
              categoryId: "92074"
            },
            {
              categoryName: "Facility Maintenance & Safety",
              categoryId: "11897"
            },
            { categoryName: "Fasteners & Hardware", categoryId: "183900" },
            { categoryName: "Fuel & Energy", categoryId: "159693" },
            { categoryName: "Healthcare, Lab & Dental", categoryId: "11815" },
            {
              categoryName: "Heavy Equipment, Parts & Attachments",
              categoryId: "257887"
            },
            { categoryName: "HVAC & Refrigeration", categoryId: "42909" },
            {
              categoryName: "Hydraulics, Pneumatics, Pumps & Plumbing",
              categoryId: "183978"
            },
            {
              categoryName: "Industrial Automation & Motion Controls",
              categoryId: "42892"
            },
            { categoryName: "Light Equipment & Tools", categoryId: "61573" },
            { categoryName: "Material Handling", categoryId: "26221" },
            { categoryName: "Office", categoryId: "25298" },
            {
              categoryName: "Other Business & Industrial",
              categoryId: "26261"
            },
            { categoryName: "Printing & Graphic Arts", categoryId: "26238" },
            { categoryName: "Restaurant & Food Service", categoryId: "11874" },
            { categoryName: "Retail & Services", categoryId: "11890" },
            {
              categoryName: "Test, Measurement & Inspection",
              categoryId: "181939"
            },
            {
              categoryName: "Websites & Businesses for Sale",
              categoryId: "11759"
            }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Cameras & Photo",
          categoryId: "625",
          fullist: false,
          childcategory: [
            { categoryName: "Binoculars & Telescopes", categoryId: "28179" },
            { categoryName: "Camcorders", categoryId: "11724" },
            { categoryName: "Camera Drones", categoryId: "179697" },
            { categoryName: "Camera Manuals & Guides", categoryId: "4684" },
            {
              categoryName: "Camera, Drone & Photo Accessories",
              categoryId: "15200"
            },
            { categoryName: "Digital Cameras", categoryId: "31388" },
            { categoryName: "Digital Photo Frames", categoryId: "150044" },
            { categoryName: "Film Photography", categoryId: "69323" },
            {
              categoryName: "Flashes & Flash Accessories",
              categoryId: "64353"
            },
            { categoryName: "Lenses & Filters", categoryId: "78997" },
            { categoryName: "Lighting & Studio", categoryId: "30078" },
            { categoryName: "Mixed Lots", categoryId: "45089" },
            { categoryName: "Other Cameras & Photo", categoryId: "27432" },
            { categoryName: "Replacement Parts & Tools", categoryId: "182074" },
            { categoryName: "Tripods & Supports", categoryId: "30090" },
            { categoryName: "Video Production & Editing", categoryId: "21162" },
            { categoryName: "Vintage Movie & Photography", categoryId: "3326" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Cell Phones & Accessories",
          categoryId: "15032",
          fullist: false,
          childcategory: [
            {
              categoryName: "Cell Phone & Smartphone Parts",
              categoryId: "43304"
            },
            { categoryName: "Cell Phone Accessories", categoryId: "9394" },
            { categoryName: "Cell Phones & Smartphones", categoryId: "9355" },
            { categoryName: "Display Phones", categoryId: "136699" },
            { categoryName: "Mixed Lots", categoryId: "45065" },
            { categoryName: "PDA Accessories", categoryId: "175744" },
            { categoryName: "PDAs", categoryId: "38331" },
            { categoryName: "Phone Cards & SIM Cards", categoryId: "146492" },
            { categoryName: "Smart Watch Accessories", categoryId: "182064" },
            { categoryName: "Smart Watches", categoryId: "178893" },
            { categoryName: "Vintage Cell Phones", categoryId: "182073" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Clothing, Shoes & Accessories",
          categoryId: "11450",
          fullist: false,
          childcategory: [
            { categoryName: "Baby", categoryId: "260018" },
            { categoryName: "Kids", categoryId: "171146" },
            { categoryName: "Men", categoryId: "260012" },
            { categoryName: "Specialty", categoryId: "260033" },
            { categoryName: "Women", categoryId: "260010" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Coins & Paper Money",
          categoryId: "11116",
          fullist: false,
          childcategory: [
            { categoryName: "Bullion", categoryId: "39482" },
            { categoryName: "Coins: Ancient", categoryId: "4733" },
            { categoryName: "Coins: Canada", categoryId: "3377" },
            { categoryName: "Coins: Medieval", categoryId: "18466" },
            { categoryName: "Coins: US", categoryId: "253" },
            { categoryName: "Coins: World", categoryId: "256" },
            { categoryName: "Exonumia", categoryId: "3452" },
            { categoryName: "Other Coins & Paper Money", categoryId: "169305" },
            { categoryName: "Paper Money: US", categoryId: "3412" },
            { categoryName: "Paper Money: World", categoryId: "3411" },
            { categoryName: "Publications & Supplies", categoryId: "83274" },
            { categoryName: "Stocks & Bonds, Scripophily", categoryId: "3444" },
            { categoryName: "Virtual Currency", categoryId: "179197" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Collectibles",
          categoryId: "1",
          fullist: false,
          childcategory: [
            { categoryName: "Advertising", categoryId: "34" },
            { categoryName: "Animals", categoryId: "1335" },
            { categoryName: "Animation Art & Characters", categoryId: "13658" },
            {
              categoryName: "Arcade, Jukeboxes & Pinball",
              categoryId: "66502"
            },
            { categoryName: "Autographs", categoryId: "14429" },
            { categoryName: "Banks, Registers & Vending", categoryId: "66503" },
            { categoryName: "Barware", categoryId: "3265" },
            { categoryName: "Beads", categoryId: "156277" },
            { categoryName: "Bottles & Insulators", categoryId: "29797" },
            { categoryName: "Breweriana, Beer", categoryId: "562" },
            { categoryName: "Casino", categoryId: "898" },
            { categoryName: "Clocks", categoryId: "397" },
            { categoryName: "Comics", categoryId: "63" },
            { categoryName: "Credit, Charge Cards", categoryId: "1462" },
            { categoryName: "Cultures & Ethnicities", categoryId: "3913" },
            { categoryName: "Decorative Collectibles", categoryId: "13777" },
            { categoryName: "Disneyana", categoryId: "137" },
            { categoryName: "Fantasy, Mythical & Magic", categoryId: "10860" },
            { categoryName: "Historical Memorabilia", categoryId: "259135" },
            { categoryName: "Holiday & Seasonal", categoryId: "907" },
            { categoryName: "Kitchen & Home", categoryId: "13905" },
            { categoryName: "Knives, Swords & Blades", categoryId: "1401" },
            { categoryName: "Lamps, Lighting", categoryId: "1404" },
            { categoryName: "Linens & Textiles (1930-Now)", categoryId: "940" },
            { categoryName: "Metalware", categoryId: "1430" },
            { categoryName: "Militaria", categoryId: "13956" },
            { categoryName: "Non-Sport Trading Cards", categoryId: "182982" },
            { categoryName: "Paper", categoryId: "124" },
            { categoryName: "Pens & Writing Instruments", categoryId: "966" },
            {
              categoryName: "Pez, Keychains, Promo Glasses",
              categoryId: "14005"
            },
            { categoryName: "Phone Cards", categoryId: "60811" },
            { categoryName: "Photographic Images", categoryId: "14277" },
            {
              categoryName: "Pinbacks, Bobbles, Lunchboxes",
              categoryId: "39507"
            },
            { categoryName: "Postcards", categoryId: "914" },
            {
              categoryName: "Radio, Phonograph, TV, Phone",
              categoryId: "29832"
            },
            { categoryName: "Religion & Spirituality", categoryId: "1446" },
            { categoryName: "Rocks, Fossils & Minerals", categoryId: "3213" },
            {
              categoryName: "Science & Medicine (1930-Now)",
              categoryId: "412"
            },
            { categoryName: "Science Fiction & Horror", categoryId: "152" },
            { categoryName: "Sewing (1930-Now)", categoryId: "113" },
            {
              categoryName: "Souvenirs & Travel Memorabilia",
              categoryId: "165800"
            },
            { categoryName: "Tobacciana", categoryId: "593" },
            { categoryName: "Tools, Hardware & Locks", categoryId: "13849" },
            { categoryName: "Transportation", categoryId: "417" },
            { categoryName: "Vanity, Perfume & Shaving", categoryId: "597" },
            {
              categoryName: "Vintage, Retro, Mid-Century",
              categoryId: "69851"
            },
            {
              categoryName: "Virtual & Crypto Collectibles",
              categoryId: "258032"
            },
            { categoryName: "Wholesale Lots", categoryId: "45058" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Computers/Tablets & Networking",
          categoryId: "58058",
          fullist: false,
          childcategory: [
            { categoryName: "3D Printers & Supplies", categoryId: "183062" },
            {
              categoryName: "Computer Cables & Connectors",
              categoryId: "182094"
            },
            {
              categoryName: "Computer Components & Parts",
              categoryId: "175673"
            },
            { categoryName: "Desktops & All-In-Ones", categoryId: "171957" },
            {
              categoryName: "Drives, Storage & Blank Media",
              categoryId: "165"
            },
            {
              categoryName: "Enterprise Networking, Servers",
              categoryId: "175698"
            },
            {
              categoryName: "Home Networking & Connectivity",
              categoryId: "11176"
            },
            { categoryName: "Keyboards, Mice & Pointers", categoryId: "3676" },
            {
              categoryName: "Laptop & Desktop Accessories",
              categoryId: "31530"
            },
            { categoryName: "Laptops & Netbooks", categoryId: "175672" },
            { categoryName: "Manuals & Resources", categoryId: "3516" },
            { categoryName: "Mixed Lots", categoryId: "259696" },
            {
              categoryName: "Monitors, Projectors & Accs",
              categoryId: "162497"
            },
            { categoryName: "Other Computers & Networking", categoryId: "162" },
            {
              categoryName: "Power Protection, Distribution",
              categoryId: "86722"
            },
            {
              categoryName: "Printers, Scanners & Supplies",
              categoryId: "171961"
            },
            { categoryName: "Software", categoryId: "18793" },
            {
              categoryName: "Tablet & eBook Reader Accs",
              categoryId: "176970"
            },
            {
              categoryName: "Tablet & eBook Reader Parts",
              categoryId: "180235"
            },
            { categoryName: "Tablets & eBook Readers", categoryId: "171485" },
            { categoryName: "Vintage Computing", categoryId: "11189" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Consumer Electronics",
          categoryId: "293",
          fullist: false,
          childcategory: [
            {
              categoryName: "Home Telephones & Accessories",
              categoryId: "3286"
            },
            { categoryName: "Mixed Lots", categoryId: "259701" },
            {
              categoryName: "Multipurpose Batteries & Power",
              categoryId: "48446"
            },
            {
              categoryName: "Other Consumer Electronics",
              categoryId: "175837"
            },
            {
              categoryName: "Portable Audio & Headphones",
              categoryId: "15052"
            },
            { categoryName: "Radio Communication", categoryId: "1500" },
            { categoryName: "Smart Glasses", categoryId: "178894" },
            {
              categoryName: "Surveillance & Smart Home Electronics",
              categoryId: "185067"
            },
            { categoryName: "TV, Video & Home Audio", categoryId: "32852" },
            { categoryName: "Vehicle Electronics & GPS", categoryId: "3270" },
            { categoryName: "Vintage Electronics", categoryId: "183077" },
            { categoryName: "Virtual Reality", categoryId: "183067" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Crafts",
          categoryId: "14339",
          fullist: false,
          childcategory: [
            { categoryName: "Art Supplies", categoryId: "11783" },
            { categoryName: "Beads & Jewelry Making", categoryId: "31723" },
            { categoryName: "Fabric", categoryId: "28162" },
            {
              categoryName: "Fabric Painting & Decorating",
              categoryId: "183118"
            },
            { categoryName: "Glass & Mosaics", categoryId: "163778" },
            {
              categoryName: "Handcrafted & Finished Pieces",
              categoryId: "71183"
            },
            { categoryName: "Home Arts & Crafts", categoryId: "160667" },
            { categoryName: "Kids' Crafts", categoryId: "116652" },
            { categoryName: "Leathercrafts", categoryId: "28131" },
            {
              categoryName: "Multi-Purpose Craft Supplies",
              categoryId: "28102"
            },
            { categoryName: "Needlecrafts & Yarn", categoryId: "160706" },
            { categoryName: "Other Crafts", categoryId: "75576" },
            {
              categoryName: "Scrapbooking & Paper Crafts",
              categoryId: "11788"
            },
            {
              categoryName: "Sculpting, Molding & Ceramics",
              categoryId: "183302"
            },
            { categoryName: "Sewing", categoryId: "160737" },
            { categoryName: "Stamping & Embossing", categoryId: "3122" },
            { categoryName: "Wholesale Lots", categoryId: "45074" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Dolls & Bears",
          categoryId: "237",
          fullist: false,
          childcategory: [
            { categoryName: "Bear Making Supplies", categoryId: "50253" },
            { categoryName: "Bears", categoryId: "386" },
            { categoryName: "Dollhouse Miniatures", categoryId: "1202" },
            { categoryName: "Dolls", categoryId: "238" },
            { categoryName: "Paper Dolls", categoryId: "2440" },
            { categoryName: "Wholesale Lots", categoryId: "52546" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "DVDs & Movies",
          categoryId: "11232",
          fullist: false,
          childcategory: [
            { categoryName: "DVDs & Blu-ray Discs", categoryId: "617" },
            { categoryName: "Film Stock", categoryId: "63821" },
            { categoryName: "Laserdiscs", categoryId: "381" },
            { categoryName: "Other Formats", categoryId: "41676" },
            {
              categoryName: "Storage & Media Accessories",
              categoryId: "52554"
            },
            { categoryName: "UMDs", categoryId: "132975" },
            { categoryName: "VHS Tapes", categoryId: "309" },
            { categoryName: "Wholesale Lots", categoryId: "31606" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "eBay Motors",
          categoryId: "6000",
          fullist: false,
          childcategory: [
            {
              categoryName: "Automotive Tools & Supplies",
              categoryId: "34998"
            },
            { categoryName: "Boats", categoryId: "26429" },
            { categoryName: "Cars & Trucks", categoryId: "6001" },
            { categoryName: "Motorcycles", categoryId: "6024" },
            { categoryName: "Other Vehicles & Trailers", categoryId: "6038" },
            { categoryName: "Parts & Accessories", categoryId: "6028" },
            { categoryName: "Powersports", categoryId: "66466" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Entertainment Memorabilia",
          categoryId: "45100",
          fullist: false,
          childcategory: [
            { categoryName: "Autographs-Original", categoryId: "57" },
            { categoryName: "Autographs-Reprints", categoryId: "104412" },
            { categoryName: "Movie Memorabilia", categoryId: "196" },
            { categoryName: "Music Memorabilia", categoryId: "2329" },
            { categoryName: "Other Entertainment Mem", categoryId: "2312" },
            { categoryName: "Television Memorabilia", categoryId: "1424" },
            { categoryName: "Theater Memorabilia", categoryId: "2362" },
            { categoryName: "Video Game Memorabilia", categoryId: "45101" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Everything Else",
          categoryId: "99",
          fullist: false,
          childcategory: [
            { categoryName: "Adult Only", categoryId: "319" },
            {
              categoryName: "Career Development & Education",
              categoryId: "3143"
            },
            { categoryName: "eBay Special Offers", categoryId: "177600" },
            { categoryName: "eBay User Tools", categoryId: "20924" },
            { categoryName: "Every Other Thing", categoryId: "88433" },
            { categoryName: "Funeral & Cemetery", categoryId: "88739" },
            { categoryName: "Genealogy", categoryId: "20925" },
            { categoryName: "Information Products", categoryId: "102480" },
            { categoryName: "LP Parent", categoryId: "183627" },
            { categoryName: "Metaphysical", categoryId: "19266" },
            { categoryName: "Personal Development", categoryId: "102329" },
            { categoryName: "Personal Security", categoryId: "102535" },
            {
              categoryName: "Religious Products & Supplies",
              categoryId: "102545"
            },
            {
              categoryName: "Reward Points & Incentives",
              categoryId: "102553"
            },
            {
              categoryName:
                "Test Category For Internal Use Only Parent Level 2",
              categoryId: "14112"
            },
            { categoryName: "Weird Stuff", categoryId: "1466" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Gift Cards & Coupons",
          categoryId: "172008",
          fullist: false,
          childcategory: [
            { categoryName: "Coupons", categoryId: "172010" },
            { categoryName: "Digital Gifts", categoryId: "176950" },
            { categoryName: "eBay Gift Cards", categoryId: "172036" },
            { categoryName: "Gift Cards", categoryId: "172009" },
            { categoryName: "Gift Certificates", categoryId: "31411" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Health & Beauty",
          categoryId: "26395",
          fullist: false,
          childcategory: [
            { categoryName: "Bath & Body", categoryId: "11838" },
            {
              categoryName: "E-Cigarettes, Vapes & Accs",
              categoryId: "183497"
            },
            { categoryName: "Fragrances", categoryId: "180345" },
            { categoryName: "Hair Care & Styling", categoryId: "11854" },
            { categoryName: "Health Care", categoryId: "67588" },
            { categoryName: "Makeup", categoryId: "31786" },
            { categoryName: "Massage", categoryId: "36447" },
            { categoryName: "Medical & Mobility", categoryId: "11778" },
            {
              categoryName: "Nail Care, Manicure & Pedicure",
              categoryId: "47945"
            },
            {
              categoryName: "Natural & Alternative Remedies",
              categoryId: "67659"
            },
            { categoryName: "Oral Care", categoryId: "31769" },
            { categoryName: "Other Health & Beauty", categoryId: "1277" },
            { categoryName: "Salon & Spa Equipment", categoryId: "177731" },
            { categoryName: "Shaving & Hair Removal", categoryId: "31762" },
            { categoryName: "Skin Care", categoryId: "11863" },
            { categoryName: "Sun Protection & Tanning", categoryId: "31772" },
            { categoryName: "Tattoos & Body Art", categoryId: "33914" },
            { categoryName: "Vision Care", categoryId: "31414" },
            {
              categoryName: "Vitamins & Dietary Supplements",
              categoryId: "180959"
            },
            { categoryName: "Wholesale Lots", categoryId: "40965" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Home & Garden",
          categoryId: "11700",
          fullist: false,
          childcategory: [
            { categoryName: "Bath", categoryId: "26677" },
            { categoryName: "Bedding", categoryId: "20444" },
            { categoryName: "Food & Beverages", categoryId: "14308" },
            { categoryName: "Fresh Cut Flowers", categoryId: "178069" },
            { categoryName: "Furniture", categoryId: "3197" },
            {
              categoryName: "Greeting Cards & Party Supply",
              categoryId: "16086"
            },
            { categoryName: "Holiday & Seasonal Décor", categoryId: "170090" },
            { categoryName: "Home Décor", categoryId: "10033" },
            { categoryName: "Home Improvement", categoryId: "159907" },
            {
              categoryName: "Household Supplies & Cleaning",
              categoryId: "299"
            },
            { categoryName: "Kids & Teens at Home", categoryId: "176988" },
            { categoryName: "Kitchen Fixtures", categoryId: "177073" },
            { categoryName: "Kitchen, Dining & Bar", categoryId: "20625" },
            {
              categoryName: "Lamps, Lighting & Ceiling Fans",
              categoryId: "20697"
            },
            { categoryName: "Major Appliances", categoryId: "20710" },
            { categoryName: "Other Home & Garden", categoryId: "181076" },
            { categoryName: "Rugs & Carpets", categoryId: "20571" },
            { categoryName: "School Supplies", categoryId: "16092" },
            { categoryName: "Tools & Workshop Equipment", categoryId: "631" },
            { categoryName: "Wedding Supplies", categoryId: "11827" },
            { categoryName: "Wholesale Lots", categoryId: "31605" },
            {
              categoryName: "Window Treatments & Hardware",
              categoryId: "63514"
            },
            {
              categoryName: "Yard, Garden & Outdoor Living",
              categoryId: "159912"
            }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Jewelry & Watches",
          categoryId: "281",
          fullist: false,
          childcategory: [
            { categoryName: "Children's Jewelry", categoryId: "84605" },
            { categoryName: "Engagement & Wedding", categoryId: "91427" },
            { categoryName: "Ethnic, Regional & Tribal", categoryId: "11312" },
            { categoryName: "Fashion Jewelry", categoryId: "10968" },
            { categoryName: "Fine Jewelry", categoryId: "4196" },
            {
              categoryName: "Handcrafted, Artisan Jewelry",
              categoryId: "110633"
            },
            { categoryName: "Jewelry Boxes & Organizers", categoryId: "10321" },
            { categoryName: "Jewelry Design & Repair", categoryId: "164352" },
            { categoryName: "Loose Beads", categoryId: "179264" },
            { categoryName: "Loose Diamonds & Gemstones", categoryId: "491" },
            { categoryName: "Men's Jewelry", categoryId: "10290" },
            { categoryName: "Other Jewelry & Watches", categoryId: "98863" },
            { categoryName: "Vintage & Antique Jewelry", categoryId: "48579" },
            {
              categoryName: "Watches, Parts & Accessories",
              categoryId: "260324"
            },
            { categoryName: "Wholesale Lots", categoryId: "40131" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Music",
          categoryId: "11233",
          fullist: false,
          childcategory: [
            { categoryName: "Cassettes", categoryId: "176983" },
            { categoryName: "CDs", categoryId: "176984" },
            { categoryName: "Other Formats", categoryId: "618" },
            { categoryName: "Records", categoryId: "176985" },
            {
              categoryName: "Storage & Media Accessories",
              categoryId: "52473"
            },
            { categoryName: "Wholesale Lots", categoryId: "31608" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Musical Instruments & Gear",
          categoryId: "619",
          fullist: false,
          childcategory: [
            { categoryName: "Brass", categoryId: "16212" },
            { categoryName: "DJ Equipment", categoryId: "48458" },
            { categoryName: "Equipment", categoryId: "180008" },
            { categoryName: "Guitars & Basses", categoryId: "3858" },
            {
              categoryName: "Instruction Books, CDs & Video",
              categoryId: "182150"
            },
            { categoryName: "Karaoke Entertainment", categoryId: "175696" },
            { categoryName: "Other Musical Instruments", categoryId: "308" },
            { categoryName: "Percussion", categoryId: "180012" },
            {
              categoryName: "Pianos, Keyboards & Organs",
              categoryId: "180010"
            },
            { categoryName: "Pro Audio Equipment", categoryId: "180014" },
            { categoryName: "Sheet Music & Song Books", categoryId: "180015" },
            { categoryName: "Stage Lighting & Effects", categoryId: "12922" },
            { categoryName: "String", categoryId: "180016" },
            {
              categoryName: "Vintage Musical Instruments",
              categoryId: "181162"
            },
            { categoryName: "Wholesale Lots", categoryId: "52555" },
            { categoryName: "Wind & Woodwind", categoryId: "10181" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Pet Supplies",
          categoryId: "1281",
          fullist: false,
          childcategory: [
            { categoryName: "Backyard Poultry Supplies", categoryId: "177801" },
            { categoryName: "Bird Supplies", categoryId: "20734" },
            { categoryName: "Cameras", categoryId: "259318" },
            { categoryName: "Cat Supplies", categoryId: "20737" },
            { categoryName: "Dog Supplies", categoryId: "20742" },
            { categoryName: "Fish & Aquariums", categoryId: "20754" },
            { categoryName: "Other Pet Supplies", categoryId: "301" },
            { categoryName: "Pet Memorials & Urns", categoryId: "116391" },
            { categoryName: "Reptile Supplies", categoryId: "1285" },
            { categoryName: "Small Animal Supplies", categoryId: "259320" },
            { categoryName: "Trackers", categoryId: "259319" },
            { categoryName: "Wholesale Lots", categoryId: "48760" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Pottery & Glass",
          categoryId: "870",
          fullist: false,
          childcategory: [
            { categoryName: "Glass", categoryId: "50693" },
            { categoryName: "Pottery & China", categoryId: "18875" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Real Estate",
          categoryId: "10542",
          fullist: false,
          childcategory: [
            { categoryName: "Commercial", categoryId: "15825" },
            { categoryName: "Land", categoryId: "15841" },
            { categoryName: "Manufactured Homes", categoryId: "94825" },
            { categoryName: "Other Real Estate", categoryId: "1607" },
            { categoryName: "Residential", categoryId: "12605" },
            { categoryName: "Timeshares for Sale", categoryId: "15897" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Specialty Services",
          categoryId: "316",
          fullist: false,
          childcategory: [
            { categoryName: "Artistic Services", categoryId: "47126" },
            { categoryName: "Custom Clothing & Jewelry", categoryId: "50343" },
            { categoryName: "eBay Auction Services", categoryId: "50349" },
            { categoryName: "Graphic & Logo Design", categoryId: "47131" },
            { categoryName: "Home Improvement Services", categoryId: "170048" },
            { categoryName: "Item Based Services", categoryId: "175814" },
            {
              categoryName: "Media Editing & Duplication",
              categoryId: "50355"
            },
            { categoryName: "Other Specialty Services", categoryId: "317" },
            { categoryName: "Printing & Personalization", categoryId: "20943" },
            { categoryName: "Restoration & Repair", categoryId: "47119" },
            { categoryName: "Web & Computer Services", categoryId: "47104" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Sporting Goods",
          categoryId: "888",
          fullist: false,
          childcategory: [
            {
              categoryName: "Boxing, Martial Arts & MMA",
              categoryId: "179767"
            },
            { categoryName: "Cycling", categoryId: "7294" },
            { categoryName: "Fishing", categoryId: "1492" },
            { categoryName: "Fitness, Running & Yoga", categoryId: "15273" },
            { categoryName: "Golf", categoryId: "1513" },
            { categoryName: "Hunting", categoryId: "7301" },
            { categoryName: "Indoor Games", categoryId: "36274" },
            { categoryName: "Other Sporting Goods", categoryId: "310" },
            { categoryName: "Outdoor Sports", categoryId: "159043" },
            { categoryName: "Team Sports", categoryId: "159049" },
            { categoryName: "Tennis & Racquet Sports", categoryId: "159134" },
            { categoryName: "Water Sports", categoryId: "159136" },
            { categoryName: "Wholesale Lots", categoryId: "40146" },
            { categoryName: "Winter Sports", categoryId: "36259" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Sports Mem, Cards & Fan Shop",
          categoryId: "64482",
          fullist: false,
          childcategory: [
            { categoryName: "Autographs-Original", categoryId: "51" },
            { categoryName: "Autographs-Reprints", categoryId: "50115" },
            { categoryName: "Fan Apparel & Souvenirs", categoryId: "24409" },
            { categoryName: "Game Used Memorabilia", categoryId: "50116" },
            {
              categoryName: "Sports Stickers, Sets & Albums",
              categoryId: "141755"
            },
            { categoryName: "Sports Trading Cards", categoryId: "212" },
            { categoryName: "Vintage Sports Memorabilia", categoryId: "50123" },
            { categoryName: "Wholesale Lots", categoryId: "56080" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Stamps",
          categoryId: "260",
          fullist: false,
          childcategory: [
            { categoryName: "Africa", categoryId: "181423" },
            { categoryName: "Asia", categoryId: "181416" },
            { categoryName: "Australia & Oceania", categoryId: "181424" },
            {
              categoryName: "British Colonies & Territories",
              categoryId: "65174"
            },
            { categoryName: "Canada", categoryId: "3478" },
            { categoryName: "Caribbean", categoryId: "179377" },
            { categoryName: "Europe", categoryId: "4742" },
            { categoryName: "Great Britain", categoryId: "3499" },
            { categoryName: "Latin America", categoryId: "181417" },
            { categoryName: "Middle East", categoryId: "181422" },
            { categoryName: "Other Stamps", categoryId: "170137" },
            { categoryName: "Publications & Supplies", categoryId: "181421" },
            { categoryName: "Specialty Philately", categoryId: "7898" },
            { categoryName: "Topical Stamps", categoryId: "4752" },
            { categoryName: "United States", categoryId: "261" },
            { categoryName: "Worldwide", categoryId: "181420" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Tickets & Experiences",
          categoryId: "1305",
          fullist: false,
          childcategory: [
            { categoryName: "Concert Tickets", categoryId: "173634" },
            { categoryName: "Other Tickets & Experiences", categoryId: "1306" },
            { categoryName: "Parking Passes", categoryId: "178892" },
            { categoryName: "Special Experiences", categoryId: "170591" },
            { categoryName: "Sports Tickets", categoryId: "173633" },
            { categoryName: "Theater Tickets", categoryId: "173635" },
            { categoryName: "Theme Park & Club Passes", categoryId: "170594" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Toys & Hobbies",
          categoryId: "220",
          fullist: false,
          childcategory: [
            { categoryName: "Action Figures", categoryId: "246" },
            { categoryName: "Beanbag Plush", categoryId: "49019" },
            { categoryName: "Building Toys", categoryId: "183446" },
            { categoryName: "Classic Toys", categoryId: "19016" },
            { categoryName: "Collectible Card Games", categoryId: "2536" },
            { categoryName: "Diecast & Toy Vehicles", categoryId: "222" },
            { categoryName: "Educational", categoryId: "11731" },
            {
              categoryName: "Electronic, Battery & Wind-Up",
              categoryId: "19071"
            },
            {
              categoryName: "Fast Food & Cereal Premiums",
              categoryId: "19077"
            },
            { categoryName: "Games", categoryId: "233" },
            { categoryName: "Marbles", categoryId: "58799" },
            { categoryName: "Model Railroads & Trains", categoryId: "180250" },
            { categoryName: "Models & Kits", categoryId: "1188" },
            { categoryName: "Outdoor Toys & Structures", categoryId: "11743" },
            {
              categoryName: "Preschool Toys & Pretend Play",
              categoryId: "19169"
            },
            { categoryName: "Puzzles", categoryId: "2613" },
            {
              categoryName: "Radio Control & Control Line",
              categoryId: "2562"
            },
            {
              categoryName: "Robots, Monsters & Space Toys",
              categoryId: "19192"
            },
            { categoryName: "Slot Cars", categoryId: "2616" },
            { categoryName: "Stuffed Animals", categoryId: "436" },
            { categoryName: "Toy Soldiers", categoryId: "2631" },
            { categoryName: "TV & Movie Character Toys", categoryId: "2624" },
            { categoryName: "Vintage & Antique Toys", categoryId: "717" },
            { categoryName: "Wholesale Lots", categoryId: "40149" }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Travel",
          categoryId: "3252",
          fullist: false,
          childcategory: [
            { categoryName: "Airline", categoryId: "3253" },
            { categoryName: "Campground & RV Parks", categoryId: "164802" },
            { categoryName: "Car Rental", categoryId: "147399" },
            { categoryName: "Cruises", categoryId: "16078" },
            { categoryName: "Lodging", categoryId: "16123" },
            { categoryName: "Luggage", categoryId: "16080" },
            { categoryName: "Luggage Accessories", categoryId: "173520" },
            { categoryName: "Maps", categoryId: "164803" },
            { categoryName: "Other Travel", categoryId: "1310" },
            { categoryName: "Rail", categoryId: "98982" },
            { categoryName: "Travel Accessories", categoryId: "93838" },
            { categoryName: "Vacation Packages", categoryId: "29578" },
            {
              categoryName: "Vintage Luggage & Travel Accs",
              categoryId: "183477"
            }
          ],
          default_limit: 8,
          limit_by: 8
        },
        {
          categoryName: "Video Games & Consoles",
          categoryId: "1249",
          fullist: false,
          childcategory: [
            {
              categoryName: "Manuals, Inserts & Box Art",
              categoryId: "182174"
            },
            { categoryName: "Mixed Lots", categoryId: "260000" },
            {
              categoryName: "Original Game Cases & Boxes",
              categoryId: "182175"
            },
            { categoryName: "Prepaid Gaming Cards", categoryId: "156597" },
            { categoryName: "Replacement Parts & Tools", categoryId: "171833" },
            { categoryName: "Strategy Guides & Cheats", categoryId: "156595" },
            { categoryName: "Video Game Accessories", categoryId: "54968" },
            { categoryName: "Video Game Consoles", categoryId: "139971" },
            { categoryName: "Video Game Merchandise", categoryId: "38583" },
            { categoryName: "Video Games", categoryId: "139973" }
          ],
          default_limit: 8,
          limit_by: 8
        }
      ]
    };
  },
  methods: {
    // change_more: function(category) {
    // 	console.log("called fullist", category);
    // },
    get_childcategory: function() {
      let childarray = [];
      for (var i = 0; i < this.categories.length; i++) {
        for (var a = 0; a < this.categories[i].childcategory.length; a++) {
          childarray.push(this.categories[i].childcategory[a]);
          childarray.sort(function(a, b) {
            return a.categoryName.localeCompare(b.categoryName);
          });
        }
      }
      return childarray;
    },
    dynamic_toggle(fIndex) {
      debugger;
      let currentFilter = this.categories[fIndex];
      this.categories[fIndex].limit_by =
        currentFilter.limit_by === currentFilter.default_limit
          ? currentFilter.childcategory.length
          : currentFilter.default_limit;
    },
    check_category: function(tr) {
      var context = this;
      debugger;
      console.log("tr", tr.categoryName);
      this.ebay.search = tr.categoryName;
      this.ebay.categoryId = tr.categoryId;
    },
    get_category: function() {
      for (var i = 0; i < this.categories.length; i++) {
        this.categories[i].childcategory.sort(function(a, b) {
          return a.categoryName.localeCompare(b.categoryName);
        });
        console.log("category", JSON.stringify(this.categories));
      }
    },
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
    search_category: function() {
      this.$vs.loading();
      var payload = {
        categoryId: this.ebay.categoryId,
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
      this.$store
        .dispatch("categories/search", payload)
        .then(res => {
          console.log("category", res.data.products);

          this.products = res.data.products;
          this.products.map(el => {
            return (el.id = false);
          });
          this.isProducts = true;
          this.isAliProducts = false;
          this.aliProducts = [];
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
    },
    categoryOptions() {
      // var categoryOptions = [];
      // if (this.isMounted) {
      // 	for (var i = 0; i < this.categories.length; i++) {
      // 		categoryOptions.append({
      // 			label: this.categories[i].categoryName,
      // 			value: this.categories[i].categoryId
      // 		});
      // 	}
      // 	console.log("categoryoptions");
      // 	return categoryOptions;
      // }
      return [];
    }
  },
  mounted() {
    this.isMounted = true;
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
}
.vs-con-table .vs-con-tbody .con-vs-checkbox {
  display: inline-block;
}
.vs-con-table .vs-con-tbody {
  // height: 300px !important;
  overflow: auto;
}
</style>

