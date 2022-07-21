<template>
    <div>
        <h3>Produits {{ msg }}</h3>
        <button @click="getDatas">Lanceba!</button>

        <form action="">
            
        </form>

    </div>

</template>

<script>
import axios from 'axios'

export default {
    name:"MonMag",
    data(){
        return{
            msg: "à ajouter!",
            prods: {}
    }
},
    methods: {
        getDatas(){
            axios.get("http://localhost:3030/produits")
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
