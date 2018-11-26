



import Vue from 'vue'
import VueRouter from 'vue-router'



Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import Register from './components/Register'
import Login from './components/Login'
import Jobs from './components/Jobs'
import AboutUs from './components/AboutUs'
import Testimoni from './components/Testimoni'
import TambahJobs from './components/TambahJobs.vue'



 const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        
        {
            path: '/jobs',
            name: 'jobs',
            component: Jobs,
            children: [
                

            ]
        },
        {
            path: '/testimoni',
            name: 'testimoni',
            component: Testimoni
        },
        {
            path: '/aboutus',
            name: 'aboutus',
            component: AboutUs
        },
        {
            path: '/jobs/tambahjobs',
            name: 'tambahjobs',
            component: TambahJobs
        }
        
        
      
       
    ],
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});