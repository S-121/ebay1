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
						<truck-icon size="1.5x" class="custom-class"></truck-icon>Shipping site
						<vx-tooltip text>
							<feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
						</vx-tooltip>
					</div>
					<vs-divider></vs-divider>
					<v-select
						:options="search_site_value"
						@change="change_site"
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
						<clock-icon size="1.5x" class="custom-class"></clock-icon>sales date range
						<vx-tooltip text>
							<feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
						</vx-tooltip>
					</div>
					<vs-divider></vs-divider>
					<v-select
						:options="dateRange"
						:clearable="false"
						:dir="$vs.rtl ? 'rtl' : 'ltr'"
						v-model="ebay.date"
						class="mb-4 md:mb-0"
					/>
					<vs-divider></vs-divider>
					<div class="flex justify-between flex-wrap filter">
						Exclude phrase
						<vx-tooltip text>
							<feather-icon icon="HelpCircleIcon" class="inline-block mr-2" svgClasses="w-4 h-4" />
						</vx-tooltip>
						<vs-divider></vs-divider>
						<vs-input label-placeholder="Label-placeholder" v-model="phrase" style="width:100%;" />
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
								label-placeholder="Search for..."
								v-model="ebay.search"
								style="width:75%;float:left;border-width:3px"
							/>
							<vs-button
								@click="search_title()"
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
					<div class="flex justify-between flex-wrap"></div>
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
					date: { label: "30 Days", value: "30" },
					condition: { label: "Brand New", value: "NEW" },
					fromDate: null,
					toDate: null
				},
				dateRange: [
					{ label: "30 Days", value: "30" },
					{ label: "21 Days", value: "21" },
					{ label: "7 Days", value: "7" }
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
				phrase: "",
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
			search_title: function() {
				this.$vs.loading();
				var payload = {
					keyword: this.ebay.search,
					site: this.ebay.site.label,
					country: this.ebay.country.value,
					date: this.ebay.date.value,
					phrase: this.phrase
				};

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
</style>

