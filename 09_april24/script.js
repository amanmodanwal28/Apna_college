// function multipleGreet(function1,n) {
//     for (let i = 0; i <= n; i++){
//         function1()
//     }
// }

// let greet = function () {
//     console.log("hello")
// }

// multipleGreet(greet, 3)


// Answer 1


// let arr = [8, 9, 10, 1, 2, 3, 4, 5, 6, 7];
// let num = 5;

// function largestnumber(arr,num) {
//     for (let i = 0; i <= arr.length - 1; i++){
//         if (arr[i] > num) {
//             console.log(arr[i]);
//         }
//     }
// }


// largestnumber(arr,num);


// Answer 2

let str = "aman";

function getUnique(str) {
    let ans = "";
    for (let i = 0; i <= str.length - 1; i++){
        let currentchar = str[i];
        if (ans.indexOf(currentchar) == -1) {
            ans += currentchar;
            
        }  
    }
    console.log(ans)
    return ans
    
}


console.log(getUnique(str));

// example  for indexof
let index = str.indexOf("n");
let index2 = str.indexOf("z");

console.log(index); // Output: 4
console.log(index); // Output: -1  because they are not in str

let uniqueChars = [...new Set(str)]; // ['h', 'e', 'l', 'o']
console.log(uniqueChars)


// answer 4

let vowel_check = "apnacollege";

function countvowels(vowel_check) {
    let count = 0;
    for (let i = 0; i <= vowel_check.length - 1; i++){
        if (vowel_check[i] == "a" ||
            vowel_check[i] == "e" ||
            vowel_check[i] == "i" ||
            vowel_check[i] == "o" ||
            vowel_check[i] == "u") {
            count++; 
        }
    }
    console.log(count)
    return count
}


const get = countvowels(vowel_check);
console.log(get)
