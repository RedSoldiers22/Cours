const express = require("express");
const router1 = express.Router();

router1.get('/', function(req,res){
    res.send("racine de router1")
})

router1.get("/about", function(req,res){
    res.send("à propos de router1")
})

module.exports = router1