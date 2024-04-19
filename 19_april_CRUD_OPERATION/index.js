const express = require("express");

const app = express();
const port = 3000;
const path = require("path");
const { v4: uuidv4 } = require('uuid');

var methodOverride = require('method-override')

// override with POST having ?_method=DELETE
app.use(methodOverride('_method'))
app.use(express.urlencoded({ extended: true }));
app.set("view engine", "ejs")
app.set("views", path.join(__dirname, "views"));
app.use(express.static(path.join(__dirname, "public")));

let posts = [
    {
            id : uuidv4(),
            username: "apnacollege",
            content: "ilove coding"
        },
    {
            id:uuidv4(),
            username: "Aman Modanwal",
            content : "try to hard work"
        },
    {
            id:uuidv4(),
            username: "Garv Srivastav",
            content : "changing is good for better life"
        }
    ]

app.get("/posts", (req, res) => {
    // res.send("serving working well!");
    res.render("index.ejs", { posts })
});

app.get("/posts/new", (req, res) => {
    res.render("new.ejs")
});

app.post("/posts", (req, res) => {
    // console.log(req.body);
    let id = uuidv4()
    let {username, content } = req.body;
    posts.push({id,username,content})
    // res.send("post request working")
    res.redirect("/posts")
})

app.get("/posts/:id", (req, res) => {
    let { id } = req.params;
    console.log(id)
    let post = posts.find((p) => id === p.id);
    console.log(post)
    console.log(post.id)
    // res.send("request working")
    res.render("show.ejs", {post})
})
app.patch("/posts/:id", (req, res) => {
    let { id } = req.params;
    let newContent = req.body.content;
    console.log(newContent)
    let post = posts.find((p) => id === p.id);
    post.content = newContent
    console.log(post.content)
    // res.send("success")
    res.redirect("/posts")
})

app.get("/posts/:id/edit", (req, res) => {
    let { id } = req.params;
    console.log(id)
    let post = posts.find((p) => id === p.id);
    console.log(post)
    res.render("edit.ejs",{post});
})

app.delete("/posts/:id", (req, res) => {
    let { id } = req.params;
    posts = posts.filter((p) => id != p.id);
    console.log(posts)
    // res.send("delete successfull")
    res.redirect("/posts")
})

app.listen(port, () => {
    console.log(`listening on port : ${port}`);
    console.log(`http://localhost:${port}/`);
})




























// const express = require("express");

// const app = express();
// const port = 3000;
// const path = require("path");
// const { v4: uuidv4 } = require('uuid');

// var methodOverride = require('method-override')

// // override with POST having ?_method=DELETE
// app.use(methodOverride('_method'))
// app.use(express.urlencoded({ extended: true }));
// app.set("view engine", "ejs")
// app.set("views", path.join(__dirname, "views"));
// app.use(express.static(path.join(__dirname, "public")));

// let posts = [
//     {
//             id : uuidv4(),
//             username: "apnacollege",
//             content: "ilove coding"
//         },
//     {
//             id:uuidv4(),
//             username: "Aman Modanwal",
//             content : "try to hard work"
//         },
//     {
//             id:uuidv4(),
//             username: "Garv Srivastav",
//             content : "changing is good for better life"
//         }
//     ]

// app.get("/posts", (req, res) => {
//     // res.send("serving working well!");
//     res.render("index.ejs", { posts })
// });

// app.get("/posts/new", (req, res) => {
//     res.render("new.ejs")
// });

// app.post("/posts", (req, res) => {
//     // console.log(req.body);
//     let id = uuidv4()
//     let {username, content } = req.body;
//     posts.push({id,username,content})
//     // res.send("post request working")
//     res.redirect("/posts")
// })

// app.get("/posts/:id", (req, res) => {
//     let { id } = req.params;
//     console.log(id)
//     let post = posts.find((p) => id === p.id);
//     console.log(post)
//     console.log(post.id)
//     // res.send("request working")
//     res.render("show.ejs", {post})
// })
// // app.patch("/posts/:id", (req, res) => {
// //     let { id } = req.params;
// //     let newContent = req.body.content;
// //     console.log(newContent)
// //     let post = posts.find((p) => id === p.id);
// //     post.content = newContent
// //     // console.log(post.content)
// //     res.send("success")
// // })

// app.get("/posts/:id/edit", (req, res) => {
    
    
    
//     let { id } = req.params;
//     console.log(id)
//     let post = posts.find((p) => id === p.id);
//     console.log(post.id)
    
//     // console.log(post.id)
//     res.render("edit.ejs",{post});
// })

// app.delete("/posts/:id", (req, res) => {
//     let { id } = req.params;
//     posts = posts.filter((p) => id != p.id);
//     console.log(posts)
//     // res.send("delete successfull")
//     res.redirect("/posts")
// })

// app.listen(port, () => {
//     console.log(`listening on port : ${port}`);
//     console.log(`http://localhost:${port}/`);
// })