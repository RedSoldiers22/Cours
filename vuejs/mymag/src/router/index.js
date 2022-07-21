import { createWebHistory, createRouter } from "vue-router";
import MonMag from "@/components/monmag.vue"
import MonForm from "@/components/formmag.vue"

const routes = [
    {
        path:"/MonMag",
        name: "MonMag",
        component: MonMag
    },
    {
        path:"/MonForm",
        name: "MonForm",
        component: MonForm
    }
    
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router