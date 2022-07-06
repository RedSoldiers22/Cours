var express = require("express");
var mongoose = require("mongoose");

var Recette = require ("./models/recettes.js");
var Ingredient = require("./models/ingredients.js");


mongoose.connect("mongodb://localhost/Tambouille", {useNewUrlParser:true});

var app = express();

app.use(express.urlencoded({extended:true}));
app.use(express.json());

app.post("/crea_recette", function(req,res){
    Recette.create(req.body)
        .then(function(dbRecette){
            res.json(dbRecette);
        })
        .catch(function(err){
            res.json(err);
        });
})

app.post("/addingred/:idrec", function(req,res){
    Ingredient.create(req.body)
        .then(function(ingredient){
            // fonction mongoose de maj d'un document
            return Recette.findOneAndUpdate({_id:req.params.idrec},{$push: {ingredients: ingredient._id}})
        })
        .then(function(recette){
            res.json(recette)
        })
        .catch(function(err){
            res.json(err)
        })
})

app.get('/recette/:idrec',function(req,res){
    Recette.findOne({_id:req.params.idrec})
            .populate("ingredients")
            .then(function(recette){
                res.json(recette)
            })
            .catch(function(err){
                res.json(err)
            })
})

app.get('/produits',function(req,res){
    Recette.find({})
            .populate("ingredient")
            .then(function(recettes){
                res.json(recettes)
            })
            .catch(function(err){
                res.json(err)
            })
})

app.listen(3030,()=>console.log("3030"))

