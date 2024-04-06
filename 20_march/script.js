console.log("aman")

var num = 20;
if (num % 10 == 0) {
    console.log("good")
}
else {
    console.log("bad")
}


// let Promt_testing_name = prompt("tell me Your name ");

// let Promt_testing_age = prompt("Tell me your age")

// let Alert = alert(`User name is ${Promt_testing_name} and  User age is ${Promt_testing_age}`)
// console.log(Promt_testing_age);

// Question 3

let quarter = 1;

switch (quarter) {
    case 1: console.log("January , February , March")
        break;
    case 2: console.log("April , May , June");
        break; 
    case 3: console.log("July , August , September");
        break; 
    case 4: console.log("October , November , December");
        break; 
    default : console.log(" No month")
}

//  Question 4

let value = "amaaaa"

if ((value[0] == "a" || value[0] == "A") && value.length > 5) {
    console.log("golden")
}
else {
    console.log("not")
}

// question 5 
let val = 2;
let val2 = 5;
let val3 = 1;

if (val > val2 || val > val3) {
    console.log(` ${val} is greater then  ${val2} and ${val3}`)
}
else if () {
    console.log(` ${val} is greater then  ${val2} and ${val3}`)
}

//  question  6

let num1 = 32;
let num2 = 47852;

if (num1 % 10 === num2 % 10) {
    console.log("same last digit is 2")
}
else {
    console.log("not same")
}