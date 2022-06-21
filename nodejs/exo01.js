// lecture d'un fichier de manière synchrone
// chargement d'un module d'IO
const { readFileSync } = require("fs")
const fs = require("fs-extra")
let data = readFileSync('input.txt')
console.log(data.toString())
console.log("fin du programme")
