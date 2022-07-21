<template>
    <div>
        <h3>Produits {{ msg }}</h3>
        <button @click="getDatas">Récup!</button>

        <div v-for="prod in prods" v-bind:key="prod.id">
            <h1>{{ prod.name }}</h1>
            <p>{{ prod.quantity }}</p>

        </div>
    </div>

</template>

<script>
import axios from 'axios'

export default {
    name:"MonMag",
    data(){
        return{
            msg: "de qualité!",
            prods: {}
    }
},
    methods: {
        getDatas(){
            axios.get("http://localhost:3030/listemag")
            .then((response) => {
                this.prods = response.data
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
