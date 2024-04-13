

let btns = document.querySelectorAll("button");




// function sayhello() {
//     alert("okk click");
// }

const value = "touch"

const alertsCheck = () => { return alert("okk click");}
const mousehover = () => { console.log("Button Touched") }
const alertsCheck2 = () => { return alert("This is aman Modanwal") }
const dblclick = () => { return alert("This is aman Modanwal dblclick")}


// for (btn of btns) {
//     btn.onclick = alertsCheck;
//     btn.onmouseenter = mousehover;
// }
//  btn.onclick  are usable but they not   work for multiple   task thats why iam not use this event mostly
//   we  study addEventListener   they are help to   work many event  at a time

for (btn of btns) {
    btn.addEventListener("dblclick", dblclick);
    btn.addEventListener("click", alertsCheck);
    btn.addEventListener("mouseenter", mousehover);
    btn.addEventListener("click", alertsCheck2);
   
}
//  dblclick are work when  u close the single click























