
let temps = 4;

function redirectToHome() {
    window.location.href = '/';
}

var interval = setInterval(() => {
    var timer = document.getElementById('timer');
    if (temps === 0) {
        redirectToHome();
        clearInterval(interval);
    }
    else {
        timer.innerText = temps.toString();
        temps--;
    }
}, 1000);