let main = document.querySelector('main');

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
        listeners: { move: dragMoveListener }
    });

interact('.dropzone').dropzone({
    accept: '.drag',
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