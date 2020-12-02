<template>
  <div>
    <vs-table :data="users">
      <template slot="header">
        <h3>Users</h3>
        <div class="centerx">
          <vs-button @click="popupActivo=true" color="primary" type="border">New admin</vs-button>
          <vs-popup class="holamundo" title="Please create new user." :active.sync="popupActivo">
            <vs-row>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <vs-input
                  name="username"
                  v-model="input.username"
                  type="text"
                  class="inputx"
                  placeholder="username"
                />
              </vs-col>
              <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <vs-input
                  name="email"
                  v-model="input.email"
                  type="email"
                  class="inputx"
                  placeholder="email"
                />
              </vs-col>
              <br />
              <vs-divider></vs-divider>
              <vs-button v-on:click="save()">save</vs-button>
            </vs-row>
          </vs-popup>
        </div>
      </template>
      <template slot="thead">
        <vs-th>No</vs-th>
        <vs-th>Name</vs-th>
        <vs-th>Email</vs-th>
        <vs-th>Update</vs-th>
        <vs-th>Delete</vs-th>
      </template>

      <template slot-scope="{data}">
        <vs-tr :key="indextr" v-for="(tr, indextr) in data">
          <vs-td :data="data[indextr].id">{{data[indextr].id}}</vs-td>
          <vs-td :data="data[indextr].username">{{data[indextr].username}}</vs-td>
          <vs-td :data="data[indextr].email">{{data[indextr].email}}</vs-td>
          <vs-td>
            <vs-button>
              <feather-icon icon="EditIcon" />
            </vs-button>
          </vs-td>
          <vs-td>
            <vs-button v-on:click="user_del(data[indextr].id)">
              <feather-icon icon="Trash2Icon" />
            </vs-button>
          </vs-td>
        </vs-tr>
      </template>
    </vs-table>
  </div>
</template>

<script>
export default {
  data: () => ({
    popupActivo: false,
    users: [],
    input: {
      username: "",
      email: ""
    }
  }),
  created: function() {
    this.getdata();
  },
  methods: {
    save() {
      this.$store
        .dispatch("products/register", this.input)
        .then(function(res) {
          if (res.data == "OK") {
            alert("Sign Up Success!");
            location.reload();
          } else {
            alert("Incorrect username or email.");
            location.reload();
          }
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    getdata: function() {
      let self = this;
      this.$store
        .dispatch("products/getuseradmindata")
        .then(function(res) {
          console.log(res.data.products);
          self.users = res.data.products;
        })
        .catch(function(error) {
          console.log(error);
        });
    },
    user_del(userid) {
      this.$store
        .dispatch("products/user_del", userid)
        .then(function(res) {
          if (res.data == "del") {
            alert("Deleted Success!");
            location.reload();
          }
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  },
  mounted() {
    this.getdata();
  }
};
</script>