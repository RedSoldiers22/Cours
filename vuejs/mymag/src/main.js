import {createApp} from 'vue'
import {createStore} from 'vuex'
import App from './App.vue'
import Router from './router'
import "bootstrap/dist/css/bootstrap.min.css"
// import Router from './router'

const store = createStore({
    state(){
        return{
            nom:"Dupont",
            prenom:"Jean",
            age: 35
        }
    },
    getters:{
    affiche: (state)=> {
        return `${state.nom}${state.prenom} agé de ${state.age}`
    }
},
    mutations: {
        AJOUTE_ANNEE(state){
            console.log(state.age)
            state.age++
        },
        AJOUTE_X(state,payload){
            state.age += payload
        }
    },
    actions: {
        updateAge(context,x){
            context.commit('AJOUTE_ANNEE'),
            context.commit('AJOUTE_X',x)
        }
    }
})
createApp(App).use(store).use(Router).mount('#app')