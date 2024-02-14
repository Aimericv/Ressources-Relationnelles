let elementCount = 0; // Variable to keep track of the number of elements

function dragMoveListener(event) {
    let target = event.target;
    let x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
    let y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    target.style.transform = 'translate(' + x + 'px, ' + y + 'px)';

    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
    mettreAJourElementData();
}

window.dragMoveListener = dragMoveListener;

interact('.resize-drag')
    .resizable({
        edges: { left: true, right: true, bottom: true, top: true },

        listeners: {
            move(event) {
                let target = event.target;
                let x = (parseFloat(target.getAttribute('data-x')) || 0);
                let y = (parseFloat(target.getAttribute('data-y')) || 0);

                target.style.width = event.rect.width + 'px';
                target.style.height = event.rect.height + 'px';

                x += event.deltaRect.left;
                y += event.deltaRect.top;

                target.style.transform = 'translate(' + x + 'px,' + y + 'px)';

                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
            },
            end(event) {
                mettreAJourElementData();
            }
        },
        modifiers: [
            interact.modifiers.restrictEdges({
                outer: 'parent'
            }),

            interact.modifiers.restrictSize({
                min: { width: 100, height: 50 }
            })
        ],

        inertia: true
    })
    .draggable({
        listeners: { move: window.dragMoveListener },
        inertia: true,
        modifiers: [
            interact.modifiers.restrictRect({
                restriction: 'parent',
                endOnly: true
            })
        ]
    });

interact('.dropzone').dropzone({
    accept: '.drag-drop',
    overlap: 0.25,

    ondropactivate: function (event) {
        event.target.classList.add('drop-active');
    },
    ondrop: function (event) {
        let draggableElement = event.relatedTarget;
        draggableElement.parentNode.removeChild(draggableElement);
    }
});

const addTextBtn = document.getElementById('add-text-btn');
const addImageBtn = document.getElementById('add-image-btn');
const containerDiv = document.getElementById('create-post');
const imageInput = document.getElementById('image-input');

addTextBtn.addEventListener('click', () => {
    const newDiv = document.createElement("div");
    newDiv.classList.add("resize-drag");
    newDiv.classList.add("drag-drop");
    newDiv.classList.add("editor");

    // Set unique data attributes for each element
    newDiv.setAttribute('data-x', 0);
    newDiv.setAttribute('data-y', 0);
    newDiv.setAttribute('data-id', elementCount++);

    containerDiv.appendChild(newDiv);

    initializeQuillForElement(newDiv);
});

addImageBtn.addEventListener('click', () => {
    imageInput.click();
});

imageInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        const newDiv = document.createElement("div");
        newDiv.classList.add("resize-drag");
        newDiv.classList.add("drag-drop");
        newDiv.classList.add("drag");

        // Set unique data attributes for each element
        newDiv.setAttribute('data-x', 0);
        newDiv.setAttribute('data-y', 0);
        newDiv.setAttribute('data-id', elementCount++);

        const newImage = document.createElement("img");
        newImage.src = URL.createObjectURL(file);
        newDiv.appendChild(newImage);
        containerDiv.appendChild(newDiv);
        imagePath = imageInput.value;
        mettreAJourElementData();
    }
});

const toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike', 'link'],
    [{ 'align': [] }],
    [{ 'color': [] }],
    [{ 'size': ['small', false, 'large', 'huge'] }],
    [{ 'header': [1, 2, 3, false] }],
    [{ 'list': 'ordered' }, { 'list': 'bullet' }]
];

function initializeQuillForElement(element) {
    const quill = new Quill(element, {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'bubble'
    });

    quill.on('text-change', () => {
        mettreAJourElementData();
    });
}


// const url = '/creation-posts/add';

// function envoyerDonneesAuBackend(data) {
//     fetch('/creation-posts/add', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify(allElementData),
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Error saving data');
//         }
//         return response.json();
//     })
//     .then(data => {
//         console.log(data);
//     })
//     .catch(error => {
//         console.error('There was an error!', error);
//     });
    
//     // Afficher le contenu envoyé dans la console
//     // window.location.href = '/creation-posts/add';    
// }

const titleInput = document.getElementById('title');
const descInput = document.getElementById('description');
const catSelect = document.getElementById('category');
const addressInput = document.getElementById('address');

titleInput.addEventListener('input', mettreAJourElementData);
descInput.addEventListener('input', mettreAJourElementData);
catSelect.addEventListener('change', mettreAJourElementData);
addressInput.addEventListener('input', mettreAJourElementData);

function mettreAJourElementData() {
    const elements = document.querySelectorAll('.resize-drag');
    
    let paragraphDataArray = [];
    let imageDataArray = [];
    
    // Récupérer les valeurs actuelles des champs de formulaire
    let title = titleInput.value;
    let desc = descInput.value;
    let cat = catSelect.value;
    let address = addressInput.value

    let ressouceArray = {
        type: "parametre",
        title: title,
        description: desc,
        category: cat,
        address: address
    };
    
    elements.forEach(element => {
        let x = (parseFloat(element.getAttribute('data-x')) || 0);
        let y = (parseFloat(element.getAttribute('data-y')) || 0);

        if (element.classList.contains('resize-drag')) {
            // Vérifier si l'élément est une image
            let imageElement = element.querySelector('img');
            if (imageElement) {
                let src = imageElement.src;
                let imageElementData = {
                    type: 'image',
                    x: x,
                    y: y,
                    src: imagePath,
                    width: imageElement.offsetWidth,
                    height: imageElement.offsetHeight
                };
                imageDataArray.push(imageElementData);
            } else {
                // Si ce n'est pas une image, alors c'est probablement un paragraph
                let ps = element.querySelectorAll('.ql-editor');
                ps.forEach(p => {
                    let content = p.innerHTML;
                    let paragraphElementData = {
                        type: 'paragraph',
                        x: x,
                        y: y,
                        content: content,
                        width: element.offsetWidth,
                        height: element.offsetHeight
                    };
                    paragraphDataArray.push(paragraphElementData);
                });
            }
        }
    });

    // Combiner les données en un seul tableau
    let allElementData = [ressouceArray, ...paragraphDataArray, ...imageDataArray];
    console.log(allElementData);
    
    // Convertir allElementData en chaîne JSON
    const dataInput = document.getElementById("data_input");
    dataInput.value = JSON.stringify(allElementData);
}