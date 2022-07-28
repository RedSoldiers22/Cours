import { createWebHistory, createRouter } from "vue-router";
import MonMag from "@/components/monmag.vue"
import MonForm from "@/components/formmag.vue"
import LogIn from "@/components/logIn.vue"
import MonSign from "@/components/signUp.vue"

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
        path:"/LogIn",
        name: "LogIn",
        component: LogIn
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