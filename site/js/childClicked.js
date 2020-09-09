
//Requete XMLHTTP pour récupéerer des détails d'un enfant
//en paramètre (x) l'ID de l'image recherché
function onImageClick(x)
{
    var obj, dbParam, xmlhttp, myObj;
    obj = { "ID":x};
    dbParam = JSON.stringify(obj);


    xmlhttp = new XMLHttpRequest();
    //Declaré dans index2.php
    showSideBar();
    onSearchDetails.innerHTML = "";

    //Quand la requête xml à été exécuté
    xmlhttp.onreadystatechange = function()
    {
        if (this.readyState == 4 && this.status == 200)
        {
            if(this.responseText != "")
            {
                //convertit les données reçues depuis le fichier PHP correspondent (JsonEncode)
                myObj = JSON.parse(this.responseText);

                //Si l'image existe
                if(myObj.ImageOK != 0)
                {
                    var details =  document.getElementById("onClickDetails").childNodes;
                    childImage.src = "images/400-500/"+myObj.IDImage+".jpg";
                    childPseudo.textContent =myObj.Pseudo;

                    if (myObj.Slogan.length>1)
                        {childCitation.outerHTML = "<tr><td width='25%'>Slogantest </td><td width='70%'>"+ myObj.Slogan + "</td></tr>"}
                    else {childCitation.textContent='test'}

                    if (myObj.Anneeprod.length>1)
                    {childAnneeprod.outerHTML = '<tr><td>Année</td><td>'+ myObj.Anneeprod + '</td></tr>'}

                    if (myObj.Droit.length>1)
                    {childRight.outerHTML = '<tr><td>Droit</td><td>'+ myObj.Droit + '</td></tr>'}

                    if (myObj.ecole.length>1)
                    {childEcole.outerHTML = '<tr><td>Ecole</td><td>'+ myObj.ecole + '</td></tr>'}

                    if (myObj.Pays.length>1)
                    {childPays.outerHTML = '<tr><td>Pays</td><td>'+ myObj.Pays + '</td></tr>'}

                    if (myObj.Ville.length>1)
                    {childVille.outerHTML = '<tr><td>Ville</td><td>'+ myObj.Ville + '</td></tr>'}

                    if (myObj.Team.length>1)
                    {childEquipe.outerHTML = '<tr><td>Equipe</td><td>'+ myObj.Team + '</td></tr>'}

                    if (myObj.Titre.length>1)
                    {childMedia.outerHTML = '<tr><td>Titre</td><td>'+ myObj.Titre + '</td></tr>'}

                    if (myObj.desc.length>1)
                    {childDesc.outerHTML = '<tr><td colspan="2"><textarea disabled name="desc" cols="45" rows="4">'+ myObj.desc + '</textarea></td></tr>'}

                    if (myObj.desc.length>1)
                    {childMedia.outerHTML = '<tr><td>Média</td><td><a href="'+ myObj.Media + '"></a></td></tr>'}

                    if (myObj.IDPlace.length>1)
                    {childIDPlace.outerHTML = '<tr><td>IDPlace</td><td>'+ myObj.IDPlace + '</td></tr>'}




                    childEdit.href = "?action=editchild&IDimage="+myObj.IDImage;

                }
            }
        }
    }

    //exécuter la requete en mode POST avec les paramètres voulus (x) => ID
    xmlhttp.open("POST", "index.php?action=GetData", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x=" + dbParam +"&Mode=click");

}
