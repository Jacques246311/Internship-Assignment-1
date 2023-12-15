import Vue from "vue";
import { createInertiaApp } from "@inertiajs/vue2";
import { InertiaProgress } from "@inertiajs/progress";
import vuetify from '../plugins/vuetify';
import Home from './pages/Home.vue';
Vue.component('home', Home);

Vue.use(vuetify);
createInertiaApp({
    resolve: (name) => require(`./pages/${name}.vue`),
    setup({ el, App, props, plugin }) {
        Vue.use(plugin);
        new Vue({

            vuetify: vuetify,
            render: (h) => h(App, props),

        }).$mount(el);

    },

});
InertiaProgress.init();
