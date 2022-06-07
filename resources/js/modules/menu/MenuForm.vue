<template>
  <div class="add_form__wrapper">
    <form v-on:submit.prevent="handleSubmit">
      <div class="form-group">
        <label for="name"> Food Name </label>
        <input
          class="form-controll"
          type="text"
          placeholder="Enter Food Item"
          v-model="food.item"
        />
      </div>
      <div class="form-group">
        <label for="select Item"> Select Item </label>
        <multiselect :options="catogries" v-model="food.catogry"> </multiselect>
      </div>
      <div class="form-group">
        <label for="price"> Price</label>
        <input class="form-controll" type="text" placeholder="Enter Price " v-model="food.price" />
      </div>
      <div class="from-group">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</template>

<script>
import Multiselect from "vue-multiselect";

export default {
  props: ["catogries"],
  data() {
    return {
      food: {
        catogry: "",
        item: "",
        price: 100,
      },
    };
  },
  components: {
    Multiselect,
  },
  methods: {
    handleSubmit() {
        console.log('form group',this.food)
    },
  },
};
</script>

<style>
</style>