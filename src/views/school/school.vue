<template lang="html">
  <div class="">
    <vs-tabs>
      <vs-tab label="Academy">
        <div class="con-tab-ejemplo">
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
              <div class="control">
                <vs-navbar collapse v-model="activeItem" class="nabarx">
                  <vs-navbar-item index="0" style="background-color:cyan;">
                    <router-link to="#"><b>Free Courses</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="1">
                    <router-link to="/academy/englishcourse"><b>Market Research (English)</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="2">
                    <router-link to="/academy/hebrewcourse"><b>Market Research (Hebrew)</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="3">
                    <router-link to="/academy/zikprocourse"><b>ZIK Pro Course</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="4">
                    <router-link to="/academy/facebookads"><b>Facebook Ads Bootcamp</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="5" style="background-color:cyan;">
                    <router-link to="#"><b>Free Webinar</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="6">
                    <router-link to="/academy/englishwebinars"><b>English Webinar</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="7">
                    <router-link to="/academy/hebrewwebinars"><b>Hebrew Webinar</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="8" style="background-color:cyan;">
                    <router-link to="#"><b>Live Events</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="9">
                    <router-link to="/academy/englishevents"><b>English Events</b></router-link>
                  </vs-navbar-item>
                  <vs-navbar-item index="10">
                    <router-link to="/academy/hebrewevents"><b>Hebrew Events</b></router-link>
                  </vs-navbar-item>
                </vs-navbar>
              </div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
              <div class="control">
                <vs-card class="cardx" fixedHeight>
                  <div slot="header">
                    <h3>My Training Feed</h3>
                  </div>
                  <div style="text-align:center">
                    <h3>
                      <b>The latest webinar: Find AliExpress Hot Products</b>
                    </h3>
                    <br />
                    <iframe
                      style="width:450px;height:250px;"
                      src="https://www.youtube.com/embed/qQMve41CphU"
                    ></iframe>
                    <vs-divider></vs-divider>
                    <div class="UI-cardBlock">
                      <h2 class="text-center tfh2">What do you need to help with?</h2>
                      <br />
                      <br />
                      <div class="trainingFeed">
                        <router-link
                          to="/school"
                          class="UI-feedBtn currentFeedVid"
                          data-video="https://www.youtube.com/embed/qQMve41CphU"
                          data-title="The latest webinar: Find AliExpress Hot Products"
                        >
                          <font color="black">
                            <b>The latest webinar: Find AliExpress Hot Products</b>
                          </font>
                          <div class="UI-titleIcon">
                            <feather-icon icon="PlayIcon" svgClasses="fill-current text-danger" />
                          </div>
                        </router-link>
                        <router-link class="UI-feedBtn" to="/ali_hot_items">
                          <font color="black">
                            <b>Find Hot Items to Sell from Ali Express</b>
                          </font>
                          <div class="UI-titleIcon">
                            <feather-icon icon="PlayIcon" svgClasses="fill-current text-danger" />
                          </div>
                        </router-link>
                        <router-link
                          class="UI-feedBtn"
                          data-video="https://player.vimeo.com/video/346336062"
                          to="/amazon_hot_items"
                          data-title="Find Hot Items to Dropship from Amazon and other US retailers"
                        >
                          <font color="black">
                            <b>Find Hot Items to Dropship from Amazon and other US retailers</b>
                          </font>
                          <div class="UI-titleIcon">
                            <feather-icon icon="PlayIcon" svgClasses="fill-current text-danger" />
                          </div>
                        </router-link>
                        <router-link
                          class="UI-feedBtn feedBtnLink"
                          to="/academy/englishcourse"
                          onclick="event.stopPropagation();"
                        >
                          <font color="black">
                            <b>Start the full ZIK market research course</b>
                          </font>
                          <div class="UI-titleIcon">
                            <feather-icon icon="SkipForwardIcon" svgClasses="fill-current text-danger" />
                          </div>
                        </router-link>
                      </div>
                    </div>
                  </div>
                </vs-card>
              </div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="5">
              <div class="control">
                <vs-card class="cardx" fixedHeight>
                  <div slot="header">
                    <h1 style="text-align:center;">Welcome to ZIK Academy</h1>
                  </div>
                  <div>
                    <span>
                      <h6>
                        <br />
                        <b>If you’ve just joined ZIK, welcome!</b>
                        <br />
                        <br />We recommend you start by watching our
                        <b>free market research course</b> that teaches you everything you need to know about using ZIK Analytics to build a profitable eBay store.
                        <br />
                        <br />Click
                        <a href style="color:blue;">here</a> (English) or
                        <a href style="color:blue;">here</a> (Hebrew) to get started.
                        <br />
                        <br />Our
                        <b>webinars</b>are longer, more detailed videos that are about very specific topics. When you watch these, we advise you get a pen and paper to take notes.
                        <br />
                        <br />To check out all our webinars, click
                        <a href style="color:blue;">here</a> (English) or
                        <a href style="color:blue;">here</a> (Hebrew)
                        <br />
                        <br />In the
                        <b>live events</b> we often introduce guest speakers to teach topics and answer your questions.
                        <br />
                        <br />To see the live events, click
                        <a href style="color:blue;">here</a> (English) or
                        <a href style="color:blue;">here</a> (Hebrew)
                        <br />
                        <br />Lastly, if you’re a member of ZIK Pro, you’ll want to check out the free
                        <b>ZIK Pro Course</b>
                        <a href style="color:blue;">here</a>.
                      </h6>
                    </span>
                  </div>
                </vs-card>
              </div>
            </vs-col>
          </vs-row>
        </div>
      </vs-tab>
      <vs-tab label="Tutoials">
        <div class="con-tab-ejemplo">
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Competitor Research</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Ali express competitor research
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/342467827" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Competitor Research
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/342468499" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Competitor research settings
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/342468489" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Save competitors to your watch list
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/342468451" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <br>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Product Research</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Wholesale supplier database
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/342468428" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Ali express product research
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/342468465" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Product Research
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344197891" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Save your Product Research Searches
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343411325" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Title Analytics
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343411357" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Price Analytics
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344197940" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <br>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Category Research</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Category Research
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343411408" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <br>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Store Analytics</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Connect your store analytics
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343411460" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Store analytics statistics
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344197959" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <br>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Manual scanner / Item finder</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Report Button
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343411470" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Red/Green button (Manual scanner)
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/290855411" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to create new folders
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343414293" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <br>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Settings and Billing</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Settings for UK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343435417" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Settings for USA
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343435417" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Settings for Germany
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/343435417" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to upgrade your subscription
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/290856760" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to download your invoices
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344197996" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to set up your account to find items on Walmart
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344198029" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Others</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to become a ZIK affiliate
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344198048" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to set up the break even
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344198073" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    Amazon France
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/307643652" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
          <br>
          <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
              <vs-card>
                <div>
                  <h5>Product Research Integrations</h5>
                </div>
              </vs-card>
            </vs-col>
          </vs-row>
          <vs-row>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate SkuFetch and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/404588350" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate SkuGrid and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/395400659" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate AutoDS and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/319768546" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate Salefreaks and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/296614089" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate Yaballe and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/291693180" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate DSM Tool and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/291692737" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="4"><div class="controol">
              <vs-card class="cardx" fixedHeight>
                <div slot="header">
                  <h3>
                    How to integrate DropShip Beast and ZIK
                  </h3>
                </div>
                <div>
                  <iframe width="100%" height="300px" src="https://player.vimeo.com/video/344046032" frameborder="0" allowfullscreen="" data-ready="true"></iframe>
                </div>
              </vs-card></div>
            </vs-col>
          </vs-row>
        </div>
      </vs-tab>
    </vs-tabs>
  </div>
</template>
<script>
export default {
  data: () => ({
    users: [
      {
        id: 1,
        name: "Leanne Graham",
        username: "Bret",
        email: "Sincere@april.biz",
        website: "hildegard.org"
      }
    ]
  })
};
</script>
<style>
.control {
  padding: 5px;
}
.UI-cardBlock {
  padding: 5px;
}
.UI-feedBtn {
  padding: 5px 20px !important;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 20px;
  margin: 25px 0;
  background: #f9f9f9;
  border-radius: 50px;
  border: 1px solid #f9f9f9;
  cursor: pointer !important;
}
.currentFeedVid {
  border: 1px solid #ff404f !important;
}
</style>
