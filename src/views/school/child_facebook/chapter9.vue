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
          <div id="CHAPTER9" class="tab-content">
            <h2>CHAPTER 9</h2>
            <h4>Facebook Pixel</h4>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                src="https://player.vimeo.com/video/311179764"
                width="100%"
                height="440"
                allowfullscreen="1"
                data-ready="true"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="jz text-center">
          <router-link class="upToZP" to="https://zikfunnel.com/" target="_blank">
            <b>Join ZIK Funnel now</b>
          </router-link>
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
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link style="color:black;" to="/academy/facebookads">Introduction</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 2</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter2"
                    >Basics of Facebook marketing</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 3</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter3"
                    >Create your first business page</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 4</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter4"
                    >Design your logo and cover for free</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 5</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter5"
                    >Facebook ads manager</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 6</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter6"
                    >Create your first Traffic campaign Part 1</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 7</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter7"
                    >Create your first Traffic campaign Part 2</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 8</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter8"
                    >Read Facebook's data</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 9</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link style="color:black;" to="/child_facebook/chapter9">Facebook Pixel</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>CHAPTER 10</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/chapter10"
                    >Conversions - Add to cart</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>BONUS 1</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/bonus1"
                    >Install Facebook pixel helper Chrome extension</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>BONUS 2</b>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_facebook/bonus2"
                    >Example how the pixle should work</router-link>
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
.upToZP b {
  margin-top: 50px;
  border: 1px solid #06d058;
  background: transparent;
  color: #06d058;
  border-radius: 3px;
  padding: 10px 20px;
  font-family: mtsBold;
  transition: all 300ms ease;
}
.text-center {
  margin-top: 30px;
}
</style>