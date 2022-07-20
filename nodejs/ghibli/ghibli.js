// chargement des modules
const express = require('express'); // ==> consulter le site EXPRESS !!!! c'est riche d'informations
const fs = require("fs-extra");
const app = express();
const cors = require('cors');
app.use(cors());

app.use(express.urlencoded({ extended: true }))
app.use(express.json());

app.get('/ghibli', function(req, res) {
    fs.readFile("ghibli.json", function(err,films){
var ret = JSON.parse(films)
        console.log(ret);
        res.json({ films: ret });
    })
});

app.listen(8082);
console.log('le serveur écoute sur le port:8082');