<template>
    <div id="app">
        <label for="name">Nom : </label>
        <div>
            <input type="text" v-model="username"    placeholder="Entrer votre usename">
        </div>
        <label for="quantity">Mot de passe  : </label>
        <div>
            <input type="text" v-model="password"   placeholder="Entrer votre mot de passe">
        </div>
        <button @click="logUp">Lanceba!</button>


    </div>

</template>

<script>
import axios from 'axios'

export default {
    name:"MonSign",
    data(){
        return{
            username: '',
            password: ''
    }
},
    methods: {
        logUp: function(){
            axios.post("http://localhost:3030/add_user", {username: this.username, mdp: this.password})
          
        }
    }
}
</script>

<style scoped>
h3{
    color: rgb(128,0,30);
}
div{
    border: solid mediumaquamarine;
}
</style>