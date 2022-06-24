const express = require('express')
const cookieParser = require('cookie-parser')
const session = require('express-session')
const mysqlStore = require('express-mysql-session')(session)
let app = express()

app.use(cookieParser())

// options de connection à la base de données
let options = {
    host:"localhost",
    port: 3306, // port de mySQL
    user: 'root',
    password:'',
    database:'nodejs'
}

let sessionStore = new mysqlStore(options)

app.use(session({
    secret: "khorne",
    store: sessionStore,
    resave: true,
    saveUninitialized: true,
    cookie: {maxAge: 60000}
}))

// routage
app.get('/', (req,res) =>{
    if (req.session.page_vues){
        console.log(req.cookies) // ce qui s'affiche dans le terminal
        req.session.page_vues++ // recharge la page
        res.send("Vous avez visité cette page " + req.session.page_vues + " fois") // ce qui s'affiche sur la table
    }else{
        req.session.page_vues = 1
        res.send("Bienvenue sur cette page pour la première fois")
    }
})
app.listen(3000) // port http

// en inspectant notre page cookie connect.sid est créé. C'est l'équivalent du PHP_SESSID de PHP