<template>
  <vs-row vs-justify="center">
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="8">
      <vs-row>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="16">
          <div class="control">
            <vs-card class="cardx">
              <div slot="header">
                <h4>Sales & Revenue</h4>
              </div>
              <div>
                <vs-row class="control1">
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                    <div>
                      <p>Sell through</p>
                      <h2>0%</h2>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                    <div>
                      <p>Sell through</p>
                      <h2>0%</h2>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                    <div>
                      <p>Sell through</p>
                      <h2>0%</h2>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="16"></vs-col>
                </vs-row>
              </div>
            </vs-card>
          </div>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="16">
          <div class="control">
            <vs-card class="cardx">
              <div slot="header">
                <h4>Rush Day</h4>
              </div>
              <div>
                <!-- <div class="vx-col w-full md:w-2/3 lg:w-3/4">
                  <vx-card title="Sales" class="mb-base">
                    <template slot="actions">
                      <feather-icon icon="SettingsIcon" svgClasses="w-6 h-6 text-grey"></feather-icon>
                    </template>
                    <div slot="no-body" class="p-6 pb-0">
                      <vue-apex-charts
                        type="line"
                        height="266"
                        :options="analyticsData.salesLine.chartOptions"
                        :series="salesLine.series"
                      />
                    </div>
                  </vx-card>
                </div>-->
              </div>
            </vs-card>
          </div>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
          <div class="control">
            <vs-card class="cardx">
              <div slot="header">
                <h4>My Competitors</h4>
              </div>
              <div>
                <div class="UI-cardBlock">
                  <ul class="dsbCompetitors">
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=hupham14"
                        target="_blank"
                      >
                        <span>hupham14</span>
                        <span>5</span>
                        <span>ok</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=4u-getit"
                        target="_blank"
                      >
                        <span>4u-getit</span>
                        <span>5</span>
                        <span>HM</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=best_store4u"
                        target="_blank"
                      >
                        <span>best_store4u</span>
                        <span>5</span>
                        <span>
                          morooo
                          co
                        </span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=the-best4-you"
                        target="_blank"
                      >
                        <span>the-best4-you</span>
                        <span>4</span>
                        <span>2</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=best_offers_stores"
                        target="_blank"
                      >
                        <span>best_offers_stores</span>
                        <span>3</span>
                        <span>b</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=qzw_vision"
                        target="_blank"
                      >
                        <span>qzw_vision</span>
                        <span>3</span>
                        <span>airpods</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=bashkyw"
                        target="_blank"
                      >
                        <span>bashkyw</span>
                        <span>3</span>
                        <span>some</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=sunnystore2019"
                        target="_blank"
                      >
                        <span>sunnystore2019</span>
                        <span>2</span>
                        <span>2</span>
                      </router-link>
                    </li>
                    <li>
                      <router-link
                        to="/SearchCompetitor/Index?search=true&amp;Competitor=perfect_shop94"
                        target="_blank"
                      >
                        <span>perfect_shop94</span>
                        <span>2</span>
                        <span>1</span>
                      </router-link>
                    </li>
                  </ul>
                  <router-link class="dsbCompViewAll" to="/SearchCompetitor/ManageComptetitors">
                    <b>View All</b>
                  </router-link>
                </div>
              </div>
            </vs-card>
          </div>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
          <div class="control">
            <vs-card class="cardx">
              <div slot="header">
                <h4>Shortcuts & Support</h4>
              </div>
              <div>
                <div class="UI-cardBlock">
                  <ul class="dashboardShortcuts">
                    <li>
                      <router-link to="/Index/Tutorials">Software Tutorials</router-link>
                    </li>
                    <li>
                      <router-link
                        to="https://www.facebook.com/groups/1771512456504999/"
                        target="_blank"
                      >Facebook Group</router-link>
                    </li>
                    <li>
                      <router-link
                        to="https://www.youtube.com/channel/UC6RxjqZyhTKshYyBJcIIvPQ"
                        target="_blank"
                      >YouTube Channel</router-link>
                    </li>
                    <li>
                      <router-link
                        to="javascript:void(0)"
                        onclick="Intercom('show');"
                      >Need Help? Contact Us</router-link>
                    </li>
                    <vs-divider></vs-divider>
                    <li>
                      <router-link to="/Search/ManageSearches">My Searches</router-link>
                    </li>
                    <li>
                      <router-link to="/ItemManagement">Item Folders</router-link>
                    </li>
                  </ul>
                </div>
              </div>
            </vs-card>
          </div>
        </vs-col>
      </vs-row>
    </vs-col>
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4">
      <vs-row>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="16">
          <div class="control">
            <vs-card class="cardx">
              <div slot="header">
                <h4>eBay Weekly Trend</h4>
              </div>
              <div></div>
            </vs-card>
          </div>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="16">
          <div class="control">
            <vs-card class="cardx" style="text-align:center;">
              <div class="tranining">
                <h4>Get Product Research Training</h4>
              </div>
              <div class="tranining">
                <vs-button type="relief">Watch Webinar Now</vs-button>
              </div>
            </vs-card>
          </div>
        </vs-col>
        <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="16">
          <div class="control">
            <vs-card class="cardx">
              <div>
                <vs-table max-items="5" pagination :data="datas">
                  <template slot="thead">
                    <vs-th>eBay Weekly Best Sellers</vs-th>
                    <vs-th>
                      <feather-icon icon="GlobeIcon" />
                    </vs-th>
                    <vs-th>
                      <feather-icon icon="BarChart2Icon" />
                    </vs-th>
                    <vs-th>
                      <feather-icon icon="DollarSignIcon" />
                    </vs-th>
                  </template>

                  <template slot-scope="{data}">
                    <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                      <vs-td :data="data[indextr].seller">{{data[indextr].seller}}</vs-td>
                      <vs-td :data="data[indextr].country">{{data[indextr].country}}</vs-td>
                      <vs-td :data="data[indextr].sales">{{data[indextr].sales}}</vs-td>
                      <vs-td :data="data[indextr].price">{{data[indextr].price}}</vs-td>
                    </vs-tr>
                  </template>
                </vs-table>
              </div>
            </vs-card>
          </div>
        </vs-col>
      </vs-row>
    </vs-col>
  </vs-row>
</template>
<script>
export default {
  data: () => ({
    datas: [
      {
        sellers: "Brets",
        country: "UK",
        sales: "120",
        price: "15.8"
      },
      {
        sellers: "Bret",
        country: "US",
        sales: "130",
        price: "10.1"
      }
    ],
    alis: [
      {
        id: 1,
        name: "Leanne Graham",
        username: "Bret",
        email: "Sincere@april.biz",
        website: "hildegard.org"
      },
      {
        id: 2,
        name: "Ervin Howell",
        username: "Antonette",
        email: "Shanna@melissa.tv",
        website: "anastasia.net"
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
.control1 {
  padding: 5px;
}
.UI-cardBlock {
  padding: 15px;
}
.dsbCompetitors li {
  margin: 2px 0;
}
.dsbCompetitors li a {
  color: #adadad;
  padding: 3px;
  display: flex;
  align-items: center;
}
.dsbCompetitors li a span {
  flex: 1;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.dsbCompetitors li a span:last-child {
  text-align: center;
}
.dsbCompViewAll {
  display: block;
  text-align: center;
  margin-top: 15px;
  color: #012c41;
}
.dsbCompetitors li a span:nth-child(2) {
  flex: unset;
  width: 50px;
  margin: 0 10px;
}
.dashboardShortcuts li a {
  font-size: 16px;
  color: #adadad;
  margin: 4px 0;
  display: block;
}
.tranining {
  padding: 15px;
}
</style>