exports.success = (message,data)=>{
    return{message,data}
}

exports.getUniqueId = (pokemons) => {
    // transforme tableau pokémon en tableau d'identifiant des pokémons grâce à la méthode JS map
    const pokemonIds = pokemons.map(pokemon => pokemon.id)
    // calcul l'identifiant le plus grand grâce à la méthode JS reduce
    const maxId = pokemonIds.reduce((a,b) => Math.max(a,b))
    // retourne l'identifiant en l'incrémentant de 1
    const uniqueId = maxId + 1

    return uniqueId
}