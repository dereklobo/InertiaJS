import Vue from 'vue'
import { createInertiaApp, Link } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)
    .component('Link', Link)

    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})

InertiaProgress.init({
    color: 'red',
    showSpinner: true,
})
