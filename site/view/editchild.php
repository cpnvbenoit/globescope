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

<h1 align="center">Modifier les infos</h1><br>


<table  border="1" align="center" class="table-edit">
    <thead>
    <th style="text-align: center">
        Méridien / Latitude / Longitude
    </th>
    <th style="text-align: center">
        IDPlace
    </th>
    <th style="text-align: center">
        IDImage
    </th>
    <th style="text-align: center">
        Pseudo
    </th>
    <th style="text-align: center">
        Droit
    </th>
    <th style="text-align: center">
        Slogan
    </th>
    <th style="text-align: center">
        Origine des données
    </th>
    <th style="text-align: center">
       Pays
    </th>
    <th style="text-align: center">
       Ville
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
                <td>
                    <p><?= $child['Pays'] ?></p>
                </td>
                <td>
                    <p><?= $child['Ville'] ?></p>
                </td>

            </tr>


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
        $valueteam = $child['Team'];
        $valueville = $child['Ville'];
        $valuespays = $child['Pays'];

    }
}
?>
<br>
<table align="center" class="table" style="width: 80%">
    <form method="post" action="index.php?action=save">
    <tr>
        <td class="form-group">
            <label for="meridien">Méridien</label>
            <input name="meridien" value="<?= $valuemer ?>" type="text" disabled class="form-control" id="meridien">
        </td>
        <td class="form-group">
            <label for="latitude">Latitude</label>
            <input name="latitude" value="<?= $valuelat ?>" type="text" disabled class="form-control" id="latitude" >


        </td>
        <td class="form-group">
            <label for="longitude">Longitude</label>
            <input name="longitude" value="<?= $valuelon ?>" type="text" disabled class="form-control" id="longitude">
        </td>

    </tr>
    <tr>
        <td class="form-group">
            <label for="idplace">IDplace</label>
            <input name="idplace" value="<?= $valueidplace ?>" type="text" disabled class="form-control" id="idplace">
        </td>
        <td class="form-group">
            <label for="idimage">IDimage</label>
            <input name="idimage" value="<?= $valueidimage ?>" type="text" disabled class="form-control" id="idimage" >
        </td>
        <td class="form-group">
            <label for="team">Team</label>
            <input name="team" value="<?= $valueteam ?>" type="text" id="team" class="form-control">
        </td>
    </tr>
    <tr>
        <td class="form-group">
            <label for="Droit">Droit</label>
            <input name="Droit" value="<?= $valuedroit ?>" type="text" id="Droit" class="form-control">

        </td>
        <td class="form-group">
            <label for="Slogan">Slogan</label>
            <input name="Slogan" value="<?= $valueslogan ?>" type="text" class="form-control" id="Slogan">
        </td>
        <td class="form-group">
            <label for="Pseudo">Pseudo</label>
            <input name="Pseudo" value="<?= $valuepseudo ?>" class="form-control" type="text" id="Pseudo" >
        </td>
    </tr>
    <tr>

        <td class="form-group">
            <label for="Pays">Pays</label>
            <input name="Pays" value="<?= $valuespays ?>" class="form-control" type="text" id="Pays" >
        </td>

        <td class="form-group">

        </td>
        <td class="form-group">
            <label for="Ville">Ville</label>
            <input name="Ville" value="<?= $valueville ?>" class="form-control" type="text" id="Ville" >
        </td>

    </tr>
    </form>
</table>
<br>
<div style="text-align: center">
<img src="images/400-500/<?= $valueidimage ?>.jpg" width="15%" style="margin-top: -80px" alt="Images id : <?= $valueidimage ?>"><br><br>
<button id="UnlockallCMD" class="btn btn-danger">UnlockAll</button>
<button id="Save" type="submit" class="btn btn-success">Sauvegarder</button>
</div>
    <?php

$content = ob_get_clean();
require_once 'gabarit2.php';
?>
