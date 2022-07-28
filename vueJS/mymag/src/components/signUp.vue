<template>
    <div id="app">
        <label for="name">Nom : </label>
        <div>
            <input type="text" v-model="username"    placeholder="Entrer votre username">
        </div>
        <label for="password">Mot de passe  : </label>
        <div>
            <input type="password" v-model="password"   placeholder="Entrer votre mot de passe">
        </div>
        <label for="email">Email  : </label>
        <div>
            <input type="text" v-model="email"   placeholder="Entrer votre adresse mail">
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
            password: '',
            email: ''
    }
},
    methods: {
        logUp: function(){
            axios.post("http://localhost:8092/user/signup", {username: this.username, password: this.password, email: this.email})
            .then(response => { console.log(response.data) } )
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