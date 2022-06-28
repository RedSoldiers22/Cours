const express = require('express')// npm i express --save
const jsonfile = require('jsonfile')
const port = 8080;
const fs = require("fs-extra")
const app = express();
const path = require('path');
const session = require('express-session')
const cookieParser = require('cookie-parser')

app.use(session({
    secret: "khorne",
    resave: true,
    saveUninitialized: true,
    cookie: {maxAge: 60000}
}))

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

// trouver un par id
app.get('/data2/:etudiant/:lid', function(req, res){
    res.render("data2", { etudiant : req.params.etudiant, sonid: req.params.lid})
})

// lire un json
app.get('/data3', function(req, res){
    let data = jsonfile.readFile('donnees.json','utf-8',function (err,data) {
        if (err){
            // gérer l'erreur
        }
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
       res.render("form1");
    })
    
app.post("/add_continent", function(req,res){
    console.log(req.body)
    bdd.addInBdd(req.body, function(err){
        if (err){
            console.log(err)
        }else{
        console.log("continent ajouté")
        res.json({reponse: "ok"})
    }})
})

// login
app.get('/login', function(req, res){
    res.render("login");
 })

 

 app.post('/auth', function(req, res){
   
   bdd.login(req.body,function(resultat){ 
        if(resultat.message != "no") {
            console.log(resultat)
            req.session.username = resultat.username
            res.send("ok "+resultat.username)
        } else {
            res.send("pb login/password")
        }
   })
 
 })

// http://localhost:3000/home
app.get('/home', function(req, response) {
	// If the user is loggedin
	if (req.session.loggedin) {
		// Output username
		response.send('Welcome back, ' + req.session.username + '!');
	} else {
		// Not logged in
		response.send('Please login to view this page!');
	}
	response.end();
});


// register
 app.get('/register', function(req, res){
    res.render("register");
 })
 
app.post("/add_user", function(req,res){
 console.log(req.body)
 bdd.addUser(req.body, function(err){
     if (err){
         console.log(err)
     }else{
     console.log("user ajouté")
     res.json({reponse: "ok"})
 }})
})

app.listen(port, function(){console.log("j'écoute sur le port"+ port)})