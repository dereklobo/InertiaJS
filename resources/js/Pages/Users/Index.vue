<template>

<div>
    <Head>
        <title>Users</title>
    </Head>
    <div class="container">

    <div class="flex justify-between mb-6">
    <div class="flex items-center">
        <h1 class="text-2xl font-bold"> Users</h1>
        <Link href="/users/create" class="text-blue-500 text-sm ml-3">New User</Link>
    </div>

        <input type="text" v-model="search" placeholder="Search ..." class="border px-2 rounded-lg" ref="search"/>
    </div>

       <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr v-for="user in users.data" :key="user.id">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-grey-900">
                                    {{ user.name }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-6 whitespace-nowrap text-right text-sm font-medium">
                            <Link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">
                                Edit
                            </Link>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
       <Pagination :links="users.links" class="mt-6" />

    </div>
    <div>
        <div style="margin-top: 300px;">
            <p>The current time is {{time}}</p>
            <Link href="/users" class="text-blue-500 hover:underline" preserve-scroll> Refresh</Link>
        </div>
    </div>
  </div>

 
</template>

<script>
import Pagination from '../../Shared/Pagination.vue';
import { Inertia } from '@inertiajs/inertia';


export default {
    components: {
        Pagination
    },
    props: {
        time: {
            type: String,
            required: true
        },
        users: Object,
        filters: Object,
    },
    watch: {
        search: {
            handler(newValue) {
                Inertia.get('/users', {search: newValue}, {preserveState: true, replace: true});
                
            },
        }
    },
    mounted() {
        let search =  Object.assign(this.filters).search.search;
        if (search) {
            this.$refs.search.value = search;
        }
    },
    data() {
       
        return {
            search: '',
        }
    },

}
</script>

<style>

</style>