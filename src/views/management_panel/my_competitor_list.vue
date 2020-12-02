<template>
  <vs-row vs-justify="center">
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
      <div class="control">
        <vs-card class="cardx">
          <div slot="header">
            <h3>eBay Competitor List</h3>
          </div>
          <div>
            <vs-table max-items="7" pagination :data="ebays" search>
              <template slot="thead">
                <vs-th>No</vs-th>
                <vs-th>Store Name</vs-th>
                <vs-th>Your rating</vs-th>
                <vs-th>Comment</vs-th>
                <vs-th>Date Added</vs-th>
                <vs-th>Edit</vs-th>
                <vs-th>Delete</vs-th>
              </template>

              <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td :data="data[indextr].id">{{data[indextr].id}}</vs-td>
                  <vs-td :data="data[indextr].name">
                    <router-link to="/products/research">{{data[indextr].name}}</router-link>
                  </vs-td>
                  <vs-td :data="data[indextr].rating">{{data[indextr].rating}}</vs-td>
                  <vs-td :data="data[indextr].comment">{{data[indextr].comment}}</vs-td>
                  <vs-td :data="data[indextr].date">{{data[indextr].date}}</vs-td>
                  <vs-td>
                    <vs-button @click="popupActivo=true" v-on:click="edit(data[indextr].comment)">
                      <feather-icon icon="EditIcon" />
                    </vs-button>
                    <vs-popup class="holamundo" title="Edit competitor" :active.sync="popupActivo">
                      <p>Comment</p>
                      <div class="edit_modal">
                        <center>
                          <vs-textarea
                            width="300px"
                            name="text"
                            type="text"
                            class="inputx"
                            v-model="edits"
                          />
                        </center>
                      </div>
                      <p>Rating</p>
                      <vs-divider></vs-divider>
                      <div class="svg-star">
                        <div class="svg-star__stars">
                          <svg
                            v-for="num in (rating).times() /* This is awesome! */"
                            :key="num"
                            :class="{active: ratingSetValue > num /* index starts at 0 */}"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 19.481 19.481"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            enable-background="new 0 0 19.481 19.481"
                            @click="starClick(num)"
                            style="width:30px; padding:2px;"
                          >
                            <g>
                              <path
                                d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z"
                              />
                            </g>
                          </svg>
                        </div>
                      </div>
                      <br />
                      <vs-button class="save-button" v-on:click="save()">Save Changes</vs-button>
                    </vs-popup>
                  </vs-td>
                  <vs-td>
                    <vs-button color="danger" v-on:click="del1(data[indextr])">
                      <feather-icon icon="Trash2Icon" />
                    </vs-button>
                  </vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </vs-card>
      </div>
    </vs-col>
    <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
      <div class="control">
        <vs-card class="cardx">
          <div slot="header">
            <h3>Ali Express Competitor List</h3>
          </div>
          <div>
            <vs-table max-items="7" pagination :data="alis" search>
              <template slot="thead">
                <vs-th>No</vs-th>
                <vs-th>Store Name</vs-th>
                <vs-th>Your rating</vs-th>
                <vs-th>Comment</vs-th>
                <vs-th>Date Added</vs-th>
                <vs-th>Edit</vs-th>
                <vs-th>Delete</vs-th>
              </template>

              <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td :data="data[indextr].id">
                    <router-link to="/products/research">{{data[indextr].id}}</router-link>
                  </vs-td>
                  <vs-td :data="data[indextr].name">{{data[indextr].name}}</vs-td>
                  <vs-td :data="data[indextr].rating">{{data[indextr].rating}}</vs-td>
                  <vs-td :data="data[indextr].comment">{{data[indextr].comment}}</vs-td>
                  <vs-td :data="data[indextr].date">{{data[indextr].date}}</vs-td>
                  <vs-td>
                    <vs-button @click="popupActivo=true" v-on:click="edit(data[indextr].comment)">
                      <feather-icon icon="EditIcon" />
                    </vs-button>
                  </vs-td>
                  <vs-td>
                    <vs-button color="danger" v-on:click="del2(data[indextr])">
                      <feather-icon icon="Trash2Icon" />
                    </vs-button>
                  </vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </vs-card>
      </div>
    </vs-col>
  </vs-row>
</template>
<script>
export default {
  name: "SVGStar",
  props: {
    rating: { type: Number, default: 5 },
    ratingValue: { type: Number, default: 0 }
  },
  data: () => ({
    popupActivo: false,
    ratingSetValue: 0,
    edits: [],
    ebays: [
      {
        id: 1,
        name: "Leanne Graham",
        rating: "Bret",
        comment: "Sincere@april.biz",
        date: "hildegard.org"
      },
      {
        id: 2,
        name: "Ervin Howell",
        rating: "Antonette",
        comment: "Shanna@melissa.tv",
        date: "anastasia.net"
      }
    ],
    alis: [
      {
        id: 1,
        name: "Leanne Graham",
        rating: "Bret",
        comment: "aaSincere@april.biz",
        date: "hildegard.org"
      },
      {
        id: 2,
        name: "Ervin Howell",
        rating: "Antonette",
        comment: "aabShanna@melissa.tv",
        date: "anastasia.net"
      }
    ]
  }),
  methods: {
    del1: function(data) {
      this.ebays.splice(1, 1);
    },
    del2: function(data) {
      this.alis.splice(1, 1);
    },
    edit: function(data) {
      this.edits = data;
      console.log(this.edits);
    },
    save: function(data) {
      this.popupActivo = false;
    },
    starClick(num) {
      this.ratingSetValue = num + 1;
    },
    addRating() {
      this.ratingSetValue += 1;
    },
    removeRating() {
      if (this.ratingSetValue > 1) {
        this.ratingSetValue -= 1;
      }
    }
  },
  created() {
    this.ratingSetValue = this.ratingValue;
    Number.prototype.times = function() {
      let i = -1;
      const arr = [];
      while (++i < this) {
        arr.push(i);
      }
      return arr;
    };
  }
};
</script>
<style>
.control {
  padding: 5px;
}
.vs-card--header h3 {
  padding: 10px;
}
.control {
  padding: 5px;
}
.vs-card--header h3 {
  padding: 10px;
}
.vs-textarea {
  border: 1px solid rgba(0, 0, 0, 0.2);
  height: 100px;
}
.edit_modal {
  padding: 20px;
}
.holamundo {
  text-align: center;
}
a:active,
a:visited,
a:hover,
a {
  color: black;
}
</style>
<style scoped lang="scss">
svg.active {
  fill: #e4720c;
}
svg {
  fill: #9cacbd;
}
</style>