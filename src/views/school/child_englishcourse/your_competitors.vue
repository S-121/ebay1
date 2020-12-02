<template>
  <vs-row vs-justify="center">
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
      <div class="control">
        <vs-navbar collapse v-model="activeItem" class="nabarx">
          <vs-navbar-item index="0" style="background-color:cyan;">
            <router-link to="#">
              <b>Free Courses</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="1">
            <router-link to="/academy/englishcourse">
              <b>Market Research (English)</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="2">
            <router-link to="/academy/hebrewcourse">
              <b>Market Research (Hebrew)</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="3">
            <router-link to="/academy/zikprocourse">
              <b>ZIK Pro Course</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="4">
            <router-link to="/academy/facebookads">
              <b>Facebook Ads Bootcamp</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="5" style="background-color:cyan;">
            <router-link to="#">
              <b>Free Webinar</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="6">
            <router-link to="/academy/englishwebinars">
              <b>English Webinar</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="7">
            <router-link to="/academy/hebrewwebinars">
              <b>Hebrew Webinar</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="8" style="background-color:cyan;">
            <router-link to="#">
              <b>Live Events</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="9">
            <router-link to="/academy/englishevents">
              <b>English Events</b>
            </router-link>
          </vs-navbar-item>
          <vs-navbar-item index="10">
            <router-link to="/academy/hebrewevents">
              <b>Hebrew Events</b>
            </router-link>
          </vs-navbar-item>
        </vs-navbar>
      </div>
    </vs-col>
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
      <div class="control">
        <div class="videowrapper">
          <div id="lesson1" class="tab-content">
            <h2>Chapter 1</h2>
            <h4>Find relevant information from your competitors</h4>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                src="https://player.vimeo.com/video/255554639"
                width="100%"
                height="440"
                allowfullscreen="1"
                data-ready="true"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </vs-col>
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4">
      <div class="control">
        <vs-card class="cardx" fixedHeight>
          <div>
            <vs-collapse accordion>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 1</b>
                  <p style="color:black;">
                    <font size="2">Welcome to the zik Academy</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/academy/englishcourse"
                    >An introduction to the course</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/setup_account"
                    >How to get started and setup your account</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/ebay_algorithm"
                    >Learn how the eBay algorithm works</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/retails_sales"
                    >Basic rules of trading goods and retails sales</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 2</b>
                  <p style="color:black;">
                    <font size="2">Understanding Sales Statistics</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/average_selling_price"
                    >Understand your sell through rate, successful listing percentage and average selling price</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 3</b>
                  <p style="color:black;">
                    <font size="2">The Power of Competitor Research</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/suitable_competitors"
                    >Discover how to find suitable competitors</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/your_competitors"
                    >Find relevant information from your competitors</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/high_profit_items"
                    >Learn to use competitors to find high profit items</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 4</b>
                  <p style="color:black;">
                    <font size="2">Niche Research</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/uncover"
                    >How to uncover hot niches</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/sellers"
                    >Finding best sellers within a niche</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/discover"
                    >Discover hidden opportunities within niches</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 5</b>
                  <p style="color:black;">
                    <font size="2">Sourcing Items</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/suppliers"
                    >How to source items from suppliers</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/intuition"
                    >Using your intuition</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/practice"
                    >A full practice of finding items (from A to Z)</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 6</b>
                  <p style="color:black;">
                    <font size="2">The Art of SEO and Title Optimization</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/generic"
                    >Master SEO Keywords – Long Tail & Generic</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/indepth_practice"
                    >In-depth title building practice</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/quick_practice"
                    >on Quick title building practice</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/item_specifics"
                    >Optimizing the item specifics</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 7</b>
                  <p style="color:black;">
                    <font size="2">Category Research</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/category_research"
                    >Use the Category research tool to find products and niches</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_englishcourse/google_trends"
                    >Use Google Trends to find keywords and niches</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
            </vs-collapse>
          </div>
        </vs-card>
      </div>
    </vs-col>
  </vs-row>
</template>
<style>
.control {
  padding: 15px;
}
.videowrapper .tab-content h2 {
  color: #fff;
  font-family: mtsBold, "Montserrat", sans-serif;
  padding: 0 5px 0 10px;
  font-size: 2.1rem;
  position: relative;
  display: inline-block;
  text-transform: uppercase;
  z-index: 1;
}
.videowrapper .tab-content h2:before {
  content: "";
  background: #ff404e;
  height: calc(100% + 20px);
  width: calc(100% + 10px);
  position: absolute;
  top: -10px;
  left: -4px;
  z-index: -1;
  transform: rotate(-2deg);
}
.videowrapper .tab-content h4 {
  font-size: 1.6rem;
  font-family: mtsItalic, "Montserrat", sans-serif;
  padding: 10px 0;
  margin: 5px 5px 10px 5px;
  border-bottom: 1px solid #6666;
  color: #6d6d6d;
}
</style>