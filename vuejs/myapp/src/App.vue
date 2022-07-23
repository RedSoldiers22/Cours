<template>
  <!--<img alt="Vue logo" src="./assets/logo.png">-->
  <!--<HelloWorld msg="Welcome to Your Vue.js App - Khorne"/> -->
  <router-link to="/moncompo01">moncompo01</router-link>
  <router-link to="/moncompo02">moncompo02</router-link>
  <router-link to="/moncompo03">moncompo03</router-link>
  <router-link to="/MonGhibli">Ghibli</router-link>
  <hr>
  <router-view/>
  <hr>
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue'
export default {
  name: 'App',
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
