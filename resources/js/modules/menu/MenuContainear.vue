<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <cardcontainear>
          <template slot="title">My Menu Items </template>
          <template slot="main">
            <div class="section">
              <multiselect :options="catpgries" v-model="menu"> </multiselect>
            </div>


            <menu-group :items="currentMenuItem"> </menu-group>
          </template>
        </cardcontainear>
      </div>
    
      <div class="col-md-4"></div>
      <cardcontainear>
        <template slot="title">Add Menu Items </template>
        <template slot="main">
          <menu-form :catogries="catpgries"></menu-form>

        </template>
      </cardcontainear>
    </div>
  </div>
</template>
<script>
import Multiselect from "vue-multiselect";
import MenuGroups from "./MenuGroups.vue";
import _ from "lodash";
export default {
  components: {
    Multiselect,
    MenuGroups,
  },
  created() {
    _.forEach(this.items, (item, key) => {
      this.catpgries.push(key);
    });
    this.menu = this.catpgries[0];
  },
  props: ["items","restoId"],
  data() {
    return {
      catpgries: [],
      menu: "",
    };
  },
  computed: {
    currentMenuItem() {
      return this.items[this.menu];
    },
  },
};
</script>

<style >
.col-md-4 {
  margin: 10px;
}
.col-md-8 {
  margin: 10px;
}
</style>

