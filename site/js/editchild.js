document.addEventListener("DOMContentLoaded", init);

function init() {
    confirmUA.addEventListener("click",windowsconfirm())
}

function windowsconfirm() {
    windows.confirm("Voulez vous vraiment activer la modification des options de positionnement de l'image ?")

}