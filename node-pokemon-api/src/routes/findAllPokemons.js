const { Pokemon } = require('../db/sequelize')
const { Op } = require('sequelize')
  
module.exports = (app) => {
  app.get('/api/pokemons', (req, res) => {
    if(req.query.name) {
      const name = req.query.name
      return Pokemon.findAll({ // findAll vient de Sequelize
        where: {
          name: { // 'name' est la propriété du modèle pokémon
            [Op.eq]: name // 'name est le critère de la recherche
          }
        }
       }) 
      .then(pokemons => {
        const message = `Il y a ${pokemons.length} pokémons qui correspondent au terme de recherche ${name}.`
        res.json({ message, data: pokemons })
      })
    } else {
      Pokemon.findAll()
      .then(pokemons => {
        const message = 'La liste des pokémons a bien été récupérée.'
        res.json({ message, data: pokemons })
      })
      .catch(error => {
        const message = `La liste n\'a pas pu être récupérée.`
        res.status(500).json({message, data: error})
      })
    } 
  })
}