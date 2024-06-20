const button = document.querySelector(".apiBtn");
const rspData = document.querySelector(".response");

button.addEventListener('click', () => {

    let data = "";
    let url = "http://localhost:56345";
    let result = fetch(url + '/', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
    })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            rspData.innerHTML = data.message;
        })
        .catch(error => console.error('Error:', error));
});


// connexion à la bdd
// telecharger l'image ?
// reccuperer les datas
// push en bdd
// retourner un message