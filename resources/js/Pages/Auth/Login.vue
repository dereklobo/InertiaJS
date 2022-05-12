<template>
    <div>
        <Head>
            <title>Login</title>
        </Head>
        

        <main >
            <section class="bg-white p-8 rounded-xl max-w-md mx-auto mt-8 border">
                <h1 class="text-3xl mb-6">Login</h1>
                <form @submit.prevent="submit">
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
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"> Login</button>
                    </div>
                </form>
            </section>
        </main>
        
    </div>
</template>

<script>
export default {
    layout: null,
    data() {
        return {
            form: this.$inertia.form({
                email: null,
                password: null,
                remember: false,
            }),
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/login', this.form, {
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

