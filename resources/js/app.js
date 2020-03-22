import Vue from "vue";
import App from "./App.vue";
import Nav from "./components/Nav.vue";
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import router from "./router";
import store from "./store";

export default {
    components: {
        Nav,
        Header,
        Footer
    },
}
Vue.config.productionTip = false;
new Vue({
    router,
    store,
    render: h => h(App)
}).$mount("#app");
