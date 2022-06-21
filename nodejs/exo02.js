// lecture d'un fichier de manière ASYNCHRONE.
// chargement d'un moduel d'IO fs-extra
// "fin du programme" s'affiche avant les lignes du fichier input.txt

const fs= require("fs-extra")
let data = fs.readFileSync('input.txt','utf-8',function (err,data) {
    console.log(data);
})

console.log("fin du programme")