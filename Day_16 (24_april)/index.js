const { faker } = require('@faker-js/faker');
const mysql = require('mysql2');


const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    database: "delta_connection",
    password : "ptcs1234"
});

try {
    connection.query("SELECT * FROM delta_connection_student", (err, result) => {
        if (err) throw err;
        console.log(result)
    })

} catch (err) {
    console.log(err)
}

    connection.end()

// const getRandomUser = () => {
//     return {
//     id: faker.string.uuid(),
//     username: faker.internet.userName(),
//     password: faker.internet.password(),

//     };
// }

// console.log(getRandomUser())