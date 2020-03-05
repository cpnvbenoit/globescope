document.addEventListener('DOMContentLoaded',init);
function init() {
    UnlockallCMD.addEventListener('click',unlock);
    LockallCMD.addEventListener('click',lock);
}

function unlock() {
    UnlockallCMD.display = block;
    LockallCMD.display = none;
    TEstUnlock.style.color="red";
    meridien.disabled = false;
    latitude.disabled = false;
    longitude.disabled = false;
    idplace.disabled = false;
    idimage.disabled = false;
}
function lock() {
    LockallCMD.display = none;
    UnlockallCMD.display = block;
    TEstUnlock.style.color="red";
    meridien.disabled = true;
    latitude.disabled = true;
    longitude.disabled = true;
    idplace.disabled = true;
    idimage.disabled = true;
}

