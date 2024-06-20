const prenom = document.getElementById('firstname');
const nom = document.getElementById('name').value;
const address = document.getElementById('address').value;
const postalCode = document.getElementById('postalCode').value;
const city = document.getElementById('city').value;
const email = document.getElementById('email').value;
const password = document.getElementById('password').value;
const adresse = address + ', ' + postalCode + city;

const fileInput = document.getElementById('avatarImg');
const file = fileInput.files[0];

const formData = new FormData();
formData.append('image', file, file.name);

let xhr = new XMLHttpRequest();
xhr.open('POST', '/register', true);
xhr.onload = function() {
    if (xhr.status === 200) {
        console.log('Chemin de l\'image téléchargée');
    } else {
        console.error('Erreur lors du téléchargement de l\'image. Statut : ' + xhr.status);
    }
};
xhr.send(formData);

const userData = {
    nom: nom,
    prenom: prenom,
    adresse: adresse,
    email: email,
    password: password,
}