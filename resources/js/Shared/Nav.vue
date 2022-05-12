<template>
<nav>
    <ul class="flex space-x-6">
      <li><NavLink class="text-blue-500 hover:underline"  href="/" :active="$page.component === 'Home'">Home</NavLink></li>
      <li><NavLink class="text-blue-500 hover:underline" href="/users" :active="$page.component === 'Users/Index'" >Users</NavLink></li>
      <li><NavLink class="text-blue-500 hover:underline"  href="/logout" method="post" as="button">Log out</NavLink></li>
    </ul>
</nav>
  
</template>

<script>
import NavLink from './NavLink';
export default {
    components: {
        NavLink
    }
}
</script>