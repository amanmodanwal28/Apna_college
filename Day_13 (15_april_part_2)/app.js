let btns = document.querySelector("button");
let testing = document.querySelector("#testing1");
let testing2 = document.querySelector("#testing2");
let testing3 = document.querySelector("#testing3");
let testing4 = document.querySelector("#testing4");
let testing5 = document.querySelector("#testing5");
let testing6 = document.querySelector("#testing6");
let testing7 = document.querySelector("#testing7");
let btn = document.querySelectorAll("button");
let p = document.querySelector("p");
let h1 = document.querySelector("h1");
let h3 = document.querySelector("h3");

let checkThisProperty = (event) => {
    console.log(event)
    event.target.style.backgroundColor = "blue";
}
function changeColor() {
    console.log(this)
    this.style.backgroundColor = "blue"
}

testing.addEventListener("click", changeColor)
testing2.addEventListener("click",checkThisProperty)











// let btns = document.querySelectorAll("button");

// // function sayhello() {
// //     alert("okk click");
// // }

// const value = "touch"

// const alertsCheck = () => { return alert("okk click");}
// const mousehover = () => { console.log("Button Touched") }
// const alertsCheck2 = () => { return alert("This is aman Modanwal") }
// const dblclick = () => { return alert("This is aman Modanwal dblclick")}


// // for (btn of btns) {
// //     btn.onclick = alertsCheck;
// //     btn.onmouseenter = mousehover;
// // }
// //  btn.onclick  are usable but they not   work for multiple   task thats why iam not use this event mostly
// //   we  study addEventListener   they are help to   work many event  at a time

// for (btn of btns) {
//     btn.addEventListener("dblclick", dblclick);
//     btn.addEventListener("click", alertsCheck);
//     btn.addEventListener("mouseenter", mousehover);
//     btn.addEventListener("click", alertsCheck2);
   
// }
// //  dblclick are work when  u close the single click























