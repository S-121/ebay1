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
            <h2>פרק 4</h2>
            <h4>איך מוצאים נישה</h4>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe
                src="https://player.vimeo.com/video/247902991"
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
                  <b>1 פרק</b>
                  <p style="color:black;">
                    <font size="2">מבוא</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link style="color:black;" to="/academy/hebrewcourse">ברוכים הבאים לקורס</router-link>
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
                      to="/child_hebrewcourse/setup_account"
                    >הגדרות נכונות</router-link>
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
                      to="/child_hebrewcourse/ebay_algorithm"
                    >איך מנוע החיפוש של איביי עובד</router-link>
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
                      to="/child_hebrewcourse/retails_sales"
                    >אנחנו סוחרים לפני הכל</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>2 פרק</b>
                  <p style="color:black;">
                    <font size="2">סטטיסטיקות</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_hebrewcourse/average_selling_price"
                    >קריאת נתונים, סייל טרו, יחס הצלחה, מחיר ממוצע</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>3 פרק</b>
                  <p style="color:black;">
                    <font size="2">מעקב אחרי מוכרים</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_hebrewcourse/suitable_competitors"
                    >איך מוצאים מוכרים למעקב</router-link>
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
                      to="/child_hebrewcourse/your_competitors"
                    >איך מוציאים מידע רלוונטי מהמוכרים</router-link>
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
                      to="/child_hebrewcourse/high_profit_items"
                    >איך למצוא מוצרים אצל מוכרים</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>4 פרק</b>
                  <p style="color:black;">
                    <font size="2">מחקר נישות</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_hebrewcourse/uncover"
                    >איך מוצאים נישה</router-link>
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
                      to="/child_hebrewcourse/sellers"
                    >איך למצוא את המוכרים הטובים ביותר דרך הנישה</router-link>
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
                      to="/child_hebrewcourse/discover"
                    >איך למצוא הזדמנויות מכירה בנישה שמצאנו</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>5 פרק</b>
                  <p style="color:black;">
                    <font size="2">איך למצוא מוצרים למכירה אצל הספקים</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_hebrewcourse/suppliers"
                    >איך מוצאים מוצר אצל הספק ואיך קובעים את ערך השוק שלו</router-link>
                  </vs-col>
                </vs-row>
                <vs-divider></vs-divider>
                <br />
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link style="color:black;" to="/child_hebrewcourse/intuition">אינטואיציה</router-link>
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
                      to="/child_hebrewcourse/practice"
                    >תרגול מלא של רצף העבודה ותהליך מציאת המוצרים</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>6 פרק</b>
                  <p style="color:black;">
                    <font size="2">אומנות חקר מילות המפתח ובנית הכותרות</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_hebrewcourse/generic"
                    >למה בכלל עושים חקר מילות מפתח</router-link>
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
                      to="/child_hebrewcourse/indepth_practice"
                    >תרגול בניית כותרות מעמיק</router-link>
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
                      to="/child_hebrewcourse/quick_practice"
                    >בניית כותרות תרגול מהיר</router-link>
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
                      to="/child_hebrewcourse/item_specifics"
                    >חשיבות מילות המפתח באייטם ספיציפיק</router-link>
                  </vs-col>
                </vs-row>
              </vs-collapse-item>
              <vs-collapse-item>
                <div style="color:red;" slot="header">
                  <b>7 פרק</b>
                  <p style="color:black;">
                    <font size="2">חקר קטגוריות וחיזוי טרנדים</font>
                  </p>
                </div>
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <feather-icon icon="YoutubeIcon" />
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <router-link
                      style="color:black;"
                      to="/child_hebrewcourse/category_research"
                    >חיזוי טרנדים ומציאת נישות עם גוגל טרנד</router-link>
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
                      to="/child_hebrewcourse/google_trends"
                    >חקר קטגוריות מקור למציאת נישות ומוצרים</router-link>
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