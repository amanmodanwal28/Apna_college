
let btn = document.querySelector("button");


function getRandomColor() {
    console.log("generate Random color")
    let red = Math.floor(Math.random() * 255);
    let green = Math.floor(Math.random() * 255);
    let blue = Math.floor(Math.random() * 255);

    let color = `rgb(${red},${green},${blue})`;

    return color;
}

console.log(getRandomColor())

btn.addEventListener("click", () => {
    let h3 = document.querySelector("h3");
    let randomColor = getRandomColor();
    h3.innerText = randomColor;

    let div = document.querySelector("div");
    div.style.backgroundColor =  randomColor
})

























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
//     btn.addEventListener("onclick", alertsCheck);
//     btn.addEventListener("mouseenter", mousehover);
//     btn.addEventListener("click", alertsCheck2);
   
// }
// //  dblclick are work when  u close the single click
