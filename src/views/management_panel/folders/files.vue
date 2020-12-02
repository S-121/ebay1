<template>
  <div>
    <vs-row vs-justify="center">
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
        <vs-card>
          <div slot="header" class="title">
            <h3>
              <router-link
                class="router-link"
                to="/management_panel/my_folders"
              >Return To My Folders</router-link>
            </h3>
          </div>
          <div>
            <vs-row>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <div class="select-button">
                  <v-select v-model="selected1" :options="options1" />
                </div>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <div class="select-button">
                  <v-select :value="selected2" :options="options2"></v-select>
                </div>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1.4">
                <div class="select-button">
                  <vs-button color="dark" type="filled">Upload selected</vs-button>
                </div>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <div class="select-button">
                  <vs-button color="dark" type="filled">Export selected items</vs-button>
                </div>
              </vs-col>
            </vs-row>
          </div>
        </vs-card>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
        <vs-card>
          <div>
            <vs-row>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
                    <div class="set-input">
                      <p>Ebay Price</p>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Minimum" />
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Maximum" />
                    </div>
                  </vs-col>
                </vs-row>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
                    <div class="set-input">
                      <p>Amazon Price</p>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Minimum" />
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Maximum" />
                    </div>
                  </vs-col>
                </vs-row>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
                    <div class="set-input">
                      <p>Profit</p>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Minimum" />
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Maximum" />
                    </div>
                  </vs-col>
                </vs-row>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
                    <div class="set-input">
                      <p>Sales</p>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Minimum" />
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                    <div class="set-input">
                      <vs-input class="vs-input" placeholder="Maximum" />
                    </div>
                  </vs-col>
                </vs-row>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
                    <div class="set-input">
                      <p>Search text:</p>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
                    <div class="set-input">
                      <vs-input
                        class="vs-input"
                        style="width:100%;"
                        placeholder="Enter eBay or Amazon title"
                      />
                    </div>
                  </vs-col>
                </vs-row>
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                <vs-button style="width:100%;margin-top:11%;" type="gradient">Filter</vs-button>
              </vs-col>
            </vs-row>
          </div>
        </vs-card>
      </vs-col>
      <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
        <vs-card>
          <div>
            <vs-table max-items="10" pagination stripe :data="users">
              <template slot="header">
                <vs-row>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1">
                    <div class="card3-button">
                      <vs-button type="gradient" v-on:click="check()">Check all</vs-button>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="1.7">
                    <div class="card3-button">
                      <vs-button type="gradient" v-on:click="del()">Delete selected items</vs-button>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                    <div class="card3-button">
                      <v-select :value="selected3" :options="options3"></v-select>
                    </div>
                  </vs-col>
                  <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="2">
                    <div class="card3-button">
                      <vs-button type="gradient">Move folder</vs-button>
                    </div>
                  </vs-col>
                </vs-row>
              </template>
              <template slot="thead">
                <vs-th>
                  <vs-checkbox v-model="checkBox" @change="check()"></vs-checkbox>
                </vs-th>
                <vs-th></vs-th>
                <vs-th>eBay Image</vs-th>
                <vs-th>Supplier Image</vs-th>
                <vs-th>ASIN</vs-th>
                <vs-th>eBay title</vs-th>
                <vs-th>Supplier Title</vs-th>
                <vs-th>Supplier Price</vs-th>
                <vs-th>Ebay Price</vs-th>
                <vs-th>Profit</vs-th>
                <vs-th>Sales</vs-th>
              </template>

              <template slot-scope="{data}">
                <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                  <vs-td>
                    <vs-checkbox v-model="data[indextr].checkBoxs"></vs-checkbox>
                  </vs-td>
                  <vs-td></vs-td>
                  <vs-td>{{data[indextr].e_image}}</vs-td>
                  <vs-td>{{data[indextr].s_image}}</vs-td>
                  <vs-td>{{data[indextr].asin}}</vs-td>
                  <vs-td>{{data[indextr].e_title}}</vs-td>
                  <vs-td>{{data[indextr].s_title}}</vs-td>
                  <vs-td>{{data[indextr].s_price}}</vs-td>
                  <vs-td>{{data[indextr].e_price}}</vs-td>
                  <vs-td>{{data[indextr].profit}}</vs-td>
                  <vs-td>{{data[indextr].sales}}</vs-td>
                </vs-tr>
              </template>
            </vs-table>
          </div>
        </vs-card>
      </vs-col>
    </vs-row>
  </div>
</template>
<script>
import vSelect from "vue-select";
export default {
  components: { "v-select": vSelect },
  data() {
    return {
      checkBox: false,
      options1: [{ label: "Export to CSV file" }, { label: "Upload via URL" }],
      selected1: { label: "--- Select Store ---" },
      options2: [
        { label: "United States" },
        { label: "United Kingdom" },
        { label: "Germany" },
        { label: "France" },
        { label: "Walmart" }
      ],
      selected3: { label: "--- Select Folder ---" },
      options3: [
        { label: "United States" },
        { label: "United Kingdom" },
        { label: "Germany" },
        { label: "France" },
        { label: "Walmart" }
      ],
      selected2: { label: "United States" },
      users: [
        {
          e_image: 1,
          s_image: "Leanne Graham",
          asin: "Bret",
          e_title: "Sincere@april.biz",
          s_title: "hildegard.org",
          s_price: 30,
          e_price: 40,
          profit: "aoisd",
          sales: "aetwe",
          checkBoxs: true
        },
        {
          e_image: 2,
          s_image: "Ervin Howell",
          asin: "Antonette",
          e_title: "Shanna@melissa.tv",
          s_title: "anastasia.net",
          s_price: 30,
          e_price: 40,
          profit: "aoisd",
          sales: "aetwe",
          checkBoxs: false
        },
        {
          e_image: 3,
          s_image: "Clementine Bauch",
          asin: "Samantha",
          e_title: "Nathan@yesenia.net",
          s_title: "ramiro.info",
          s_price: 30,
          e_price: 40,
          profit: "aoisd",
          sales: "aetwe",
          checkBoxs: true
        },
        {
          e_image: 4,
          s_image: "Patricia Lebsack",
          asin: "Karianne",
          e_title: "Julianne.OConner@kory.org",
          s_title: "kale.biz",
          s_price: 30,
          e_price: 40,
          profit: "aoisd",
          sales: "aetwe",
          checkBoxs: false
        }
      ]
    };
  },
  methods: {
    check: function() {
      for (let i = 0; i < this.users.length; i++) {
        // console.log(this.users[i].checkBoxs);
        if (this.users[i].checkBoxs == false) {
          for (i = 0; i < this.users.length; i++) {
            this.users[i].checkBoxs = true;
            this.checkBox = true;
          }
          return;
        } else {
          for (i = 0; i < this.users.length; i++) {
            this.users[i].checkBoxs = false;
            this.checkBox = false;
          }
        }
      }
    },
    del: function() {
      for (let i = 0; i < this.users.length; i++) {
        if (this.users[i].checkBoxs == true) {
          this.users.splice(i, 1);
        }
      }
    }
  }
};
</script>
<style>
.title {
  padding: 10px;
}
.select-button {
  padding: 5px;
}
.v-select {
  margin-top: 1.5%;
}
.set-input {
  padding: 3px;
}
.vs-input {
  width: 100%;
}
.vs-row {
  padding: 5px;
}
.card3-button {
  padding: 5px;
}
.router-link {
  color: black;
}
.router-link:hover {
  color: rgb(0, 225, 255);
}
</style>