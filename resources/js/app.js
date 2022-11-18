import { createApp } from "vue/dist/vue.esm-bundler.js";
import AppComponent from "./components/App.vue";
import router from "./router/index";

const app = createApp({
    components: {
        AppComponent,
    },
});

app.mount("#app");
app.use(router);
