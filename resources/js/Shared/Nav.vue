<template>
<nav class="mt-6">
    <ul class="list-disc">
      <li><NavLink class="text-blue-500 hover:underline"  href="/" :active="$page.component === 'Home'">Home</NavLink></li>
      <li><NavLink class="text-blue-500 hover:underline" href="/users" :active="$page.component === 'Users'" >Users</NavLink></li>
      <li><NavLink class="text-blue-500 hover:underline"  href="/logout" :active="$page.component === 'Logout'" method="post" as="button">Log out</NavLink></li>
  </ul>
</nav>
  
</template>

<script>
import { Link } from '@inertiajs/inertia-vue';
import NavLink from './NavLink';
export default {
    components: {
        Link,
        NavLink
    }
}
</script>