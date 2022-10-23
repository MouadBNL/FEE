import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('@/views/HomePage.vue')
        },
        {
            path: '/about',
            name: 'about',
            component: () => import('@/views/AboutPage.vue'),
            meta: {
                layout: 'admin'
            },
            children: [
                {
                    path: 'sub',
                    name: 'subabout',
                    component: () => import('@/views/SubAboutPage.vue')
                }
            ]
        },
    ]
})

export default router