    <!-- =========================================================================================
      File Name: DataListThumbView.vue
      Description: Data List - Thumb View
      ----------------------------------------------------------------------------------------
      Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
      Author: Pixinvent
      Author URL: http://www.themeforest.net/user/pixinvent
    ========================================================================================== -->

    <template>
	<div id="data-list-thumb-view" class="data-list-container">
		<data-view-sidebar
			:isSidebarActive="addNewDataSidebar"
			@closeSidebar="toggleDataSidebar"
			:data="sidebarData"
		/>

		<!-- ROW 2 -->
		<div class="vx-row">
			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="ListIcon"
					icon-right
					:statistic="total_listings"
					statisticTitle="Listings"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="ShoppingCartIcon"
					icon-right
					:statistic="sold_items"
					statisticTitle="Sold Items"
					color="success"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="DollarSignIcon"
					icon-right
					:statistic="earn"
					statisticTitle="Sale earning"
					color="danger"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="AwardIcon"
					icon-right
					:statistic="successful_listings"
					statisticTitle="Successful listings"
					color="success"
				/>
			</div>
		</div>
		<div class="vx-row">
			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="DollarSignIcon"
					icon-right
					:statistic="average_price"
					statisticTitle="Average Product Price"
					color="warning"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="SearchIcon"
					icon-right
					:statistic="search_keyword"
					statisticTitle="Searched"
					color="success"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="ActivityIcon"
					icon-right
					statistic="8043 %"
					statisticTitle="Sell through"
					color="warning"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					hideChart
					class="mb-base"
					icon="SaveIcon"
					icon-right
					statistic="Save_Search"
					statisticTitle="Save Search"
				/>
			</div>
		</div>

		<!-- ROW 3 -->
		<div class="vx-row">
			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					class="mb-base"
					v-if="subscribersGained.analyticsData"
					icon="UsersIcon"
					:statistic="subscribersGained.analyticsData.subscribers | k_formatter"
					statisticTitle="Subscribers Gained"
					:chartData="subscribersGained.series"
					type="area"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					class="mb-base"
					v-if="revenueGenerated.analyticsData"
					icon="DollarSignIcon"
					:statistic="revenueGenerated.analyticsData.revenue | k_formatter"
					statisticTitle="Revenue Generated"
					:chartData="revenueGenerated.series"
					color="success"
					type="area"
				/>
			</div>

			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					class="mb-base"
					v-if="quarterlySales.analyticsData"
					icon="ShoppingCartIcon"
					:statistic="quarterlySales.analyticsData.sales"
					statisticTitle="Quarterly Sales"
					:chartData="quarterlySales.series"
					color="danger"
					type="area"
				/>
			</div>
			<div class="vx-col w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
				<statistics-card-line
					class="mb-base"
					v-if="ordersRecevied.analyticsData"
					icon="ShoppingBagIcon"
					:statistic="ordersRecevied.analyticsData.orders | k_formatter"
					statisticTitle="Orders Received"
					:chartData="ordersRecevied.series"
					color="warning"
					type="area"
				/>
			</div>
		</div>

		<vs-table
			ref="table"
			multiple
			v-model="selected"
			pagination
			:max-items="itemsPerPage"
			search
			:data="products"
		>
			<div slot="header" class="flex flex-wrap-reverse items-center flex-grow justify-between">
				<div class="flex flex-wrap-reverse items-center">
					<!-- ACTION - DROPDOWN -->
					<vs-dropdown vs-trigger-click class="cursor-pointer mr-4 mb-4">
						<div
							class="p-4 shadow-drop rounded-lg d-theme-dark-bg cursor-pointer flex items-center justify-center text-lg font-medium w-32"
						>
							<span class="mr-2">Actions</span>
							<feather-icon icon="ChevronDownIcon" svgClasses="h-4 w-4" />
						</div>

						<vs-dropdown-menu>
							<vs-dropdown-item>
								<span class="flex items-center">
									<feather-icon icon="TrashIcon" svgClasses="h-4 w-4" class="mr-2" />
									<span>Delete</span>
								</span>
							</vs-dropdown-item>

							<vs-dropdown-item>
								<span class="flex items-center">
									<feather-icon icon="ArchiveIcon" svgClasses="h-4 w-4" class="mr-2" />
									<span>Archive</span>
								</span>
							</vs-dropdown-item>

							<vs-dropdown-item>
								<span class="flex items-center">
									<feather-icon icon="FileIcon" svgClasses="h-4 w-4" class="mr-2" />
									<span>Print</span>
								</span>
							</vs-dropdown-item>

							<vs-dropdown-item>
								<span class="flex items-center">
									<feather-icon icon="SaveIcon" svgClasses="h-4 w-4" class="mr-2" />
									<span>Another Action</span>
								</span>
							</vs-dropdown-item>
						</vs-dropdown-menu>
					</vs-dropdown>

					<!-- ADD NEW -->
					<div
						class="p-3 mb-4 mr-4 rounded-lg cursor-pointer flex items-center justify-between text-lg font-medium text-base text-primary border border-solid border-primary"
						@click="addNewData"
					>
						<feather-icon icon="PlusIcon" svgClasses="h-4 w-4" />
						<span class="ml-2 text-base text-primary">Add New</span>
					</div>
				</div>

				<!-- ITEMS PER PAGE -->
				<vs-dropdown vs-trigger-click class="cursor-pointer mb-4 mr-4">
					<div
						class="p-4 border border-solid d-theme-border-grey-light rounded-full d-theme-dark-bg cursor-pointer flex items-center justify-between font-medium"
					>
						<span
							class="mr-2"
						>{{ currentPage * itemsPerPage - (itemsPerPage - 1) }} - {{ products.length - currentPage * itemsPerPage > 0 ? currentPage * itemsPerPage : products.length }} of {{ queriedItems }}</span>
						<feather-icon icon="ChevronDownIcon" svgClasses="h-4 w-4" />
					</div>
					<!-- <vs-button class="btn-drop" type="line" color="primary" icon-pack="feather" icon="icon-chevron-down"></vs-button> -->
					<vs-dropdown-menu>
						<vs-dropdown-item @click="itemsPerPage=4">
							<span>4</span>
						</vs-dropdown-item>
						<vs-dropdown-item @click="itemsPerPage=10">
							<span>10</span>
						</vs-dropdown-item>
						<vs-dropdown-item @click="itemsPerPage=15">
							<span>15</span>
						</vs-dropdown-item>
						<vs-dropdown-item @click="itemsPerPage=20">
							<span>20</span>
						</vs-dropdown-item>
					</vs-dropdown-menu>
				</vs-dropdown>
			</div>

			<template slot="thead">
				<vs-th>Image</vs-th>
				<vs-th sort-key="sales">sales</vs-th>
				<vs-th sort-key="title">Title</vs-th>
				<vs-th sort-key="seller">Seller</vs-th>
				<!-- <vs-th sort-key="reviews">reviews</vs-th>
				<vs-th sort-key="sellerItemRevision">Revision</vs-th>
				<vs-th sort-key="popularity">feedback%</vs-th>
				<vs-th sort-key="order_status">feedback</vs-th>-->
				<vs-th sort-key="price">Price</vs-th>
				<!-- <vs-th sort-key>Location</vs-th> -->
				<vs-th>Action</vs-th>
			</template>

			<template slot-scope="{data}">
				<tbody>
					<vs-tr :data="tr" :key="indextr" v-for="(tr, indextr) in data">
						<vs-td class="img-container">
							<img :src="tr.pic_url" class="product-img" />
						</vs-td>
						<vs-td>
							<p class="product-price">{{ tr.sales }}</p>
						</vs-td>
						<vs-td>
							<a :href="`${tr.detail_url}`" target="_blank">
								<p class="product-name font-medium truncate">{{ tr.title }}</p>
							</a>
						</vs-td>

						<vs-td>
							<!-- <a :href="`https:\/\/www.ebay.com\/usr\/${tr.seller.username}`" target="_blank"> -->
							<p class="product-category">{{ tr.seller_nick}}</p>
							<!-- </a> -->
						</vs-td>
						<!-- <vs-td>
							<p>
								{{tr.item_details.Reviews.reviewCount}}
								<vs-progress
									:percent="Number(tr.item_details.Reviews.averageRating)*20"
									:color="getPopularityColor(Number(tr.item_details.Reviews.averageRating)*20)"
									class="shadow-md"
								/>
							</p>
						</vs-td>-->
						<!-- <vs-td> 
							<p class="product-category">{{ tr.item_details.sellerItemRevision}}</p> 
						</vs-td>-->
						<!-- <vs-td>
							<vs-progress
								:percent="Number(tr.seller.feedbackPercentage)"
								:color="getPopularityColor(Number(tr.seller.feedbackPercentage))"
								class="shadow-md"
							/>
						</vs-td>
						<vs-td>
							<vs-chip class="product-order-status">{{ tr.seller.feedbackScore}}</vs-chip>
						</vs-td>-->

						<vs-td>
							<p class="product-price">${{ tr.price }}</p>
						</vs-td>

						<!-- <vs-td>
							<p
								class="product-price"
							>{{ tr.item_details.location.stateOrProvince }},{{tr.item_details.location.city}}</p>
						</vs-td>-->

						<vs-td class="whitespace-no-wrap">
							<feather-icon
								icon="EditIcon"
								svgClasses="w-5 h-5 hover:text-primary stroke-current"
								@click.stop="editData(tr)"
							/>
						</vs-td>
					</vs-tr>
				</tbody>
			</template>
		</vs-table>
	</div>
</template>

    <script>
	import DataViewSidebar from "./DataViewSidebar.vue";
	import StatisticsCardLine from "@/components/statistics-cards/StatisticsCardLine.vue";
	// import moduleDataList from "@/store/data-list/moduleDataList.js";

	export default {
		components: {
			DataViewSidebar,
			StatisticsCardLine
		},
		data() {
			return {
				// Area charts
				subscribersGained: {},
				revenueGenerated: {},
				quarterlySales: {},
				ordersRecevied: {},

				// Line Charts
				siteTraffic: {},
				activeUsers: {},
				newsletter: {},
				selected: [],
				itemsPerPage: 4,
				isMounted: false,
				addNewDataSidebar: false,
				sidebarData: {}
			};
		},

		created() {
			// Subscribers gained
			this.$http
				.get("/api/card/card-statistics/subscribers")
				.then(response => {
					this.subscribersGained = response.data;
				})
				.catch(error => {
					console.log(error);
				});

			// Revenue Generated
			this.$http
				.get("/api/card/card-statistics/revenue")
				.then(response => {
					this.revenueGenerated = response.data;
				})
				.catch(error => {
					console.log(error);
				});

			// Sales
			this.$http
				.get("/api/card/card-statistics/sales")
				.then(response => {
					this.quarterlySales = response.data;
				})
				.catch(error => {
					console.log(error);
				});

			// Orders
			this.$http
				.get("/api/card/card-statistics/orders")
				.then(response => {
					this.ordersRecevied = response.data;
				})
				.catch(error => {
					console.log(error);
				});

			// Site Traffic gained
			this.$http
				.get("/api/card/card-statistics/site-traffic")
				.then(response => {
					this.siteTraffic = response.data;
				})
				.catch(error => {
					console.log(error);
				});

			// Active Users
			this.$http
				.get("/api/card/card-statistics/active-users")
				.then(response => {
					this.activeUsers = response.data;
				})
				.catch(error => {
					console.log(error);
				});

			// Site Traffic gained
			this.$http
				.get("/api/card/card-statistics/newsletter")
				.then(response => {
					this.newsletter = response.data;
				})
				.catch(error => {
					console.log(error);
				});
		},
		computed: {
			currentPage() {
				if (this.isMounted) {
					return this.$refs.table.currentx;
				}
				return 0;
			},
			total_listings() {
				if (this.isMounted) {
					return this.products.length;
				}
				return 0;
			},
			search_keyword() {
				return this.$store.state.products.search_keyword;
			},
			earn() {
				var earns = 0;
				if (this.isMounted) {
					for (let i = 0; i < this.products.length; i++) {
						earns += Number(this.products[i].sales) * this.products[i].price;
					}
					return "$" + parseInt(earns * 100) / 100;
				}
				return "$" + earns;
			},
			average_price() {
				var average = 0;
				if (this.isMounted) {
					for (let i = 0; i < this.products.length; i++) {
						average += Number(this.products[i].price);
					}
					return "$" + parseInt((average / this.products.length) * 100) / 100;
				}
				return "$" + average;
			},
			successful_listings() {
				var list_persent = 0;
				if (this.isMounted) {
					for (let i = 0; i < this.products.length; i++) {
						list_persent += this.products[i].sales ? 1 : 0;
					}
					return (Number(list_persent) / this.products.length) * 100 + "%";
				}
				return list_persent;
			},
			sold_items() {
				var sold = 0;
				if (this.isMounted) {
					for (let i = 0; i < this.products.length; i++) {
						sold += Number(this.products[i].sales);
					}
					return sold;
				}
				return sold;
			},
			products() {
				return this.$store.state.products.alianalytic_items;
			},
			queriedItems() {
				return this.$refs.table
					? this.$refs.table.queriedResults.length
					: this.products.length;
			}
		},
		methods: {
			addNewData() {
				this.sidebarData = {};
				this.toggleDataSidebar(true);
			},
			deleteData(id) {
				this.$store.dispatch("dataList/removeItem", id).catch(err => {
					console.error(err);
				});
			},
			editData(data) {
				// this.sidebarData = JSON.parse(JSON.stringify(this.blankData))
				this.sidebarData = data;
				this.toggleDataSidebar(true);
			},
			getOrderStatusColor(status) {
				if (status === "on_hold") return "warning";
				if (status === "delivered") return "success";
				if (status === "canceled") return "danger";
				return "primary";
			},
			getPopularityColor(num) {
				if (num > 99) return "success";
				if (num > 95) return "primary";
				if (num >= 80) return "warning";
				if (num < 80) return "danger";
				return "primary";
			},
			toggleDataSidebar(val = false) {
				this.addNewDataSidebar = val;
			}
		},
		created() {
			// if (!moduleDataList.isRegistered) {
			// 	this.$store.registerModule("dataList", moduleDataList);
			// 	moduleDataList.isRegistered = true;
			// }
			// this.$store.dispatch("dataList/fetchDataListItems");
		},
		mounted() {
			this.isMounted = true;
		}
	};
</script>

    <style lang="scss">
	#data-list-thumb-view {
		.vs-con-table {
			.product-name {
				max-width: 23rem;
			}

			.vs-table--header {
				display: flex;
				flex-wrap: wrap-reverse;
				margin-left: 1.5rem;
				margin-right: 1.5rem;
				> span {
					display: flex;
					flex-grow: 1;
				}

				.vs-table--search {
					padding-top: 0;

					.vs-table--search-input {
						padding: 0.9rem 2.5rem;
						font-size: 1rem;

						& + i {
							left: 1rem;
						}

						&:focus + i {
							left: 1rem;
						}
					}
				}
			}

			.vs-table {
				border-collapse: separate;
				border-spacing: 0 1.3rem;
				padding: 0 1rem;

				tr {
					box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.05);
					td {
						padding: 10px;
						&:first-child {
							border-top-left-radius: 0.5rem;
							border-bottom-left-radius: 0.5rem;
						}
						&:last-child {
							border-top-right-radius: 0.5rem;
							border-bottom-right-radius: 0.5rem;
						}
						&.img-container {
							// width: 1rem;
							// background: #fff;

							span {
								display: flex;
								justify-content: flex-start;
							}

							.product-img {
								height: 110px;
								max-width: 100px;
							}
						}
					}
					td.td-check {
						padding: 20px !important;
					}
				}
			}

			.vs-table--thead {
				th {
					padding-top: 0;
					padding-bottom: 0;

					.vs-table-text {
						text-transform: uppercase;
						font-weight: 600;
					}
				}
				th.td-check {
					padding: 0 15px !important;
				}
				tr {
					background: none;
					box-shadow: none;
				}
			}

			.vs-table--pagination {
				justify-content: center;
			}
		}
	}
</style>
