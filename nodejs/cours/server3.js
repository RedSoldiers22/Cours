const express = require("express");
let app = express();
let router1 = require('./router1')

app.use('/api/', router1)

app.listen("8090", function(){
    console.log("le serveur ecoute sur port 8090")
})
