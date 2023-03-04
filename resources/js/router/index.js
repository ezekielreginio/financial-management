import Vue from 'vue'
import VueRouter from 'vue-router'
import store from '../store'

// import Dashboard from '../components/Dashboard.vue'

Vue.use(VueRouter)

// /* Guest Component */
// const Login = () => import('../components/Login.vue' /* webpackChunkName: "resource/js/components/login" */)
// const Register = () => import('../components/Register.vue' /* webpackChunkName: "resource/js/components/register" */)
// /* Guest Component */

// /* Layouts */
// const DahboardLayout = () => import('../components/Layouts/Dashboard.vue' /* webpackChunkName: "resource/js/components/layouts/dashboard" */)
// /* Layouts */

/* Authenticated Component */
const Dashboard = () => import('../components/Dashboard.vue' /* webpackChunkName: "resource/js/components/dashboard" */)
/* Authenticated Component */


const Routes = [
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'dashboard'
    },
]

var router  = new VueRouter({
    mode: 'history',
    routes: Routes
})

router.beforeEach((to, from, next) => {
    document.title = `${to.meta.title} - ${process.env.MIX_APP_NAME}`
    if(to.meta.middleware=="guest"){
        if(store.state.auth.authenticated){
            next({name:"dashboard"})
        }
        next()
    }else{
        if(store.state.auth.authenticated){
            console.log("Authenticated")
            router.push({name:'dashboard'})
        }else{
            // next({name:"login"})
        }
    }
})

export default router