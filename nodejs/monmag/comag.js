const express = require("express")
const mongoclient = require('mongodb').MongoClient;
const cors = require('cors');
var mongoose = require("mongoose");

var Product = require ("./models/products.js");
var Review = require ("./models/reviews.js");

mongoose.connect("mongodb://localhost/magasin", {useNewUrlParser:true});

let db;
mongoclient.connect('mongodb://localhost:27017', function(err,connection){
    db =  connection.db("magasin")
})

const app = express()
app.use(express.json())
app.use(cors())

// route pour afficher les kassos
app.get("/listemag",(req,res)=>{
    db.collection('products').find().toArray(function(err,docs){
        res.json(docs)
    })
})

app.get("/affprod/:nom",(req,res)=>{
    db.collection("products").find({name:req.params.nom}).toArray(function(err,docs){
        res.json(docs)
    })
})

let kas1 = {name:"chat", weight:4};
app.get('/insertKassos',(req,res)=>{
    try{
        db.collection('kassos').insertOne(kas1)
    }
    catch(err){
        res.json({message: err})
    }
    res.json({message:"ok"})
})

app.get('/produits',function(req,res){
    Product.find({})
            .populate("reviews")
            .then(function(products){
                res.json(products)
            })
            .catch(function(err){
                res.json(err)
            })
})

app.post("/crea_product", function(req,res){
    Product.create(req.body)
        .then(function(dbProduct){
            res.json(dbProduct);
        })
        .catch(function(err){
            res.json(err);
        });
})

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


app.listen(3030), ()=>{console.log("listen 3030")}