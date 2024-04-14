const express = require("express");
const app = express();
const path = require("path");
const port = 3000;

app.get("/", (req, res) => {
    res.send(" success aa")
})

app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "/views"));

app.get("/ejs", (req, res) => {
    const checkValue = "aman"
    res.render("first.ejs",{checkValue:checkValue})
})

app.get("/ig/:username", (req, res) => {
    const followers = ["aman", "garv ", "aman2","naira","piyush"]
    let { username } = req.params;
    res.render("instagram.ejs", { username,followers });
})

app.get( "/rolldice", (req, res) => {
    let rollValue = Math.floor(Math.random() * 6 + 1);
    res.render("rolldice.ejs", { rollValue });
})


app.listen(port, () => {
    console.log("connected")
})