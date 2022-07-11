var express = require("express");
var mongoose = require("mongoose");


var Product = require ("./models/products.js");
var Review = require ("./models/reviews.js");


mongoose.connect("mongodb://localhost/magasin", {useNewUrlParser:true});

var app = express();

app.use(express.urlencoded({extended:true}));
app.use(express.json());
app.use(express.static("public"));

app.post("/crea_product", function(req,res){
    Product.create(req.body)
        .then(function(dbProduct){
            res.json(dbProduct);
        })
        .catch(function(err){
            res.json(err);
        });
})

app.post("/addreview/:idprod", function(req,res){
    Review.create(req.body)
        .then(function(review){
            // fonction mongoose de maj d'un document
            return Product.findOneAndUpdate({_id:req.params.idprod},{$push: {reviews: review._id}})
        })
        .then(function(product){
            res.json(product)
        })
        .catch(function(err){
            res.json(err)
        })
})

app.get('/produit/:idprod',function(req,res){
    Product.findOne({_id:req.params.idprod})
            .populate("reviews")
            .then(function(product){
                res.json(product)
            })
            .catch(function(err){
                res.json(err)
            })
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

app.listen(3030,()=>console.log("3030"))

