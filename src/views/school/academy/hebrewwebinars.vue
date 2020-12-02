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
              <b>Hebrew Webinars</b>
            </h4>
            <div class="embed-responsive embed-responsive-16by9">
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/372816963"
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
                      <h2 class="wt1">NO. 14</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />28/10/2019
                      </p>
                      <p>דרופשיפינג מאלי אקספרס לאיביי | המדריך המלא</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/349441587"
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
                      <h2 class="wt1">NO. 13</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />18/07/2019
                      </p>
                      <p>וובינר מציאת מוצרים מנצחים מאלי אקספרס</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/319284793"
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
                      <h2 class="wt1">NO. 12</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />21/02/2019
                      </p>
                      <p>שיווק מוצרי האיביי שלנו בעזרת זיק פנל</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/279054524"
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
                      <h2 class="wt1">NO. 11</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />08/07/2018
                      </p>
                      <p>Promotions and cross sales.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/275777242"
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
                      <h2 class="wt1">NO. 10</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />17/06/2018
                      </p>
                      <p>
                        Niche research in Aliexpress.
                        <br />
                        <br />דף הסבר על מסלול הצ'יינה מאסטר קלאס -
                        <router-link
                          to="http://2018.guru.academy/chinamasterclass"
                          style="color:red;"
                        >http://2018.guru.academy/chinamasterclass</router-link>
                        <br />
                        <br />לינק להטבה המיוחדת באתר סימפלי -
                        <router-link
                          to="https://www.simplybestcoupons.com/?refid=72432"
                          style="color:red;"
                        >https://www.simplybestcoupons.com/?refid=72432</router-link>
                        <br />
                        <br />(הרשמה דרך הלינק תיתן אחוזי קשבק גבוהים יותר בבנגגוד & ובאליאקספרס)
                      </p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/273322515"
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
                      <h2 class="wt1">NO. 9</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />31/05/2018
                      </p>
                      <p>How to find and contact suppliers on Alibaba.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/271833863"
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
                      <h2 class="wt1">NO. 8</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />24/05/2018
                      </p>
                      <p>Niche research for building niche store.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/271456028"
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
                      <h2 class="wt1">NO. 7</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />17/05/2018
                      </p>
                      <p>Who moved my cheese? eBay changes and how to adapt.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/234506839"
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
                      <h2 class="wt1">NO. 6</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />18/09/2017
                      </p>
                      <p>How to research and find HOT items for Halloween, Christmas and Q4</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/229089515"
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
                      <h2 class="wt1">NO. 5</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />08/08/2017
                      </p>
                      <p>In this webinar we will practice the art of market research and we will write an example for how to contact private suppliers.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/224764754"
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
                      <h2 class="wt1">NO. 4</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />07/08/2017
                      </p>
                      <p>In this webinar we will go through the new features for vesion 4, we will learn how to build our store to be profitable and how to create SEO titles.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/216872779"
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
                      <h2 class="wt1">NO. 3</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />06/05/2017
                      </p>
                      <p>In this Webinar we will practice the art of market research, we will practice step after step how to do it and how to increase profit.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/197217870"
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
                      <h2 class="wt1">NO. 2</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />25/12/2016
                      </p>
                      <p>In Webinar No.2 we will practice the Art of market research , how to navigate between sellers and products so we can every day find at list 20 items.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/197282608"
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
                      <h2 class="wt1">NO. 1</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />06/12/2016
                      </p>
                      <p>In Webinar No.1 we will learn about using the software , understanding what is a good market, niche and products. We will aslo works with Amazon as supplier so you can learn the method I have developed for sourcing and choosing items.</p>
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