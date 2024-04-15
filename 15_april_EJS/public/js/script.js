let btns = document.querySelectorAll("button");
console.log("ffff");
for (btn of btns) {
    btn.addEventListener("click", () => {
        console.log("button was clicked")
    })
}