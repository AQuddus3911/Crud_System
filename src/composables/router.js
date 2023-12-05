// import Vue from 'vue';
import { createApp } from 'vue';
import VueRouter from 'vue-router';
import { createRouter, createWebHistory } from 'vue-router';



const routes = [
  {
    path: '/',
    component: () => import('../components/Home.vue')
},
{
    path: '/about',
    component: () => import('../components/About.vue')
},
{
  path: '/student',
  component: () => import('../components/Student.vue')
},
{
  path: '/client',
  component: () => import('../components/Client.vue')
},
// Add more routes as needed
];


const router = createRouter({
    history: createWebHistory(),
    routes
  });

const app = createApp({});
app.use(VueRouter);
app.use(router);

export default router;