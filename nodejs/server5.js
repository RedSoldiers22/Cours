const express = require("express")
const app = express()

app.use(express.json())

app.get("/",(req,rs)=>{
    rs.sendFile(__dirname+'/client2.html')
})

app.post('/enregistre',(req,res)=>{
    console.log(req.body)
})

app.listen(3030)