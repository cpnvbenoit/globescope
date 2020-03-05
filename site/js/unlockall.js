document.addEventListener('DOMContentLoaded',init);
function init() {
    UnlockallCMD.addEventListener('click',login);
}

function login() {
    document.getElementById('TEstUnlock').style.color="red";
}

