import './bootstrap';

import { createApp, h, App as VueApp } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3'

createInertiaApp({
  title: (title: string) => `test App`,
  resolve: (name: string) => import(`./src/pages/${name}`),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) });
    app.use(plugin);
    app.mount(el);
  }
})
