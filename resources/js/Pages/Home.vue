<template>
  <div>
  <Head>
    <title>Home</title>
  </Head>
     <h1 class="text-2xl font-bold"> Home</h1>
    <div class="container">
      <h1 class="text-4xl font-bold ">Welcome, {{username}}</h1>
      <p>Credits: {{initial_credits}}</p> 
    </div>
  </div>
   

  
</template>

<script setup>

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
  computed: {
    username() {
      return this.$page.props.auth.user.username;
    }
  }

}
</script>