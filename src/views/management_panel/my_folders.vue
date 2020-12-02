<template>
  <vs-tabs>
    <vs-tab label="Amazon Folders">
      <div class="con-tab-ejemplo">
        <vs-row vs-justify="center">
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
            <vs-card>
              <div slot="header">
                <h3>Add Folder:</h3>
              </div>
              <div>
                <vs-row>
                  <vs-col
                    class="vs-input"
                    type="flex"
                    vs-justify="center"
                    vs-align="center"
                    vs-w="2"
                  >
                    <vs-input
                      icon-after="true"
                      label-placeholder="Folder Name"
                      icon="mode_edit"
                      v-model="amazon.name"
                    />
                  </vs-col>
                  <vs-col
                    class="vs-input"
                    type="flex"
                    vs-justify="center"
                    vs-align="center"
                    vs-w="3"
                  >
                    <vs-input
                      icon-after="true"
                      label-placeholder="You can write some description if you like"
                      icon="mode_edit"
                      v-model="amazon.description"
                    />
                  </vs-col>
                  <vs-col
                    class="vs-button"
                    type="flex"
                    vs-justify="center"
                    vs-align="center"
                    vs-w="4"
                  >
                    <vs-button v-on:click="create1()">Create New Folder</vs-button>
                  </vs-col>
                </vs-row>
              </div>
            </vs-card>
          </vs-col>
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
            <vs-card>
              <div>
                <vs-table stripe :data="amazon">
                  <template slot="thead">
                    <vs-th>Folder Name</vs-th>
                    <vs-th>Items</vs-th>
                    <vs-th>Description</vs-th>
                    <vs-th>Last Added</vs-th>
                    <vs-th>Delete</vs-th>
                    <vs-th>Export</vs-th>
                  </template>

                  <template slot-scope="{data}">
                    <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                      <vs-td :data="data[indextr].name">
                        <router-link to="/management_panel/folders/files">{{data[indextr].name}}</router-link>
                      </vs-td>
                      <vs-td :data="data[indextr].item">{{data[indextr].item}}</vs-td>
                      <vs-td :data="data[indextr].description">{{data[indextr].description}}</vs-td>
                      <vs-td :data="data[indextr].added">{{data[indextr].added}}</vs-td>
                      <vs-td>
                        <vs-button color="danger" v-on:click="del(data[indextr])">
                          <feather-icon icon="Trash2Icon" />
                        </vs-button>
                      </vs-td>
                      <vs-td>
                        <vs-button>
                          <feather-icon icon="DownloadCloudIcon" />
                        </vs-button>
                      </vs-td>
                    </vs-tr>
                  </template>
                </vs-table>
              </div>
            </vs-card>
          </vs-col>
        </vs-row>
      </div>
    </vs-tab>
    <vs-tab label="Ali Express Folders">
      <div class="con-tab-ejemplo">
        <vs-row vs-justify="center">
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
            <vs-card>
              <div slot="header">
                <h3>Add Folder:</h3>
              </div>
              <div>
                <vs-row>
                  <vs-col
                    class="vs-input"
                    type="flex"
                    vs-justify="center"
                    vs-align="center"
                    vs-w="2"
                  >
                    <vs-input
                      icon-after="true"
                      label-placeholder="Folder Name"
                      icon="mode_edit"
                      v-model="ali.name"
                    />
                  </vs-col>
                  <vs-col
                    class="vs-input"
                    type="flex"
                    vs-justify="center"
                    vs-align="center"
                    vs-w="2"
                  >
                    <vs-input
                      icon-after="true"
                      label-placeholder="Folder Name"
                      icon="mode_edit"
                      v-model="ali.description"
                    />
                  </vs-col>
                  <vs-col
                    class="vs-button"
                    type="flex"
                    vs-justify="center"
                    vs-align="center"
                    vs-w="4"
                  >
                    <vs-button v-on:click="create2()">Create New Folder</vs-button>
                  </vs-col>
                </vs-row>
              </div>
            </vs-card>
          </vs-col>
          <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="12">
            <vs-card>
              <div>
                <vs-table stripe :data="ali">
                  <template slot="thead">
                    <vs-th>Folder Name</vs-th>
                    <vs-th>Items</vs-th>
                    <vs-th>Description</vs-th>
                    <vs-th>Last Added</vs-th>
                    <vs-th>Delete</vs-th>
                    <vs-th>Export</vs-th>
                  </template>

                  <template slot-scope="{data}">
                    <vs-tr :key="indextr" v-for="(tr, indextr) in data">
                      <vs-td :data="data[indextr].name">
                        <router-link to="/management_panel/folders/files">{{data[indextr].name}}</router-link>
                      </vs-td>
                      <vs-td :data="data[indextr].item">{{data[indextr].item}}</vs-td>
                      <vs-td :data="data[indextr].description">{{data[indextr].description}}</vs-td>
                      <vs-td :data="data[indextr].added">{{data[indextr].added}}</vs-td>
                      <vs-td>
                        <vs-button color="danger" v-on:click="del(data[indextr])">
                          <feather-icon icon="Trash2Icon" />
                        </vs-button>
                      </vs-td>
                      <vs-td>
                        <vs-button>
                          <feather-icon icon="DownloadCloudIcon" />
                        </vs-button>
                      </vs-td>
                    </vs-tr>
                  </template>
                </vs-table>
              </div>
            </vs-card>
          </vs-col>
        </vs-row>
      </div>
    </vs-tab>
  </vs-tabs>
</template>
<script>
export default {
  data: () => ({
    amazon: [
      {
        name: "Leanne Graham",
        item: 1,
        description: "Bret",
        added: "Sincere@april.biz"
      },
      {
        name: "Ervin Howell",
        item: 2,
        description: "Antonette",
        added: "Shanna@melissa.tv"
      }
    ],
    ali: [
      {
        name: "Patricia Lebsack",
        item: 4,
        description: "Karianne",
        added: "Julianne.OConner@kory.org"
      },
      {
        name: "Clementine Bauch",
        item: 3,
        description: "Samantha",
        added: "Nathan@yesenia.net"
      }
    ]
  }),
  methods: {
    del: function(data) {
      this.amazon.splice(data, 1);
    },
    create1: function() {
      const today = new Date();
      const date =
        today.getFullYear() +
        "-" +
        (today.getMonth() + 1) +
        "-" +
        today.getDate();
      const time =
        today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      const dateTime = date + " " + time;
      this.timestamp = dateTime;
      var elem = document.createElement("tr");
      this.amazon.push({
        name: this.amazon.name,
        item: 0,
        description: this.amazon.description,
        added: this.timestamp
      });
    },
    create2: function() {
      const today = new Date();
      const date =
        today.getFullYear() +
        "-" +
        (today.getMonth() + 1) +
        "-" +
        today.getDate();
      const time =
        today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      const dateTime = date + " " + time;
      this.timestamp = dateTime;
      var elem = document.createElement("tr");
      this.ali.push({
        name: this.ali.name,
        item: 0,
        description: this.ali.description,
        added: this.timestamp
      });
    }
  }
};
</script>
<style>
.vs-tabs--li {
  padding: 15px;
}
.vs-input {
  width: 100%;
  padding: 5px;
}
.vs-button {
  margin-top: 0.7%;
}
a:active,
a:visited,
a:hover,
a {
  color: black;
}
.vs-card--header {
  padding: 15px;
}
</style>