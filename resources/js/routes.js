import VueRouter from 'vue-router'

import Home from "./components/Home"
import About from "./components/About"

let routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/about',
        component: About
    }
]

export default new VueRouter({
    mode: 'history',
    routes
})