

let arr = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
]

const n = arr.length
    let primary_sum =0;
    let secondary_sum =0
    for(let i =0;i<=arr.length-1;i++){
        for(let j=0;j<=arr.length-1;j++){
            if(i==j){
                primary_sum += arr[i][j]
                console.log(primary_sum)
            }
            
            if(i+j==n-1){
                secondary_sum += arr[i][j]
                console.log(secondary_sum)
            }
        }
}

let mode = console.log(primary_sum, secondary_sum)
    


















// function findUniqueValues(array) {
//     const uniqueValues = [];
//     for (let i = 0; i < array.length; i++) {
//         let count = 0;
//         for (let j = 0; j < array.length; j++) {
//             console.log(array[i],array[j])
//             if (array[i] === array[j]) {
//                 count++; 
                
//             }
//         }
//         if (count === 1) {
//             uniqueValues.push(array[i]);
//         }
//     }
//     return uniqueValues;
// }

// const array = [1, 1,2, ];
// const uniqueValues = findUniqueValues(array);
// console.log(uniqueValues); // Output: [5]
