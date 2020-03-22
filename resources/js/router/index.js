import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import Form from "../views/Form.vue";
import Charts from "../views/Charts.vue";
import Table from "../views/Tables.vue";
import Login from "../views/Login.vue";
import Crud from "../views/Crude.vue";

Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/vue-crud/form",
    name: "Form",
    component: Form
  },
  {
    path: "/charts",
    name: "Charts",
    component: Charts
  },
  {
    path: "/tables",
    name: "tables",
    component: Table
  },
  {
    path: "/login",
    name: "login",
    component: Login
  },
  {
    path: "/crud",
    name: "crud",
    component: Crud
  },

  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue")
  }
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes
});

export default router;
