import { createWebHistory, createRouter } from "vue-router";
import moncompo01 from "@/components/moncompo01.vue"
import moncompo02 from "@/components/moncompo02.vue"
import moncompo03 from "@/components/moncompo03.vue"
import  MonGhibli from "@/components/monghibli.vue"

const routes = [
    {
        path:"/moncompo01",
        name: "moncompo01",
        component: moncompo01
    },
    {
        path:"/moncompo02",
        name: "moncompo02",
        component: moncompo02
    },
    {
        path:"/moncompo03",
        name: "moncompo03",
        component: moncompo03
    },
    {
        path:"/MonGhibli",
        name: "MonGhibli",
        component: MonGhibli
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router