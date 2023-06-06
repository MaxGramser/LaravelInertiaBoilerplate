import { createApp, h } from 'vue'
import {createInertiaApp, Head, Link} from '@inertiajs/inertia-vue3'
import app from "./Layouts/app.vue";
import auth from "./Layouts/auth.vue";
import {createPinia} from "pinia";
const pinia = createPinia();

createInertiaApp({
    resolve: async name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        let page = pages[`./Pages/${name}.vue`];

        // Default layout
        if(page.default.layout === undefined)
            page.default.layout = app;

        // auth routes
        if(name.startsWith('Auth'))
            page.default.layout = auth;

        return page;
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .component('Link', Link)
            .component('Head', Head)
            .use(plugin)
            .use(pinia)
            .mount(el)
    },
});
