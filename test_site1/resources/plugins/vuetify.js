import "@mdi/font/css/materialdesignicons.css";
import "material-design-icons-iconfont/dist/material-design-icons.css";
import Vue from "vue";
import Vuetify from "vuetify";


Vue.use(Vuetify);
export default new Vuetify({
    theme: {
        themes: {
            light: {
                primary: "#3ab49f",
                secondary: "#000",
                accent: "#FCCA2A",
                error: "#b71c1c",
            },
        },
    },
});
