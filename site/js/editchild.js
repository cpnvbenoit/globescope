document.addEventListener("DOMContentLoaded", init);

function init() {
    UnlockallCMD.addEventListener("click",windowsconfirm());
    UnlockallCMD.addEventListener('click',unlock);
}

function windowsconfirm() {
    windows.confirm("Voulez vous vraiment activer la modification des options de positionnement de l'image ?");
    var r = confirm("Press a button!");
    if (r == true) {
        unlock();
    }

}
function unlock() {
    meridien.disabled = false;
    latitude.disabled = false;
    longitude.disabled = false;
    idplace.disabled = false;
    idimage.disabled = false;
}
