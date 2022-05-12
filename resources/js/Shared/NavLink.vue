<template>
<div>
    <Link class="text-black hover:underline" :class="{'font-bold underline': active }" :href="href" :method="method" >
        <slot/>
    </Link> 
</div>
   
</template>

<script>
export default {
    components: {
    },
    props: {
        active:Boolean,
        href:String,
        method:String,
    }
        
}
</script>