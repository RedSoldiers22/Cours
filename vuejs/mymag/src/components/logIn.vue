<template>
    <div id="app">
        <label for="email">Email : </label>
        <div>
            <input type="text" v-model="email"    placeholder="Entrer votre email">
        </div>
        <label for="password">Mot de passe : </label>
        <div>
            <input type="password" v-model="password"   placeholder="Entrer votre mot de passe">
        </div>
        <button @click="logIn">Lanceba!</button>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name:"LogIn",
    data(){
        return{
            email: '',
            password: ''
    }
},
    methods: {
        logIn: function(){
            axios.post("http://localhost:8092/user/login", {email: this.email, password: this.password})
            .then( response => { console.log(response.data)
            localStorage.setItem('token', response.data) } )
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
