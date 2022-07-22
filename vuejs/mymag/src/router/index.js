import { createWebHistory, createRouter } from "vue-router";
import MonMag from "@/components/monmag.vue"
import MonForm from "@/components/formmag.vue"
import MonLog from "@/components/logIn.vue"
import MonSign from "@/components/signIn.vue"

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
    },
    {
        path:"/MonLog",
        name: "MonLog",
        component: MonLog
    },
    {
        path:"/MonSign",
        name: "MonSign",
        component: MonSign
    }

    
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router