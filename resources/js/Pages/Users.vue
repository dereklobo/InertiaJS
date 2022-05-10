<template>

<div>
    <Head>
        <title>Users</title>
    </Head>
    <h1 class="text-2xl font-bold"> Users</h1>
    <div class="container">
      <h1 class="text-4xl font-bold ">Welcome, {{name}}</h1>
      <p>Credits: {{initial_credits}}</p> 
    </div>
    <div>

        <div style="margin-top: 500px;">
            <p>The current time is {{time}}</p>
            <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll> Refresh</Link>
        </div>
    </div>
  </div>

 
</template>

<script setup>
export default {
    
    props: {
        time: {
            type: String,
            required: true
        },
        name: {
            type: String,
            required: true
        },
        initial_credits: Number
    },

}
</script>

<style>

</style>