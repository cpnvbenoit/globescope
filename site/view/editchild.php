<?php
/**
 * Created By PhpStorm
 * User: simon.cuany and benoit.pierrehumbert
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
        <td class="form-group">
            <label for="meridien">Meridien</label>
            <input value="<?= $valuemer ?>" type="text" disabled class="form-control" id="meridien">
        </td>
        <td class="form-group">
            <label for="latitude">Latitude</label>
            <input value="<?= $valuelat ?>" type="text" disabled class="form-control" id="latitude" >


        </td>
        <td class="form-group">
            <label for="longitude">Longitude</label>
            <input value="<?= $valuelon ?>" type="text" disabled class="form-control" id="longitude">
        </td>

    </tr>
    <tr>
        <td class="form-group">
            <label for="idplace">IDplace</label>
            <input value="<?= $valueidplace ?>" type="text" disabled class="form-control" id="idplace">
        </td>
        <td class="form-group">
            <label for="idimage">IDimage</label>
            <input value="<?= $valueidimage ?>" type="text" disabled class="form-control" id="idimage" >
        </td>
        <td class="form-group">
            <label for="team">Team</label>
            <input value="<?= $valueteam ?>" type="text" id="team" class="form-control">
        </td>
    </tr>
    <tr>
        <td class="form-group">
            <label for="Droit">Droit</label>
            <input value="<?= $valuedroit ?>" type="text" id="Droit" class="form-control">

        </td>
        <td class="form-group">
            <label for="Slogan">Slogan</label>
            <input value="<?= $valueslogan ?>" type="text" class="form-control" id="Slogan">
        </td>
        <td class="form-group">
            <label for="Pseudo">Pseudo</label>
            <input value="<?= $valuepseudo ?>" class="form-control" type="text" id="Pseudo" >
        </td>

    </tr>

</table>
<br>
<div style="text-align: center">
<img src="images/400-500/<?= $valueidimage ?>.jpg" width="15%" style="margin-top: -25px" alt="Images id : <?= $valueidimage ?>"><br><br>
<button id="UnlockallCMD" class="btn btn-danger">UnlockAll</button>
<button id="Save" class="btn btn-success">Sauvegarder</button>
<button id="confirmUA" onclick="window.confirm('Vous êtes sur le point d\'acheter votre poids en chocolat ?')" class="btn btn-primary" >Test multi alert</button>
</div>
    <?php

$content = ob_get_clean();
require_once 'gabarit2.php';
?>
