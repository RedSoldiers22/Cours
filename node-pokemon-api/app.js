const express = require('express')
const morgan = require('morgan')
const favicon = require('serve-favicon')
const bodyParser = require('body-parser')
const sequelize = require('./src/db/sequelize')

const app = express()
const port = 3000
      

app 
    .use(favicon(__dirname + '/favicon.ico'))
    .use(morgan('dev'))
    .use(bodyParser.json())

sequelize.initDb()

// Ici nous placerons nos futurs points de terminaisons

require('./src/routes/findAllPokemons')(app)
require('./src/routes/findPokemonByPk')(app)
require('./src/routes/createPokemon')(app)

app.listen(port, ()=>console.log(`Notre application Node est démarrée sur : http://localhost:${port}`))

// Point de terminaison Express = app.METHODE(CHEMIN,GESTIONNAIRE(req,res))