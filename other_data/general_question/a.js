class Dog {
  constructor(name, breed) {
    this.name = name;
    this.breed = breed;
  }

  // Instance method
  bark() {
    console.log(`${this.name} says Woof!`);
  }
}

// Creating an instance of the Dog class
let dog = new Dog('Buddy', 'Golden Retriever');

// Calling the instance method
dog.bark();  // Output: Buddy says Woof!
console.log(dog)











// function greet(name = 'Guest', greeting = 'Hello') {
//   console.log(`${name}!,${greeting}`);
// }

// greet();          // Outputs: Hello, Guest!
// greet('Alice');   // Outputs: Hello, Alice!
// greet('Bob', 'Hi'); // Outputs: Hi, Bob!

// function greet2(name, greeting) { 
//     console.log(`${name}!,${greeting}`);
// }

// greet2("aman")













// let str = "aman";
// let arr = [...str];

// console.log(typeof arr)







// arr = ["apple", "aaas", "aman"]

// for (app of arr) {
//     console.log(app)
// }


// let array = [ 1, 14, 22, 32,17];
// let max = 0
// // let even = array.map((el) => {
// //     return el * 2 ;
// // })
// // console.log(even)


// for (let i = 0; i <= array.length - 1; i++){
//     if (max < array[i]) {
//         max = array[i]
//     }

// }
//     console.log("normal find max value => ",max)

// let max2 = array.reduce((max, el) => {
//     if (max < el) {
//         return el;
//     } else {
//         return max
//     }
// })

// console.log(max2)















// let n = 5;

// let square = (n) => {
//     console.log(n * n)
// };
// let kk = setInterval(() => { square(4) }, 2000);

// setTimeout(() => { clearInterval(kk) }, 11000);


// let sum = () => {
//     console.log("hello")
// }

// let id = setInterval(sum, 3000)

// setTimeout(() => {
//     clearInterval(id)
// }, 10000)