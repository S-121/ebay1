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
              <b>English Webinars</b>
            </h4>
            <div class="embed-responsive embed-responsive-16by9">
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/380662436"
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
                      <h2 class="wt1">NO. 22</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />17/07/2019
                      </p>
                      <p>Onboarding Journey Webinar</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/373071260"
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
                      <h2 class="wt1">NO. 21</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />26/10/2019
                      </p>
                      <p>How to Start Dropshipping on eBay | Aliexpress to eBay Dropshipping</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/373075320"
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
                      <h2 class="wt1">NO. 20</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />01/10/2019
                      </p>
                      <p>eBay Product Research | $11,000/month Seller Method Revealed!</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/355940197"
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
                      <h2 class="wt1">NO. 19</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />09/08/2019
                      </p>
                      <p>eBay Dropshipping | 2 revolutionary tools to scale your Business faster</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/350039462"
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
                      <h2 class="wt1">NO. 18</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />21/07/2019
                      </p>
                      <p>Find Hot Items To Sell From Ali Express</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/312904043"
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
                      <h2 class="wt1">NO. 17</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />22/01/2019
                      </p>
                      <p>How to Write Ads and Landing Pages That Make People Buy - In under 3 minutes</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/312719269"
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
                      <h2 class="wt1">NO. 16</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />21/01/2019
                      </p>
                      <p>Seven Principles of Success on Instagram with Ori Peretz</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/313376622"
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
                      <h2 class="wt1">NO. 15</h2>
                      <h3 class="wt2">ZIK Webinar</h3>
                      <br />
                      <vs-divider></vs-divider>
                    </div>
                    <div class="webinartext">
                      <p class="webinar-date">
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />17/01/2019
                      </p>
                      <p>Advanced Facebook Ads Strategies with Nitish S Dhiman</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/311889707"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />16/01/2019
                      </p>
                      <p>The basics of Facebook ads with Asaf Galon</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/311439526"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />14/01/2019
                      </p>
                      <p>ZIK Funnel launch webinar - sales funnels for your eBay listings</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/286327089"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />22/08/2018
                      </p>
                      <p>Scale your eBay business with ZIK PRO.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/280173705"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />12/07/2018
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
                      src="https://player.vimeo.com/video/277058696"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />24/06/2018
                      </p>
                      <p>
                        Niche research in Aliexpress.
                        <br />
                        <br />Special link for the bonuses in the cashback site (8% on AliExpress instead of 7%, and 7% on Banggood instead of 4%)
                        <router-link
                          to="https://www.simplybestcoupons.com/?refid=72432"
                          style="color:red;"
                        >https://www.simplybestcoupons.com/?refid=72432</router-link>
                        <br />
                        <br />If you are interested in learning more about the situation of the eCommerce today, and about the options in sourcing from china, I invite you to Nahar's FREE webinar here:
                        <router-link
                          to="https://events.genndi.com/register/169105139238472586/d2afd382a8"
                          style="color:red;"
                        >https://events.genndi.com/register/169105139238472586/d2afd382a8</router-link>
                        <br />
                        <br />You can also watch it in our China Master Class sales page here:
                        <router-link
                          to="https://chinamasterclass.guru.academy/sale-new"
                          style="color:red;"
                        >https://chinamasterclass.guru.academy/sale-new</router-link>
                      </p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/274029668"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />07/06/2018
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
                      src="https://player.vimeo.com/video/273282467"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />02/06/2018
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
                      src="https://player.vimeo.com/video/271634487"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />22/05/2018
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
                      src="https://player.vimeo.com/video/238919578"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />15/10/2017
                      </p>
                      <p>Market research practice in US market and UK market</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/235599374"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />24/09/2017
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
                      src="https://player.vimeo.com/video/229677363"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />10/08/2017
                      </p>
                      <p>In Webinar #4 you’ll learn more about market research, how to use the manual and bulk scanner, we will learn how to make more profits, and lots of market research practices</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/223425235"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />26/06/2017
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
                      src="https://player.vimeo.com/video/212391655"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />07/04/2017
                      </p>
                      <p>In Webinar No.2 we will learn about work structure, how to save time, how to follow competitors, we will also learn the Art of Market Research, product and pricing plan for improving profitability.</p>
                    </div>
                  </div>
                </vs-col>
              </vs-row>
              <vs-row vs-justify="center">
                <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="7">
                  <div class="childcontrol">
                    <iframe
                      src="https://player.vimeo.com/video/199028451"
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
                        <feather-icon icon="CalendarIcon" class="inline-block mr-2" />10/01/2017
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