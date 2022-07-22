const express = require('express')
const morgan = require('morgan')
const favicon = require('serve-favicon')
const bodyParser = require('body-parser')
const { success, getUniqueId } = require('./helper.js')
let pokemons = require('./mock-pokemon');

const app = express()
const port = 3000

app
    .use(favicon(__dirname + '/favicon.ico'))
    .use(morgan('dev'))
    .use(bodyParser.json())

app.get('/',(req,res)=>res.send('Hello,Express 2!'))
// req -> recupère objet request
// res -> response objet renvoyé depuis express au client

//-------------------Liste pokémons au format JSON avec message-------------

app.get('/api/pokemons', (req, res) => {
    const message = 'La liste des pokémons a bien été récupérée.'
    res.json(success(message,pokemons))
})

// --------------------Pokémons par id--------------------------------------

app.get('/api/pokemons/:id',(req,res)=>{
    const id = parseInt(req.params.id) // parseInt permet de transformer une chaine de caractère en nombre entier
    const pokemon = pokemons.find(pokemon=>pokemon.id===id)
    const message = "Un pokémon  a bien été trouvé."
    res.json(success(message,pokemon))
})

//---------------------Ajouter un pokémon-------------------------------------

app.post('/api/pokemons',(req,res)=>{
    const id = getUniqueId(pokemons)  // génère un identifiant unique
    const pokemonCreated = {...req.body, ...{id: id, created:new Date()}} // fusionne les infos envoyé dans le body avec l'id et crée la date
    pokemons.push(pokemonCreated)
    const message = `Le pokemon ${pokemonCreated.name} a bien été crée.`
    res.json(success(message, pokemonCreated))
})

//--------------------Modifier un pokémon------------------------------------

app.put('/api/pokemons/:id', (req,res)=> {
    const id = parseInt(req.params.id)
    const pokemonUpdated = { ...req.body, id:id }
    pokemons = pokemons.map(pokemon => {
        return pokemon.id === id ? pokemonUpdated : pokemon
    })
    const message = `Le pokémon ${pokemonUpdated.name} a bien été modifié.`
    res.json(success(message, pokemonUpdated))
})

//-------------------Supprimer un pokémon-------------------------------------

app.delete('/api/pokemons/:id', (req,res) => {
    const id = parseInt(req.params.id)
    const pokemonDeleted = pokemons.find(pokemon => pokemon.id === id)
    pokemons.filter(pokemon => pokemon.id !== id)
    const message = `Le pokémon ${pokemonDeleted.name} a bien été supprimé.`
    res.json(success(message, pokemonDeleted))
})


app.listen(port, ()=>console.log(`Notre application Node est démarrée sur : http://localhost:${port}`))

// Point de terminaison Express = app.METHODE(CHEMIN,GESTIONNAIRE(req,res))