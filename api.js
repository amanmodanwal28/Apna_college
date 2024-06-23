// const express = require('express')
// const { v4: uuidv4 } = require('uuid')
// const crypto = require('crypto')
// const app = express()
// const port = 3000 // or any port you prefer

// // Generate API key
// const apiKey = crypto.randomBytes(32).toString('hex')

// // Define your routes and API endpoints here
// app.use(express.json())

// // Middleware to check API key

// // Dummy data
// let users = [
//   { id: uuidv4(), name: 'John' },
//   { id: uuidv4(), name: 'Jane' }
//   // Add more users as needed
// ]

// // Route to get all users
// app.get('/api/users', (req, res) => {
//   res.json(users)
// })

// // Route to add a new user
// app.post('/api/users',  (req, res) => {
//   const { name } = req.body
//   const newUser = { id: uuidv4(), name }
//   users.push(newUser)
//   res.status(201).json(newUser)
// })

// // Route to get a user by ID
// app.get('/api/users/:id',  (req, res) => {
//   const { id } = req.params
//   const user = users.find(u => u.id === id)
//   if (user) {
//     res.json(user)
//   } else {
//     res.status(404).json({ error: 'User not found' })
//   }
// })

// app.listen(port, () => {
//   console.log(`Server is running on port ${port}`)
//   console.log(`API Key: ${apiKey}`)
// })

// const readline = require('readline')

// const rl = readline.createInterface({
//   input: process.stdin,
//   output: process.stdout,
//   prompt: 'Number of rows: '
// })

// rl.on('line', input => {
//   if (isNaN(parseInt(input))) {
//     console.log('Number of rows must be an integer!')
//     rl.prompt()
//   } else {
//     str = ''
//     for (i = 0; i <= input; i++) {
//       str += ' '.repeat(input - i) + '*'.repeat(i * 2 + 1)
//       str += '\n'
//     }
//     console.log(str)
//     rl.prompt()
//   }
// })

// rl.prompt()

const input = 2


// let str2 = ''
// for (i = input; i >= 0; i--) {

//   str2 += '\n'
//   str2 +=  ' '.repeat(input - i) + `${i}`.repeat(i * 2 + 1)

// }

// console.log(str2)


// let str = ''
// for (i = 0; i <= input; i++) {
//   str += ' '.repeat(input - i) + '*'.repeat(i * 2 + 1)
//   str += '\n'
// }
// console.log(str)


// const input = 2

// // Printing numbers instead of asterisks
// let str = ''
// for (let i = 0; i <= input; i++) {
//   str += ' '.repeat(input - i)
//   for (let j = 0; j <= i; j++) {
//     str += j
//   }
//   for (let k = i - 1; k >= 0; k--) {
//     str += k
//   }
//   str += '\n'
// }
// console.log(str)


let n = 5
for (let i = n; i >= 1; i--) {
  let str = ''
  let count = 1
  for (let j = 1; j <= 2 * n; ++j) {
    if (i + j >= n + 1 && i >= j - n + 1) {
      // Add a space after each number
      str += count.toString() + ' '
      count++
    } else {
      // Add two spaces for the gap
      str += ' '
    }
  }

  console.log(str)
}

for (let i = n; i >= 1; i--) {
  let str = ''

  for (let j = 1; j <= 2 * n; j++) {
    if (i + j >= n + 1 && i >= j - n + 1) {
      str += j <= n ? j - (n - i) + ' ' : 2 * n - j + 1 + ' '
    } else {
      str += '  '
    }
  }

  console.log(str)
}



