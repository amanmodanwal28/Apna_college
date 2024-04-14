
//   Answer 1 ->

let button = document.createElement("button");
let input = document.createElement("input");
button.innerText = 'Click me';

input.placeholder = "Please Enter ";

document.querySelector("body").append(input);
document.querySelector("body").append(button);


//  Answer 2 ->

input.setAttribute("placeholder", "username");
button.setAttribute("id", "btn");

// Answer 3 ->

let btnIdGet = document.querySelector("#btn");
btnIdGet.style.backgroundColor = "green";
btnIdGet.style.color = "white";

// Answer 4 ->

let Heading = document.createElement("h1");
Heading.innerHTML = "<u>DOM Practice</u>"
document.querySelector("body").append(Heading)

//  Answer 5 ->

let p = document.createElement("p");
p.innerHTML = "Apna College <b>Delta</b> Practice";
document.querySelector("body").append(p)

let ps = document.createElement("p");
ps.innerHTML = "Apna College <b>Delta</b> Practice"
document.querySelector("body").append(ps)



// let links = document.querySelectorAll(".box a")
// console.log(links)

// // for (let i = 0; i <= links.length - 1; i++){
// //     links[i].style.color = "green"
// // }


// for (link of links) {
//     link.style.color = "yellow"
// }