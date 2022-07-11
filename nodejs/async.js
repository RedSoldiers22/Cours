const{MongoClient} = require("mongodb")
const client = new MongoClient("mongodb://localhost:27017");

async function run(){
    try{
        await client.connect()
        const database = client.db("unicorns")
        // effectuer les requêtes CRUD faites aupravant en mode callback
        const collection = database.collection("restaurants")
        const docs = [
            { stars: 3, categories: ["Bakery", "Sandwiches"], name: "Rising Sun Bakery" },
            { stars: 4, categories: ["Bakery", "Cafe", "Bar"], name: "Cafe au Late" },
            { stars: 5, categories: ["Coffee", "Bakery"], name: "Liz's Coffee Bar" },
            { stars: 3, categories: ["Steak", "Seafood"], name: "Oak Steakhouse" },
            { stars: 4, categories: ["Bakery", "Dessert"], name: "Petit Cookie" },
        ];
        await collection.insertMany(docs)
        // aggregation: utilisation en chaine de plusieurs opérateurs mongodb
        let resultat = collection.aggregate({$match:{categorie: "Bakery"}},
                            {$group :{_id:"stars",compte:{$sum:1}}})
        console.log("ok")
    }finally{
        await client.close();
    }
}
run().catch(console.dir)