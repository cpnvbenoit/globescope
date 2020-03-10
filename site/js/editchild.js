document.addEventListener("DOMContentLoaded", init);
function init() {
    UnlockallCMD.addEventListener('click',windowsconfirm);
}

function windowsconfirm() {
    var r = confirm("Voulez vous vraiment activer la modification des options de positionnement de l'image ?");
    if (r == true) {
        unlock();
    }else{
        lock();
    }

}
function unlock() {
    meridien.disabled = false;
    latitude.disabled = false;
    longitude.disabled = false;
    idplace.disabled = false;
    idimage.disabled = false;
}
function lock() {
    meridien.disabled = true;
    latitude.disabled = true;
    longitude.disabled = true;
    idplace.disabled = true;
    idimage.disabled = true;
}
