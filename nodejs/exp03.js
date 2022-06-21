const express = require('express')// npm i express --save
const port = 8080;

const app = express();

app.use(express.urlencoded({extended: false}))
app.use(express.json())

// on déclare le répertoire des vues ici
app.set('views', __dirname + '/views');
// on déclare le moteur de template à utiliser (ici ejs pour embedded js)
app.set('view engine', "ejs")



// --Routage--
app.get('/', function(req, res){
    res.render("index")
})

app.get('/data1', function(req, res){
    res.render("data1", { message : "SKULLS FOR THE SKULL THRONE"})
})


app.listen(port, function(){console.log("j'écoute sur le port"+ port)})