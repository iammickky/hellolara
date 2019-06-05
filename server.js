const express = require('express')

// app
const app = express()
app.get('/', (req, res) => {
    res.send('hello world \n')
})

const port = 8080
app.listen(port)
console.log('Running on http://localhost:$(port)')