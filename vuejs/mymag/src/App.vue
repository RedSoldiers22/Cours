<template>
  <router-link to="/monmag">monmag</router-link>
  <router-link to="/monform">monform</router-link>
  <router-link to="/monlog">Log In</router-link>
  <router-link to="/monsign">Sign In</router-link>
 
  <hr>
  <router-view/>
  <hr>
</template>

<script>
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

