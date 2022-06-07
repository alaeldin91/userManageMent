<template>
<div class="wrapper menu__container">
  <div class="row">
    <div class="col-md-8">
      <cardcontainear>
        <template slot="title">My Menu Items </template>
        <template slot="body">Content Will Come Here </template>
      </cardcontainear>
   </div>
    <div class="col-md-4"></div>
    <cardcontainear>
        <template slot="title">Add Menu Items </template>
        <template slot="body">Form Will Come Here </template>
      </cardcontainear>
  </div>
     </div>

</template>
<script>
export default {
  props: ["items"],
};
</script>

<style >

.col-md-4{
    margin: 10px;
}
.col-md-8{
    margin: 10px;
}

</style>