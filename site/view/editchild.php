<?php
/**
 * Created By PhpStorm
 * User: simon.cuany
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "Modifications";
ob_start();
?>
<h1 align="center">Modifier les infos</h1>


<table  border="1" align="center" class="table" style="width: 80%">
    <thead>
    <th>
        Meridien / Latitude / Longitude
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
    </thead  align="center">
    <tbody align="center">

    <?php
    foreach ($childs as $child) {
        if ($child['IDImage'] == $idchild) {

            ?>
            <tr>
                <td>
                    <p><?= $child['mer'] ?> / <?= $child['lat'] ?> / <?= $child['lon'] ?> </p>
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
        $valueteam = $child['Provenance'];
    }
}
?>
<br>
<table align="center" class="table" style="width: 80%">
    <tr>
        <td align="center">
            <label for="meridien">Meridien</label>
            <input value="<?= $valuemer ?>" type="text" disabled class="edit-disabled" id="meridien">
        </td>
        <td align="center">
            <label for="latitude">Latitude</label>
            <input value="<?= $valuelat ?>" type="text" disabled class="edit-disabled" id="latitude" >


        </td>
        <td align="center">
            <label for="longitude">Longitude</label>
            <input value="<?= $valuelon ?>" type="text" disabled class="edit-disabled" id="longitude">
        </td>

    </tr>
    <tr>
        <td align="center">
            <label for="idplace">IDplace</label>
            <input value="<?= $valueidplace ?>" type="text" disabled class="edit-disabled" id="idplace">
        </td>
        <td align="center">
            <label for="idimage">IDimage</label>
            <input value="<?= $valueidimage ?>" type="text" disabled class="edit-disabled" id="idimage" >
        </td>
        <td align="center">
            <label for="team">Team</label>
            <input value="<?= $valueteam ?>" type="text" id="team" style="width:<?php $longteam = strlen($valueteam) ; if ($longteam <= 15){ echo "170";}else{echo $longteam *7 ;} ?>px">
        </td>
    </tr>
    <tr>
        <td align="center">
            <label for="Droit">Droit</label>
            <input value="<?= $valuedroit ?>" type="text" id="Droit" style="width:<?php $longDroit = strlen($valuedroit) ; if ($longDroit <= 35){ echo "170";}else{echo $longDroit *6  ;} ?>px">

        </td>
        <td align="center">
            <label for="Slogan">Slogan</label>
            <input value="<?= $valueslogan ?>" type="text" id="Slogan" style="width:<?php $longslogan = strlen($valueslogan) ; if ($longslogan <= 35){ echo "170";}else{echo $longslogan *6 ;} ?>px" >
        </td>
        <td align="center">
            <label for="Pseudo">Pseudo</label>
            <input value="<?= $valuepseudo ?>" type="text" id="Pseudo" >
        </td>

    </tr>

</table>
<button id="UnlockallCMD">UnlockAll</button>
<button onclick="window.confirm('Vous aller faire autre chose ?')">Test multi alert</button>
<?php
$content = ob_get_clean();
require_once 'gabarit2.php';
?>
