document.addEventListener('DOMContentLoaded',init);
function init() {
    UnlockallCMD.addEventListener('click',unlock);
}

function unlock() {
    meridien.disabled = false;
    latitude.disabled = false;
    longitude.disabled = false;
    idplace.disabled = false;
    idimage.disabled = false;
}


