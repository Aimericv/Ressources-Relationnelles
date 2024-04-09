let main = document.querySelector('main');
let foldersName = document.querySelectorAll('.folderName');
let addFolderBtn = document.querySelector('#addFolder p');
let sectionFolder = document.querySelector('.posts');

function dragMoveListener(event) {

    let target = event.target;
    let x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
    let y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    target.style.transform = 'translate(' + x + 'px, ' + y + 'px)';

    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
}

window.dragMoveListener = dragMoveListener;


    interact('.drag')
        .draggable({
            inertia: true,
            modifiers: [
                interact.modifiers.restrictRect({
                    restriction: main,
                    endOnly: true
                })
            ],
            autoScroll: true,
            listeners: {
                move: function(event) {
                    $('.drag a').css('pointer-events', 'none');
                    dragMoveListener(event);
                },
                end: function(event) {
                    $('.drag a').css('pointer-events', 'auto');
                }
            }
        });

function preventDefaultAction(event) {
  event.preventDefault();
}



interact('.dropzone').dropzone({
    accept: '.intoFolder',
    overlap: 0.25,

    ondropactivate: function (event) {
        event.target.classList.add('drop-active');
    },
    ondrop: function (event) {
        let draggableElement = event.relatedTarget;
        let element = draggableElement.getAttribute('data-id');
        let folder = event.target.getAttribute('data-id');
        postIntoFolder(element, folder);
        draggableElement.parentNode.removeChild(draggableElement);
    }
});

interact('.dropzoneFolder').dropzone({
    accept: '.exitFolder',
    overlap: 0.25,

    ondropactivate: function (event) {
        event.target.classList.add('drop-active');
    },
    ondrop: function (event) {
        let draggableElement = event.relatedTarget;
        let element = draggableElement.getAttribute('data-id');
        postExitFolder(element);
        draggableElement.parentNode.removeChild(draggableElement);
    }
});

interact('.reset').dropzone({
    accept: '.drag',
    overlap: 0.25,

    ondropactivate: function (event) {
        event.target.classList.add('drop-active');
    },
    ondrop: function (event) {
        let draggableElement = event.relatedTarget;
        draggableElement.style.transform = 'translate(0px, 0px)';
        draggableElement.setAttribute('data-x', 0);
        draggableElement.setAttribute('data-y', 0);
    }
});

interact('.removeFolder').dropzone({
    accept: '.folder-article',
    overlap: 0.25,

    ondropactivate: function (event) {
        event.target.classList.add('drop-active');
    },
    ondrop: function (event) {
        console.log('yess!!');
        let draggableElement = event.relatedTarget;
        let folder = draggableElement.getAttribute('data-id');
        removeFolder(folder);
        draggableElement.parentNode.removeChild(draggableElement);
    }
});

foldersName.forEach(function(folderName) {
    folderName.addEventListener('change', function() {
        let name = folderName.value;
        let folderId = folderName.parentNode.getAttribute('data-id');
        changeFolderName(name, folderId);
    });
});

addFolderBtn.addEventListener('click', function() {
    let name = "Nouveau Dossier";
    addFolder(name);
    location.reload();
})

function postIntoFolder(element, folder) {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/favorite/post-folder', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Success');
            } else {
                console.error('Error');
            }
        }
    };

    let data = JSON.stringify({ element: element, folder: folder });
    xhr.send(data);
}

function postExitFolder(element) {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/favorite/post-exit-folder', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Success');
            } else {
                console.error('Error');
            }
        }
    };

    let data = JSON.stringify({ element: element});
    xhr.send(data);
}

function changeFolderName(name, folder) {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/favorite/folder-name', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Success');
            } else {
                console.error('Error');
            }
        }
    };

    let data = JSON.stringify({ name: name, folder: folder});
    xhr.send(data);
}

function removeFolder(folder) {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/favorite/remove-folder', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Success');
            } else {
                console.error('Error');
            }
        }
    };

    let data = JSON.stringify({folder: folder});
    xhr.send(data);
}

function addFolder(name) {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/favorite/add-folder', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log('Success');
            } else {
                console.error('Error');
            }
        }
    };

    let data = JSON.stringify({name: name});
    xhr.send(data);
}