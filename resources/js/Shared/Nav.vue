<template>
<nav>
    <ul class="flex list-disc space-x-4 list-inside">
      <NavLink class="text-blue-500 hover:underline"  href="/" :active="$page.component === 'Home'">Home</NavLink>
      <NavLink class="text-blue-500 hover:underline" href="/users" :active="$page.component === 'Users'" >Users</NavLink>
      <NavLink class="text-blue-500 hover:underline"  href="/logout" :active="$page.component === 'Logout'" method="post" as="button">Log out</NavLink>
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