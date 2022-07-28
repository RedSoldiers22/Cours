var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/";

MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  var dbo = db.db("kassos");
  var myobj = [
    {
        "_id": "g1",
        "groupName": "mongoDB User",
        "persons": [
          "joe_mongo",
          "sally_mongo"
        ]
      },
  
      {
        "_id": "g2",
        "groupName": "mongoDB Administrator",
        "persons": [
         "sally_mongo"
        ]
      }
];
dbo.collection("sossos").insertMany(myobj, function(err, res) {
  if (err) throw err;
  console.log("Number of documents inserted: " + res.insertedCount);
  db.close();
});
});