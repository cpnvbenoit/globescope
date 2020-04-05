<?php
/**
 * Created By PhpStorm
 * User: simon.cuany and benoit.pierrehumbert
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "Error";
if ($_SESSION['fail'] == false) {
$title = "Affichage";
ob_start();
?>

<div id="searchbar">

    <form method="post" action="index.php?action=showchildsSearch" class="form-group formscs">
        <div class="input-group">
            <input class="form-control" type="text" name="searchText" value="" placeholder="Search"/>
            <div class="input-group-btn">
                <button class="btn btn-default" id="searchButton">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </div>
        </div>
            <br>
            <a class="link" href="index.php?action=showchilds&welcome=no">Annuler la recherche.</a>
    </form>
</div>
<h1 style=" position: absolute ; left: 42%">Afficher les enfants</h1><br><br>
<h4 style="padding-left: 10px"> Rechercher par</h4>

<table class="table" border="1" align="center" style="border: #BCDC53">
    <thead>
    <th width="220px">
        Latitude / Longitude / Meridien
    </th>
    <th>
        IDPlace
    </th>
    <th>
        IDImage
    </th>
    <th>
        Pseudo
    </th>
    <th>
        Droit
    </th>
    <th>
        Slogan
    </th>
    <th>
        Team
    </th>
    <th>
        Pays
    </th>
    <th width="8%">
        Ville
    </th>
    <th>
        Media
    </th>
    <th>
        Année-production
    </th>
    <th>
        Résumé
    </th>
    <th>
        Modifier
    </th>
    </thead  align="center" >
    <tbody align="center">
    <?php
    $inIDPlace = false;
    $inIDImage = false;
    $inmer = false;
    $inlat = false;
    $inlon = false;
    $inPseudo = false;
    $inDroit = false;
    $inSlogan = false;
    $inTeam = false;
    $inPays = false;
    $inVille = false;


    foreach ($search as $child) {
        if (($child['inIDPlace']==true)&&($inIDPlace==true)){echo "<tr><td colspan='10' class=\"category rouge  \">IDPlace</td></tr>";$inIDPlace = false;}
        if (($child['inIDImage']==true)&&($inIDImage==true)){echo "<tr><td colspan='10' class=\"category orange  \">IDImage</td></tr>";$inIDImage = false;}
        if (($child['inmer']==true)&&($inmer==true)){echo "<tr><td colspan='10' class=\"category jaune\">Meridien</td></tr>";$inmer = false;}
        if (($child['inlat']==true)&&($inlat==true)){echo "<tr><td colspan='10' class=\"category vert\">Latitude</td></tr>";$inlat = false;}
        if (($child['inlon']==true)&&($inlon==true)){echo "<tr><td colspan='10' class=\"category bleu\">Longitude</td></tr>";$inlon = false;}
        if (($child['inPseudo']==true)&&($inPseudo==true)){echo "<tr><td colspan='10' class=\"category violet\">Pseudo</td></tr>";$inPseudo = false;}
        if (($child['inDroit']==true)&&($inDroit==true)){echo "<tr><td colspan='10' class=\"category bleu  \">Droit</td></tr>";$inDroit = false;}
        if (($child['inSlogan']==true)&&($inSlogan==true)){echo "<tr><td colspan='10' class=\"category vert  \">Slogan</td></tr>";$inSlogan = false;}
        if (($child['inTeam']==true)&&($inTeam==true)){echo "<tr><td colspan='10' class=\"category jaune \">Team</td></tr>";$inTeam = false;}
        if (($child['inPays']==true)&&($inPays==true)){echo "<tr><td colspan='10' class=\"category orange\">Pays</td></tr>";$inPays = false;}
        if (($child['inVille']==true)&&($inVille==true)){echo "<tr><td colspan='10' class=\"category rouge \">Ville</td></tr>";$inVille = false;}
        ?>
        <tr>
        <td>
            <p><?= $child['lat'] ?> / <?= $child['lon'] ?> / <?= $child['mer'] ?></p>
        </td>
        <td>
            <p><?= $child['IDPlace'] ?></p>
        </td>
        <td>
            <p><?= $child['IDImage'] ?></p>
        </td>
        <td>
            <p><?= $child['Pseudo'] ?></p>
        </td>
        <td>
            <p><?php if ($child['Droit']!=''){echo substr($child['Droit'], 0,15)."<a href=\"index.php?action=editchild&IDimage=". $child['IDImage']."\" target=\"_blank\"><span class='moredesc'>...</span></a>"; } ?></p>
        </td>
        <td>
            <p><?php if ($child['Slogan']!=''){echo substr($child['Slogan'], 0,15)."<a href=\"index.php?action=editchild&IDimage=". $child['IDImage']."\" target=\"_blank\"><span class='moredesc'>...</span></a>"; } ?></p>
        </td>
        <td>
            <p class="scTeam"><?= $child['Team'] ?></p>
        </td>
        <td>
            <p><?= $child['Pays'] ?></p>
        </td>
        <td>
            <p><?= $child['Ville'] ?></p>
        </td>
        <td>
            <p><?php if ($child['Media']!=''){echo substr($child['Media'], 0,15)."<a href=\"index.php?action=editchild&IDimage=". $child['IDImage']."\" target=\"_blank\"><span class='moredesc'>...</span></a>"; } ?></p>

        </td>
        <td>
            <p><?= $child['Anneeprod'] ?></p>
        </td>
        <td>
            <p><?php if ($child['desc']!=''){echo substr($child['desc'], 0,15)."<a href=\"index.php?action=editchild&IDimage=". $child['IDImage']."\" target=\"_blank\"><span class='moredesc'>...</span></a>"; } ?></p>
        </td>

        <td>
            <button class="btn btn-primary"><a
                        href="index.php?action=editchild&IDimage=<?= $child['IDImage'] ?>" target="_blank"
                        class="buttoneditshowchild">Modifier</a></button>
        </td>
        </tr><?php } ?>
    </tbody>


    <?php
    $content = ob_get_clean();
    require_once 'gabarit2.php';
    } else {
        require 'home.php';
    }
    ?>
