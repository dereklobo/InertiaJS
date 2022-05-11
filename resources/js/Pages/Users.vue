<template>

<div>
    <Head>
        <title>Users</title>
    </Head>
    <h1 class="text-2xl font-bold"> Users</h1>
    <div class="container">
      <h1 class="text-4xl font-bold ">Welcome,</h1>
      <p>Credits: {{initial_credits}}</p> 

       
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

<script setup>
import Pagination from '../Shared/Pagination';

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
        initial_credits: Number
    },

}
</script>

<style>

</style>