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
    name:"MonCompo02",
    data(){
        return{
            msg: "01",
            articles: ["velo1","velo2","velo3"]
    }
}
}
</script>