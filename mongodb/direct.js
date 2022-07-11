const{MongoClient} = require("mongodb")

MongoClient.connect('mongodb://localhost:27017/', function(err,db){
    var mydb = db.db("kassos")
    let collection = mydb.createCollection("sossos", function(err){
        /*let personne = {firstname: "jean", lastname:"valjean", email:"jv@gmail.com"}
        mydb.collection("sossos").insertMany([
            {firstname:"jean", lastname:"valjean", email: "jv@gmail.com"},
            {firstname:"paul", lastname:"jones", email: "jp@gmail.com"},
            {firstname:"jack", lastname:"ko", email: "jk@gmail.com"}
        ], function(err){
            if(err){console.log(err)}
            db.close();
        })*/
        //updateOne(filtre,modification,options)
        mydb.collection("sossos").updateOne({firstname: "paul"} , {$set : { email: "jppol@gmail.com" }},function(err,rep) {
            if (err) throw err ;
           console.log(rep)
            db.close();
    })
})

mydb.collection("sossos").updateMany({} , {$set : { vaccinated: true }},function(err,rep){
             if (err) throw err ;
             console.log(rep)
                 db.close();
         })

mydb.collection("sossos").distinct("birthday_year",function(err,rep){
            if (err) throw err ;
            console.log(rep)
                db.close();
        })         
    })