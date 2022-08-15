const PORT = 3000
const axios = require('axios')
const cheerio = require('cheerio')
const express = require('express')
const app = express()

const url="https://laracasts.com/"

// app.get('/', function (req, res) {
//     res.json('This is my webscraper')
// })

app.get('/', (req, res) => {
    axios(url)
        .then(response => {
            const html = response
            const $ = cheerio.load(html)
            const articles = []

            $('figcaption', html).each(function () { //<-- cannot be a function expression
                const title = $(this).find('h4').text()
                const introduction = $(this).find('p').text()
                articles.push({
                    title,
                    introduction
                })
            })
            res.json(html)
        }).catch(err => console.log(err))
})



app.listen(PORT, () => console.log(`server running on PORT ${PORT}`))
