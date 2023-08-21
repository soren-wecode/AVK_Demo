import './bootstrap';
import '../css/output.css';
import '../css/app.css';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const VueApp = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy);

        VueApp.mount(el);

        return VueApp;
    },
});