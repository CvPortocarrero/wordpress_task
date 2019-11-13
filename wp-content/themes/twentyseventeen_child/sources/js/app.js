const url = 'assets/js/app.js'

fetch(url)
.then(response => response.json())
.then(data => {
    let element = document.getElementById("elemento")
    element.innerHTML = `
    <p>${data.order}</p>
    <p>${data.name}</p>
    <img src="${data.sprites.front_default}"/>
    `;

    console.log(data)
})
.catch(err => console.log(err))