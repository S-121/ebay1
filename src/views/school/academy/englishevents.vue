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
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="10">
      <div class="control">
        <div class="videowrapper">
          <div id="lesson1" class="tab-content">
            <h4>
              <b>English Events</b>
            </h4>
            <div class="embed-responsive embed-responsive-16by9">
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/373066795"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">10.10.2019</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>Find High Ticket Drop Shipping Products to Sell on eBay</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/317956252"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">18.02.2019</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>eBay Q&A 2019, 18th Feb with Nahar Geva</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/316966956"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">31.01.2019</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>Find Trending and Niche Products to Sell on eBay and Promote Them on Social Media</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/316790422"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">23.01.2019</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>How Tom Kubala makes $100k+/Mo on eBay with ZIK Pro</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/316777710"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">18.01.2019</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>Dropshipping in 2019 - Important Update</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://www.facebook.com/v2.12/plugins/video.php?app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df34be36ee282e9c%26domain%3Dacademy.zikanalytics.com%26origin%3Dhttps%253A%252F%252Facademy.zikanalytics.com%252Ff2cccd83b2b2464%26relation%3Dparent.parent&container_width=731&to=https%3A%2F%2Fwww.facebook.com%2FZIKAnalaytics%2Fvideos%2F2044269655794245&locale=en_US&sdk=joey&width=960"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">15.02.2018</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>Market Research Live Practice</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://www.facebook.com/v2.12/plugins/video.php?app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df5d6555b4b0f64%26domain%3Dacademy.zikanalytics.com%26origin%3Dhttps%253A%252F%252Facademy.zikanalytics.com%252Ff2cccd83b2b2464%26relation%3Dparent.parent&container_width=731&to=https%3A%2F%2Fwww.facebook.com%2FZIKAnalaytics%2Fvideos%2F2039437102944167&locale=en_US&sdk=joey&width=960"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">01.02.2018</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>How to increase your sales using phrases with high conversion rate with Chris Garret professional copywriter</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://www.facebook.com/v2.12/plugins/video.php?app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df3c1ea117ba106%26domain%3Dacademy.zikanalytics.com%26origin%3Dhttps%253A%252F%252Facademy.zikanalytics.com%252Ff2cccd83b2b2464%26relation%3Dparent.parent&container_width=731&to=https%3A%2F%2Fwww.facebook.com%2FZIKAnalaytics%2Fvideos%2F2028038250750719&locale=en_US&sdk=joey&width=960"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">09.01.2018</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>The law of big numbers strategy and working with bulk</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://www.facebook.com/v2.12/plugins/video.php?app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df2ceb5aac6fa19%26domain%3Dacademy.zikanalytics.com%26origin%3Dhttps%253A%252F%252Facademy.zikanalytics.com%252Ff1b4fe85ff292f%26relation%3Dparent.parent&container_width=731&to=https%3A%2F%2Fwww.facebook.com%2FZIKAnalaytics%2Fvideos%2F2022865837934627&locale=en_US&sdk=joey&width=960"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">26.12.2017</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>Goncalo’s success story</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://www.facebook.com/v2.12/plugins/video.php?app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df35f1b53fd45208%26domain%3Dacademy.zikanalytics.com%26origin%3Dhttps%253A%252F%252Facademy.zikanalytics.com%252Ff14928c3cecfc34%26relation%3Dparent.parent&container_width=731&to=https%3A%2F%2Fwww.facebook.com%2FZIKAnalaytics%2Fvideos%2F2017989915088886&locale=en_US&sdk=joey&width=960"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">20.12.2017</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>The 5 biggest mistakes that eBay sellers make and how to avoid them</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://www.facebook.com/v2.12/plugins/video.php?app_id=&channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FFdM1l_dpErI.js%3Fversion%3D42%23cb%3Df12a78590b80728%26domain%3Dacademy.zikanalytics.com%26origin%3Dhttps%253A%252F%252Facademy.zikanalytics.com%252Ff14928c3cecfc34%26relation%3Dparent.parent&container_width=731&to=https%3A%2F%2Fwww.facebook.com%2FZIKAnalaytics%2Fvideos%2F1995178647370013&locale=en_US&sdk=joey&width=960"
                      width="100%"
                      height="420px"
                      allowfullscreen="1"
                      data-ready="true"
                    ></iframe>
                  </div>
                </vs-col>
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
                  <div class="childcontrol">
                    <div class="webinartitle">
                      <h2 class="wt1">24.10.2017</h2>
                      <br />
                      <br />
                    </div>
                    <div class="webinartext">
                      <p>Shezzy’s success story</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
            </div>
          </div>
        </div>
      </div>
    </vs-col>
    <!-- <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4">
      <div class="control">
        <vs-card class="cardx" fixedHeight>
          <div>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
          </div>
        </vs-card>
      </div>
    </vs-col>-->
  </vs-row>
</template>
<style>
.control {
  padding: 5px;
}
.childcontrol {
  padding: 10px;
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
.videowrapper .tab-content h4 {
  font-size: 1.6rem;
  font-family: mtsItalic, "Montserrat", sans-serif;
  padding: 10px 0;
  margin: 5px 5px 10px 5px;
  border-bottom: 1px solid #6666;
  color: #6d6d6d;
}
.webinartitle .wt1:before {
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
.webinartitle .wt1,
.wt2 {
  display: inline-block;
  margin-right: 10px;
  font-size: 2.2rem;
  font-family: mtsBold, "Montserrat", sans-serif;
  position: relative;
}
.webinarslot .webinartext {
  margin-top: 15px;
  padding: 0 10px;
}
p {
  display: block;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
}
.webinarslot .webinartext p {
  font-size: 1.4rem;
  font-family: mtsRegular, "Montserrat", sans-serif;
  color: #6d6d6d;
  word-break: break-word;
}
</style>