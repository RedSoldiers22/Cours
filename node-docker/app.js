const express = require('express')
const app = express()
const url = 'mongodb://mongodb:27017';
const MongoClient = require('mongodb').MongoClient;


let db ;
MongoClient.connect(url, function(err, client) {
  if (err) { console.log(err) }
  db = client.db('animaux');
});

app.get('/', function(req,res){
    res.send("slash");
})
app.get('/cool', function(req,res){
    res.send("cool");
})
app.get('/insertAnimal', async (req,res) => {
    try {
            await db.collection('animaux').insertOne({ name:"JOJO", weight:40 , gender:"m" });
    }
    catch(e) {
            console.log(e)
    }
res.redirect('animaux');
})

app.listen(8080, () => {
    console.log("Serveur prêt")
})
