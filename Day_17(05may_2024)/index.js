const mongoose = require("mongoose");

let url = "https://127.0.0.1:27017/test";


// mongoose.connect("mongodb://127.0.0.1:27017/test");

main().then(() => {
    console.log("res")
}).catch(err => console.log(err));

async function main() {
    await mongoose.connect('mongodb://127.0.0.1:27017/test')

}

const userSchema = new mongoose.Schema({
    name: String,
    email: String,
    age:Number,
})