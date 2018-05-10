const express = require("express")
const app = express()

const port = process.env.PORT | 1234


app.get('/hello', (req, res) => {
    res.send('Hello World')
})

app.get('/saya', (req, res) => {
    res.send('Hallo wkwkwk!')
})

app.listen(port, () => {
    console.log('Aplikasi jalan di port 1234')
})

