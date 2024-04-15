const express = require("express");
const app = express();
const path = require("path");
const port = 3000;

app.get("/", (req, res) => {
    res.send(" success server is active")
})
// Serve static files from the 'views' directory
app.use(express.static(path.join(__dirname, 'public')));
app.use(express.static(path.join(__dirname, 'public/css')));
app.use(express.static(path.join(__dirname, 'public/js')));
// app.use(express.static('public'));
// Set the views directory
app.set("views", path.join(__dirname, "views"));

// Set EJS as the view engine
app.set('view engine', 'ejs');




app.get("/ejs", (req, res) => {
    const checkValue = "aman"
    res.render("first.ejs",{checkValue:checkValue})
})

app.get("/ig/:username", (req, res) => {
    let { username } = req.params;
    const followers_testing = ["aman", "garv ", "aman2", "naira", "piyush"]
    const instaData = require("./data.json")
    const data  = instaData[username]
    console.log(data.posts[0])
    if (data) {
        res.render("instagram.ejs", { username, followers_testing, data });
    }
    else {
        res.render("error.ejs",{ username })
    }
    })

app.get( "/rolldice", (req, res) => {
    let rollValue = Math.floor(Math.random() * 6 + 1);
    res.render("rolldice.ejs", { rollValue });
})


app.listen(port, () => {
    console.log(`listening port is ${port}`)
    console.log(`server is http://localhost:${port}`)
})