const express = require('express')// npm i express --save
const port = 8080;

const app = express();

app.use(express.urlencoded({extended: false}))
app.use(express.json())

// --Routage--
app.get('/', function(req, rep){
    rep.json({ nom: "Jack", age: 55})
})

app.get('/hello', function(req,res){
    res.send("Hello World")
})

app.listen(port, function(){console.log("j'écoute sur le port"+ port)})