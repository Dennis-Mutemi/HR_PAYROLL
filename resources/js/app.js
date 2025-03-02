import { createApp, h } from 'vue'
import { createInertiaApp, Head,Link } from '@inertiajs/vue3'
import Layout from './pages/Layouts/Layout.vue';
import {ZiggyVue} from '../../vendor/tightenco/ziggy';
// // Import Bootstrap's CSS
// import 'bootstrap/dist/css/bootstrap.min.css';
// // Import Bootstrap's JS
// import 'bootstrap/dist/js/bootstrap.bundle.min.js';

createInertiaApp({
  title:(title)=>`My App ${title}`,
  resolve: name => {
    const pages = import.meta.glob('/resources/js/pages/**/*.vue', { eager: true });
    let page = pages[`/resources/js/pages/${name}.vue`];
  
    if (!page) {
      console.error(`Page "${name}" not found. Available pages:`, Object.keys(pages));
      throw new Error(`Page "${name}" not found.`);
    }
  
    page = page.default;

    // Only apply layout if it's not explicitly set to null
    page.layout = page.layout === undefined ? Layout : page.layout;

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin) 
      .use(ZiggyVue)
      .component('Head',Head) 
      .component('Link',Link) 
      .mount(el)      
  },
  progress: { 
    // The color of the progress bar...
    color: 'red',
    // Whether to include the default NProgress styles...
    includeCSS: true,
    // Whether the NProgress spinner will be shown...
    showSpinner: true,
  },
})