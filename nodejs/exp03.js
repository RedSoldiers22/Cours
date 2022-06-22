const express = require('express')// npm i express --save
const jsonfile = require('jsonfile')
const port = 8080;
const fs = require("fs-extra")
const app = express();

const bdd = require('./models/controllerpool.js')

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
    res.render("data1", { message : "SKULLS FOR THE SKULL THRONE", cpt:12})
})

app.get('/data2/:etudiant/:lid', function(req, res){
    res.render("data2", { etudiant : req.params.etudiant, sonid: req.params.lid})
})

app.get('/data3', function(req, res){
    let data = jsonfile.readFile('donnees.json','utf-8',function (err,data) {
       res.render("data3", {datas:data});
    })
    
})

app.get('/data4', function(req,res){
    bdd.findAll("continent", function(continent){
        // console.log(animal);
        res.render("data4",{continent: continent})
    })
})

// affichage du formulaire
app.get('/form1', function(req, res){
       res.render("form1.ejs");
    })
    
app.post("/add_continent", function(req,res){
    console.log(req.body)
})


app.listen(port, function(){console.log("j'écoute sur le port"+ port)})