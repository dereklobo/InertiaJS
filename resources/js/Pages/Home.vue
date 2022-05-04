<template>
<div class="container">
  <h1 class="text-4xl font-bold ">Welcome, {{name}}</h1>
  <p>Credits: {{initial_credits}}</p> 
  
  <Nav></Nav>
</div>
  
</template>

<script>
import Nav from "../Shared/Nav";

export default {
  props: {
    name: {
      type: String,
      required: true
    },
    initial_credits: {
      type: Number,
      required: true
    }
  },
  components: {
    Nav
  }

}
</script>

<style>

</style>template