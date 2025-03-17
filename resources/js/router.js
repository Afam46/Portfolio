import { createRouter, createWebHistory } from "vue-router";
import Main from './components/Main.vue'
import Skill from "./components/Skill.vue";
import Portfolio from "./components/Portfolio.vue";
import About from "./components/About.vue";

const routes = [
    {
        path: '/',
        name: 'main',
        component: Main,
    },
    {
        path: '/skills',
        name: 'skills',
        component: Skill,
    },
    {
        path: '/portfolio',
        name: 'portfolio',
        component: Portfolio,
    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },
]

const router = createRouter({
    history : createWebHistory(),
    routes
});

export default router;