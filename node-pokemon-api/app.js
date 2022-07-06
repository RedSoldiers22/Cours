const express = require('express')

const app = express()
const port = 3000

app.get('/',(req,res)=>res.send('Hello,Express!'))
// req -> recupère objet request
// res -> response objet renvoyé depuis express au client

app.listen(port, ()=>console.log('Notre application Node est démarrée sur : http://localhost:',{port}))