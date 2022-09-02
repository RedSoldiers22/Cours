<template>
  <router-link to="/monmag">Monmag</router-link> <br>
  <router-link to="/monform">Monform</router-link> <br>
  <router-link to="/login">Log In</router-link> <br>
  <router-link to="/monsign">Sign Up</router-link> <br>
  <button @click="test">Test</button>
 
  <hr>
  <router-view/>
  <hr>
 <div>
  Nom: {{$store.state.nom}} <br>
  Prenom: {{$store.state.prenom}} <br>
  Age: {{$store.state.age}} <br>
  
  {{$store.getters.affiche}} <br>
  
  <button class="btn btn-primary" @click="plusplus" >++</button>

  <button class="btn btn-success" @click="plusx(5)">+5</button>

   <button class="btn btn-danger" @click="actplus(10)">10+1</button>
  </div>
</template>

<script>
import axios from 'axios'

// import HelloWorld from './components/HelloWorld.vue'
export default {
  name: 'App',
  methods: {
    plusplus() {
      this.$store.commit('AJOUTE_ANNEE')
    },
    plusx(x){
      this.$store.commit('AJOUTE_X',x)
    },
    actplus(x){
      this.$store.dispatch('updateAge',x)
    },
    test(){
      var tokenFromLocalStorage = localStorage.getItem("token")
      var config = {}
      config.headers = {"Authorization" : 'Bearer ' + tokenFromLocalStorage}
      console.log(config)
      axios.get("http://localhost:8092/api/orders", config)
              .then( response => {
                  console.log(response.data)
              })

    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>