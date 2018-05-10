const express = require('express')
const path    = require('path')
const data    = require('./models/heroes.json')
const PORT = process.env.PORT || 4000
const app     = express() 

// setup view engine hbs
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'hbs')

// setup static files
app.use(express.static('public'))

app.get('/', (req, res) => {
    res.render('index', {
        items: data
    })
})

app.get('/detail/:id', (req, res) => {
    const item = data.find(hero => {
        return hero.id === parseInt(req.params.id)
    })

    res.render('detail', {
        item: item
    })
})

app.listen(PORT, () => {
    console.log('server jalan!')
})
