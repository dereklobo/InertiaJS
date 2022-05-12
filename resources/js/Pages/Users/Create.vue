<template>
    <div>
        <Head>
            <title>Create User</title>
        </Head>
        <h1 class="text-3xl">Create New User</h1>

        <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        {{ errors }}
            <div class="mb-6">
                <label  for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name </label>
                <input v-model="form.name" type="text" class="border border-gray-400 p-2 w-full" name="name" id="name"  />
                <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="text-red-500 text-xs mt-1"></div>
            </div>
            <div class="mb-6">
                <label  for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email </label>
                <input v-model="form.email" type="email" class="border border-gray-400 p-2 w-full" name="email" id="email"  />
                <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-500 text-xs mt-1"></div>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password </label>
                <input  v-model="form.password" type="password" class="border border-gray-400 p-2 w-full" name="password" id="password"  />
                <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-red-500 text-xs mt-1"></div>
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="processing"> Submit</button>
            </div>
        </form>
    </div>
</template>

<script >

// import  { reactive } from 'vue';

// let form = reactive({
//     name: '',
//     email: '',
//     password: ''
// });

import { Inertia } from '@inertiajs/inertia';

// this.$intertia.form({
//     name: '',
//     email: '',
//     password: ''
// })

export default {
    components: {
    },
    props: {
    },
    data() {
        return {
            form:{
                name: '',
                email: '',
                password: ''
            },
            processing: false,
        }
    },
    methods: {
        submit() {
            Inertia.post('/users', this.form, {
                onStart: () => {
                    this.processing = true;
                },
                onFinish: () => {
                    this.processing = false;
                }
            });
        }
    }
}
</script>