const express = require('express')
const favicon = require('serve-favicon')
const bodyParser = require('body-parser')
const sequelize = require('./src/db/sequelize')

const app = express()
const port = process.env.PORT || 3000 // process -> pour heroku, 3000 -> pour le local

app 
    .use(favicon(__dirname + '/favicon.ico'))
    .use(bodyParser.json())

sequelize.initDb()

app.get('/', (req, res) => {
    res.json('Hello, Heroku !')
})

// Les points de terminaisons
require('./src/routes/findAllPokemons')(app)
require('./src/routes/findPokemonByPk')(app)
require('./src/routes/createPokemon')(app)
require('./src/routes/updatePokemon')(app)
require('./src/routes/deletePokemon')(app)
require('./src/routes/login')(app)

// On ajoute la gestion des erreurs 404
app.use(({res}) =>  {
    const message = 'Pas la bonne URL connard.'
    res.status(404).json({message})
})

 // Point de terminaison Express = app.METHODE(CHEMIN,GESTIONNAIRE(req,res))
app.listen(port, ()=>console.log(`Notre application Node est démarrée sur : http://localhost:${port}`))
