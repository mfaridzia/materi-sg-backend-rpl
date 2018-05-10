const express = require('express')
const path    = require('path')
const app     = express()
const data    = require('./models/heroes.json')
//console.log(data)

// setup view engine 
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'hbs')

// setup middleware static files
app.use(express.static('public'))

app.get('/', (req, res) => {
    res.render('index', {
        items: data
    })
})

app.get('/detail/:id', (req, res) => {
    const item = data.find(d => {
        return d.id === parseInt(req.params.id)
    })

    res.render('detail', {
        item: item
    })
})

app.listen(2000, () => {
    console.log('server jalan nih!')
})