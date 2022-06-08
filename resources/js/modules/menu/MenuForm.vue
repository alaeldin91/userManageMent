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
        <div
          class="validation-message"
          v-text="validations.getMessage('item')"
        ></div>
      </div>
      <div class="form-group">
        <label for="select Item"> Select Item </label>
        <multiselect :options="catogries" v-model="food.catogry"> </multiselect>
        <div
          class="validation-message"
          v-text="validations.getMessage('catogry')"
        ></div>
      </div>
      <div class="form-group">
        <label for="price"> Price</label>
        <input
          class="form-controll"
          type="text"
          placeholder="Enter Price "
          v-model="food.price"
        />
        <div
          class="validation-message"
          v-text="validations.getMessage('price')"
        ></div>
         <label for="desc"> description </label>
      </div>
      
     
    
      <div class="from-group">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</template>

<script>
import Multiselect from "vue-multiselect";
import Validation from "./../../utils/validation";
export default {
  props: ["catogries", "restoId"],

  data() {
    return {
      food: {
        catogry: "",
        item: "",
        description="",
        price: 100,
      },
      validations: new Validation(),
    };
  },
  components: {
    Multiselect,
    Validation,
  },
  methods: {
    handleSubmit() {
      console.log("form group", this.food);
      let postData = this.food;
      postData.restoId = 1;
      console.log(postData.restoId);
      window.axios
        .post("api/item/save", postData)
        .then((response) => {
          console.log("response", response.data);
          this.$emit("newMenuItemAdd", response.data, postData.catogry);
        })
        .catch((error) => {
          console.log("error", error.response);

          if (error.response.status == 422) {
            this.validations.setMessage(error.response.data.errors);
          }
        });
    },
  },
  methods: {
    handleNewMenuItem(item, catogry) {
      console.log("item", item);
      this.localItem[catogry].unshift(item);
    },
  },
};
</script>

<style>
</style>