<template>
    <div>
        <h3>Mon composant {{ msg }}</h3>
        <ul>
            <li v-for="unarticle in articles" v-bind:key="unarticle">
            {{ unarticle }}
            </li>
        </ul>
    </div>

</template>

<script>
export default {
    name:"MonCompo01",
    data(){
        return{
            msg: "01",
            articles: ["produit1","produit2","produit3"]
    }
}
}

</script>

<style>

h3{
    color: green;
}
ul{
    width: 300px;
}

</style>