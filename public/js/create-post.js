function dragMoveListener (event) {
    let target = event.target
    let x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
    let y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

    target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'

    target.setAttribute('data-x', x)
    target.setAttribute('data-y', y)
}

window.dragMoveListener = dragMoveListener;

interact('.resize-drag')
.resizable({
    edges: { left: true, right: true, bottom: true, top: true },

    listeners: {
        move (event) {
            let target = event.target
            let x = (parseFloat(target.getAttribute('data-x')) || 0)
            let y = (parseFloat(target.getAttribute('data-y')) || 0)

            target.style.width = event.rect.width + 'px'
            target.style.height = event.rect.height + 'px'

            x += event.deltaRect.left
            y += event.deltaRect.top

            target.style.transform = 'translate(' + x + 'px,' + y + 'px)'

            target.setAttribute('data-x', x)
            target.setAttribute('data-y', y)
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
    event.target.classList.add('drop-active')
},
ondrop: function (event) {
    let draggableElement = event.relatedTarget;
    draggableElement.parentNode.removeChild(draggableElement);
}
})

const addTextBtn = document.getElementById('add-text-btn');
const addImageBtn = document.getElementById('add-image-btn');
const containerDiv = document.getElementById('create-post');
const imageInput = document.getElementById('image-input');

addTextBtn.addEventListener('click', () => {
    const newDiv = document.createElement("div");
    newDiv.classList.add("resize-drag");
    newDiv.classList.add("drag-drop");
    newDiv.classList.add("editor");
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
        const newImage = document.createElement("img");
        newImage.src = URL.createObjectURL(file);
        newDiv.appendChild(newImage);
        containerDiv.appendChild(newDiv);
    }
});

const toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike', 'link'],
    [{'align': []}],
    [{'color': []}],
    [{'size': ['small', false, 'large', 'huge']}],
    [{'header': [1, 2, 3, false]}],
    [{'list': 'ordered'}, {'list': 'bullet'}]
];

function initializeQuillForElement(element) {
    new Quill(element, {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'bubble'
    });
}