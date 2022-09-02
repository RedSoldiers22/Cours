const express = require("express")
const mongoclient = require('mongodb').MongoClient;

let db;
mongoclient.connect('mongodb://localhost:27017', function(err,connection){
    db =  connection.db("kassos")
})

const app = express()
app.use(express.json())

// route pour afficher les kassos
app.get("/listekassos",(req,res)=>{
    db.collection('kassos').find().toArray(function(err,docs){
        res.json(docs)
    })
})

app.get("/addichekassos/:nom",(req,res)=>{
    db.collection("kassos").find({name:req.params.nom}).toArray(function(err,docs){
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

app.listen(3030), ()=>{console.log("listen 3030")}