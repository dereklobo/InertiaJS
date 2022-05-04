<template>
<div>
    <Nav></Nav>

    <div style="margin-top: 900px;">
        <p>The current time is {{time}}</p>
        <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll> Refresh</Link>
    </div>
</div>
 
</template>

<script>
import Nav from "../Shared/Nav.vue";
import { Link } from '@inertiajs/inertia-vue';
export default {
    components: {
        Nav,
        Link
    },
    props: {
        time: {
            type: String,
            required: true
        }
    }

}
</script>

<style>

</style>