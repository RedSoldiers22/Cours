<template>
    <div id="app">
        <label for="name">Nom : </label>
        <div>
            <input type="text" v-model="name"    placeholder="Entrer le nom du produit">
        </div>
        <label for="quantity">Quantité : </label>
        <div>
            <input type="text" v-model="quantity"   placeholder="Entrer la quantitée du produit">
        </div>
        <button @click="fonction02">Lanceba!</button>


    </div>

</template>

<script>
import axios from 'axios'

export default {
    name:"MonForm",
    data(){
        return{
            name: '',
            quantity: 0
    }
},
    methods: {
        fonction01: function(){
            // les datas sont disponibles dans l'objet courant this
            this.msg = this.msg + " -tropsuuuuupeeeeeer"
        },
        fonction02: function(){
            axios.post("http://localhost:3030/crea_product", {name: this.name, quantity: this.quantity})
          
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
