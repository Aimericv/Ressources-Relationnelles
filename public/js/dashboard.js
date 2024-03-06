// 
// STATISTIQUES
// 


const users = document.querySelectorAll('#account-value p');
const formAccount = document.getElementById('account-form');
const body = document.querySelector('body');
const valid = document.getElementById('valid-account');
const addCat = document.getElementById('add-cat');
const btnCatForms = document.querySelectorAll('.back-cat-form');
const formCat = document.getElementById('form-cat');
const savFormBtns = document.querySelectorAll('.open-sav-form');
const savForm = document.getElementById('sav-form');
const backSavForms = document.querySelectorAll('.back-sav-form');

users.forEach((user) => {
    user.addEventListener('click', () => {
        formAccount.style.display = 'flex';
        body.style.overflow = 'hidden';
    });
});
valid.addEventListener('click', ()=> {
    formAccount.style.display = 'none';
    body.style.overflow = 'auto';
});
addCat.addEventListener('click', () => {
    formCat.style.display = "flex";
    body.style.overflow = "hidden";
});
btnCatForms.forEach((btnCatForm) => {
    btnCatForm.addEventListener('click', () => {
        formCat.style.display = "none";
        body.style.overflow = "auto";
    })
});
savFormBtns.forEach((savFormBtn) => {
    savFormBtn.addEventListener('click', () => {
        savForm.style.display = "flex";
        body.style.overflow = "hidden";
    })
});
backSavForms.forEach((backSavForm) => {
    backSavForm.addEventListener('click', () => {
        savForm.style.display = "none";
        body.style.overflow = "auto";
    })
})

// REQUÊTE AJAX

document.addEventListener('DOMContentLoaded', function() {
    var selectStats = document.getElementById('stats-select');
    selectStats.addEventListener('change', function() {
        var selectedOption = selectStats.value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    document.getElementById('show-user-stat').innerHTML = response.userStats;
                    document.getElementById('show-post-stat').innerHTML = response.postStats;
                    document.getElementById('show-visits-stat').innerHTML = response.visits;

                } else {
                    console.error('Une erreur est survenue lors de la requête AJAX.');
                }
            }
        };
        xhr.open('POST', '/dashboard/ajax', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('filter=' + encodeURIComponent(selectedOption));
    });
});


// 
// RESSOURCES
// 

document.querySelectorAll('.compte').forEach(item => {
    item.addEventListener('click', event => {
        const userId = item.getAttribute('data-user-id');
        const firstName = item.getAttribute('data-first-name');
        const lastName = item.getAttribute('data-last-name');
        const avatar = item.getAttribute('data-avatar');
        const roleId = item.getAttribute('data-roles'); 
        console.log(roleId);

        // Mettre à jour les éléments dans #account-form
        document.getElementById('account-form').innerHTML = `
            <img src="${avatar}" alt="${firstName} ${lastName}">
            <p>${firstName} ${lastName}</p>
            <select id="role-select">
                <option value="ROLE_USER" ${roleId === 'user' ? 'selected' : ''}>Citoyen</option>
                <option value="ROLE_MODERATOR" ${roleId === 'moderator' ? 'selected' : ''}>Modérateur</option>
                <option value="ROLE_ADMIN" ${roleId === 'admin' ? 'selected' : ''}>Administrateur</option>
                <option value="ROLE_SUPERADMIN" ${roleId === 'superadmin' ? 'selected' : ''}>Super-admin</option>
            </select>
            <a href="#" id="valid-account" data-user-id="${userId}" data-role-id="${roleId}">Valider</a>
        `;

        // Ajouter un gestionnaire d'événements pour le changement dans le sélecteur déroulant
        document.getElementById('role-select').addEventListener('change', event => {
            const selectedRoleId = event.target.value;
            document.getElementById('valid-account').setAttribute('data-role-id', selectedRoleId);
            const userId = document.getElementById('valid-account').getAttribute('data-user-id');
            const href = "/dashboard/role-user/" + userId + "/" + selectedRoleId;
            document.getElementById('valid-account').setAttribute('href', href);
        });

        // Empêcher le comportement par défaut de l'événement de clic
        event.preventDefault();
    });
});
