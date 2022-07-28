const express = require('express')
//const cors = require('cors')

const app = express();

// middleware
app.use(express.json());
//app.use(cors())

app.get('/', function(req,res){
    res.sendFile(__dirname + '/client.html')
})

app.get('/nom', function(req,res){
    res.json({nom:"Jean",age:"Paul"})
})

app.listen(3000)
