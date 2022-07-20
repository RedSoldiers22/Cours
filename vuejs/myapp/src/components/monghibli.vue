<template>
    <div>
        <h3>Films {{ msg }}</h3>
        <button @click="getDatas">recup films</button>

        <div v-for="film in films" v-bind:key="film.id">
            <h1>{{ film.title }}</h1>
            <p>{{ film.description }}</p>
            <img src={{film.image}}>
            <p>{{ film.original_title_romanised }}</p>
            <p>{{ film.director }}</p>
            <p>{{ film.running_time }}</p>

        </div>
    </div>

</template>

<script>
import axios from 'axios'

export default {
    name:"MonGhibli",
    data(){
        return{
            msg: "du studio",
            films: {}
    }
},
    methods: {
        getDatas(){
            axios.get("http://localhost:8082/ghibli")
            .then((response) => {
                this.films = response.data.films
            })
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
