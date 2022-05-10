<template>
  <div>
     <h1 class="text-2xl font-bold"> Home</h1>
    <div class="container">
      <h1 class="text-4xl font-bold ">Welcome, {{name}}</h1>
      <p>Credits: {{initial_credits}}</p> 
    </div>
  </div>
   

  
</template>

<script>

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

}
</script>

<style>

</style>