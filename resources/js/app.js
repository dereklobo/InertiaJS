import Vue from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Shared/Layout.vue'
import VueCompositionAPI from '@vue/composition-api'

createInertiaApp({
  resolve: name => {
    let page = require(`./Pages/${name}`).default;
    page.layout = Layout;
    return page;
  },
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)
    .use(VueCompositionAPI)
    .component('Link', Link)
    .component('Head', Head)

    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },

  title: title => title + ' - My App',
})

InertiaProgress.init({
    color: 'red',
    showSpinner: true,
})
