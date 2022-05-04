<template>
<nav class="mt-6">
    <ul class="list-disc">
      <li><Link class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.component === 'Home' }" href="/">Home</Link> </li>
      <li><Link class="text-blue-500 hover:underline" :class="{'font-bold underline': $page.component === 'Users' }" href="/users">Users</Link> </li>
      <li><Link class="text-blue-500 hover:underline" href="/logout" method="post" as="button">Log out</Link> </li>
  </ul>
</nav>
  
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    components: {
        Link
    }
    

}
</script>

<style>

</style>template