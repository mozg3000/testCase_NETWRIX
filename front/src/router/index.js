import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Patners.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Partners',
    component: Home,
    props: route => ({ company: route.query.company, address: route.query.address})
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
