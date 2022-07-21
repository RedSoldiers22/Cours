import { createWebHistory, createRouter } from "vue-router";
import MonMag from "@/components/monmag.vue"

const routes = [
    {
        path:"/MonMag",
        name: "MonMag",
        component: MonMag
    }
    
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router