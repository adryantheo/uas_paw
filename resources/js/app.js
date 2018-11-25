



import Vue from 'vue'
import VueRouter from 'vue-router'



Vue.use(VueRouter)

import App from './components/App'
import Home from './components/Home'
import Register from './components/Register'
import Login from './components/Login'
import Jobs from './components/Jobs'
import AboutUs from './components/AboutUs'
import ContactUs from './components/ContactUs'



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
            component: Jobs
        },
        {
            path: '/contactus',
            name: 'contactus',
            component: ContactUs
        },
        {
            path: '/aboutus',
            name: 'aboutus',
            component: AboutUs
        }
        
      
       
    ],
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});