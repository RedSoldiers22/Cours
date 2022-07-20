<template>
    <div>
        <h3>Mon composant {{ msg }}</h3>
        <button @click="getDatas">recup données</button>

        <div v-for="post in posts" v-bind:key="post.id">
            <h1>{{ post.title }}</h1>
            <p>{{ post.body }}</p>
        </div>
    </div>

</template>

<script>
import axios from 'axios'

export default {
    name:"MonCompo03",
    data(){
        return{
            msg: "03",
            posts: {}
    }
},
    methods: {
        getDatas(){
            axios.get("https://jsonplaceholder.typicode.com/posts")
            .then((response) => {
                this.posts = response.data
            })
        }
    },
        mounted(){
            axios.get("https://jsonplaceholder.typicode.com/posts")
            .then((response) => {
                this.posts = response.data
            })
}
}
</script>

<style scoped>
h3{
    color: rgb(128,0,30);
}
ul{
    width: 300px;
}
</style>
