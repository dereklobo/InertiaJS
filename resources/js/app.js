import Vue from 'vue'
import { createInertiaApp, Link } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Shared/Layout.vue'

createInertiaApp({
  resolve: name => {
    let page = require(`./Pages/${name}`).default;
    page.layout = Layout;
    return page;
  },
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
