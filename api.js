const express = require('express')
const { v4: uuidv4 } = require('uuid')
const crypto = require('crypto')
const app = express()
const port = 3000 // or any port you prefer

// Generate API key
const apiKey = crypto.randomBytes(32).toString('hex')

// Define your routes and API endpoints here
app.use(express.json())

// Middleware to check API key


// Dummy data
let users = [
  { id: uuidv4(), name: 'John' },
  { id: uuidv4(), name: 'Jane' }
  // Add more users as needed
]

// Route to get all users
app.get('/api/users', (req, res) => {
  res.json(users)
})

// Route to add a new user
app.post('/api/users',  (req, res) => {
  const { name } = req.body
  const newUser = { id: uuidv4(), name }
  users.push(newUser)
  res.status(201).json(newUser)
})

// Route to get a user by ID
app.get('/api/users/:id',  (req, res) => {
  const { id } = req.params
  const user = users.find(u => u.id === id)
  if (user) {
    res.json(user)
  } else {
    res.status(404).json({ error: 'User not found' })
  }
})

app.listen(port, () => {
  console.log(`Server is running on port ${port}`)
  console.log(`API Key: ${apiKey}`)
})
