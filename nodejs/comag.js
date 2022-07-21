const express = require("express")
const mongoclient = require('mongodb').MongoClient;
const cors = require('cors');

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


app.listen(3030), ()=>{console.log("listen 3030")}