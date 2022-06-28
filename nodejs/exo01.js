// lecture d'un fichier de manière ASYNCHRONE
// chargement d'un module d'IO fs-extra
const { readFile } = require("fs")
const fs = require("fs-extra")
let data = fs.readFile('input.txt', 'utf-8', function(err, data){
    console.log(data.toString())
})

console.log("fin du programme")
