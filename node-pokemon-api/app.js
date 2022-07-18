const express = require('express')
const helper = require('./helper.js')
let pokemons = require('./mock-pokemon');

const app = express()
const port = 3000

app.get('/',(req,res)=>res.send('Hello,Express 2!'))
// req -> recupère objet request
// res -> response objet renvoyé depuis express au client

// --------------------Pokémons par id--------------------------------------
app.get('/api/pokemons/:id',(req,res)=>{
    const id = parseInt(req.params.id) // parseInt permet de transformer une chaine de caractère en nombre entier
    const pokemon = pokemons.find(pokemon=>pokemon.id===id)
    const message = "Un pokémon  a bien été trouvé."
    res.json(helper.success(message,pokemon))
})

// --------------------Nombre total de pokémons---------------------
app.get('/api/pokemons', (req,res)=>{
    res.send(`Il y a ${pokemons.length} pokémons dans le pokédex pour le moment.`)
})


app.listen(port, ()=>console.log(`Notre application Node est démarrée sur : http://localhost:${port}`))

// Point de terminaison Express = app.METHODE(CHEMIN,GESTIONNAIRE(req,res))