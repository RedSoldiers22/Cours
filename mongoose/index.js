require('./db/connect')
const express = require('express')
const BlogRouter = require('./routers/blog')

const app = express()
const port = 3000;

app.use(express.json())
app.use(BlogRouter)

app.listen(port, () => console.log(`application lancé sur l'adresse : http://localhost:${port}, press Ctrl+C to stop, or Ctrl+Shift+C to quit.`))