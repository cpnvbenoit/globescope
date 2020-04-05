<?php
/**
 * Created By PhpStorm
 * User: simon.cuany and benoit.pierrehumbert
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "Error";
if ($_SESSION['fail'] == false) {
    $title = "Backup";
    ob_start();
    ?>

    <h1 class="titleshowchild">Afficher les enfants (Backup)</h1>
    <br><br><br><br><br>
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
            Date
        </th>
        </thead  align="center" >
        <tbody align="center">

        <?php
        $childs=array_reverse($childs);
        foreach ($childs as $child) { ?>
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
                    <p><?php if ($child['Desc']!=''){echo substr($child['desc'], 0,15)."<a href=\"index.php?action=editchild&IDimage=". $child['IDImage']."\" target=\"_blank\"><span class='moredesc'>...</span></a>"; } ?></p>
                </td>
                <td>
                    <?php echo date('m/d/Y H:i:s', $child['date']);  ?>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>


    <?php
    $content = ob_get_clean();
    require_once 'gabarit2.php';
} else {
    require 'home.php';
}
?>
