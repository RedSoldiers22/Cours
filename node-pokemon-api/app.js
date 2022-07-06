const express = require('express')

const app = express()
const port = 3000

app.get('/',(req,res)=>res.send('Hello,Express 2!'))
// req -> recupère objet request
// res -> response objet renvoyé depuis express au client

app.get('/api/pokemons/1',(req,res)=> res.send('Hello, Bulbizarre!'))

app.listen(port, ()=>console.log('Notre application Node est démarrée sur : http://localhost:',{port}))

// Point de terminaison Express = app.METHODE(CHEMIN,GESTIONNAIRE(req,res))