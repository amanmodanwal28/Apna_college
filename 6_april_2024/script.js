//    Question   1

let arr = [1, 2, 3, 4, 5, 6, 2, 3];
let num = 2;
let arr2 = [] 

for (let i = 0; i <= arr.length - 1; i++){
    if (arr[i] != num) {
        arr2.push(arr[i])
    }  
}
arr = arr2;
console.log(" ")
console.log("Answer of Question 1")
console.log("delete all occurrences of element num =>",arr)

//    Question   2,3  

let number = 287152;
let string =number.toString()
console.log(typeof string)
console.log(" ")
console.log("Answer of Question 2")
console.log("Count the no of digits in a number =>",string.length)
parseInt()
let sum = 0;
let product = 1;
for (let i = 0; i <= string.length - 1; i++){
    sum += parseInt(string[i])
    product *= parseInt(string[i])
}
console.log(" ")
console.log("Answer of Question 3")
console.log("Sum of a number =>", sum)
console.log(" ")
console.log("Answer of Question 3 with benifit")
console.log("product of a number =>",product)

//    Question   3 ;

let factorial_7 = 1;
let factorial_5 = 1;
let factorial_3 = 1;
let factorial_0 = 1;

for (let i = 7; i >= 1; i--){
        
    factorial_7 *= i
}
for (let i = 5; i >= 1; i--){
        
    factorial_5 *= i
}
for (let i = 3; i >= 1; i--){
        
    factorial_3 *= i
}


console.log(" ")
console.log("Answer of Question 4")
console.log("7! (factorial of 7) is =>", factorial_7);
console.log("5! (factorial of 7) is =>", factorial_5);
console.log("3! (factorial of 3) is =>", factorial_3);

console.log(" ")
console.log("Answer of Question  4   while")

let number1 = 287152;
let sums = 0;
let counts = 0

let copy = number1;

while (copy > 0) {
    digit = copy % 10;
    console.log(digit)
    counts++;
    sums += digit
    copy = Math.floor(copy / 10)
}

console.log(counts)
console.log(sums)


let obj = {
    name: "aman",
    class: " B.tech",
    mark : 90
}
console.log(obj)
console.table(obj)