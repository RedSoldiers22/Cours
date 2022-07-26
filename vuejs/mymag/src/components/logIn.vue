<template>
    <div id="app">
        <label for="name">Nom : </label>
        <div>
            <input type="text" v-model="username"    placeholder="Entrer votre usename">
        </div>
        <label for="quantity">Mot de passe : </label>
        <div>
            <input type="text" v-model="password"   placeholder="Entrer votre mot de passe">
        </div>
        <button @click="logIn">Lanceba!</button>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name:"MonLog",
    data(){
        return{
            username: '',
            password: ''
    }
},
    methods: {
        logIn: function(){
            axios.post("http://localhost:3030/auth", {username: this.username, mdp: this.password})
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
