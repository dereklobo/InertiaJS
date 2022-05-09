<template>
<div>
    <Link class="text-blue-500 hover:underline" :class="{'font-bold underline': active }" :href="href" >
        <slot/>
    </Link> 
</div>
   
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    components: {
        Link
    },
    props: {
        active:Boolean,
        href:String,
    }
        
}
</script>