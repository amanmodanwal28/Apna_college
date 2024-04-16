let url = "https://catfact.ninja/fact";


async function getFacts() {
    try {
        let res = await fetch(url);
        let data = await res.json();
        console.log(data);
        console.log(data.fact);
    }
    catch(e) {
        console.log("error -", e)
    }
    
}
getFacts()







// console.log(url);

// fetch(url)
//     .then((res) => {
//         let json_data = res.json()
//         console.log(json_data);
//         return json_data
//     }).then((data) => {
//         console.log(data)
//     }).catch((err) => {
//         console.log("Error - ", err)
//     })