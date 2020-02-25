<?php
/**
 * Created By PhpStorm
 * User: simon.cuany
 * Date: 13.02.2020
 * Time: 11.19
 */

ob_start();
?>
<h1 align="center">Modifier les infos</h1>


<table class="table" border="1" align="center">
    <thead>
    <th>
        Longitude / Latitude / Meridien
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
        Modifier
    </th>
    </thead  align="center">
    <tbody align="center">

    <?php
    foreach ($childs as $child) {
        if ($child['IDImage'] == $idchild) {

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
                    <p><?= $child['Droit'] ?></p>
                </td>
                <td>
                    <p>
                        <?= $child['Slogan'] ?>
                    </p>
                </td>
                <td>
                    <p><?= $child['Provenance'] ?></p>
                </td>

            </tr>
            <!-- le temp de benoit va dans TEMPBENOIT.TXT-->

            <?php
        }
    }
    ?>

    </tbody>
</table>
<?php

foreach ($childs as $child) {
    if ($child['IDImage'] == $idchild) {


        $valuelat = $child['lat'];
        $valuemer = $child['mer'];
        $valuelon = $child['lon'];
        $valueidplace = $child['IDPlace'];
        $valueidimage = $child['IDImage'];
        $valuepseudo = $child['Pseudo'];
        $valuedroit = $child['Droit'];
        $valueslogan = $child['Slogan'];
        $valueprovenance = $child['Provenance'];
    }
}
?>
<br>
<table align="center">
    <tr>
        <td>

            <input value="<?= $valuelat ?>" type="text" disabled class="edit-disabled" id="latitude">


        </td>
        <td>
            <input value="<?= $valuelon ?>" type="text" disabled class="edit-disabled" id="longitude">
        </td>
        <td>
            <input value="<?= $valuemer ?>" type="text" disabled class="edit-disabled" id="meridien">
        </td>

    </tr>
    <tr>
        <td>
            <input value="<?= $valueidplace ?>" type="text" disabled class="edit-disabled" id="idplace">
        </td>
        <td>
            <input value="<?= $valueidimage ?>" type="text" disabled class="edit-disabled" id="idimage">
        </td>
        <td>
            <input value="<?= $valuepseudo ?>" type="text" id="team">
        </td>
    </tr>
    <tr>
        <td>
            <input value="<?= $valuedroit ?>" type="text" id="Droit">
        </td>
        <td>
            <input value="<?= $valueslogan ?>" type="text" id="Slogan">
        </td>
        <td>
            <input value="<?= $valueprovenance ?>" type="text" id="Pseudo">
        </td>

    </tr>

</table>

<?php
$content = ob_get_clean();
require_once 'gabarit2.php';
?>
