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
<button id="UnlockallCMD" class="UnlockallCMD btn btn-danger">UnlockAll</button>
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
    <th style="text-align: center">
    Media
    </th>
    <th style="text-align: center">
       Année-production
    </th>
    <th style="text-align: center">
       Résumé
    </th>
    </thead  align="center">
    <tbody align="center">

    <?php
    foreach ($childs as $child) {
        if ($child['IDImage'] == $_SESSION['idchild']) {

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
                    <p><?= $child['Team'] ?></p>
                </td>
                <td>
                    <p><?= $child['Pays'] ?></p>
                </td>
                <td>
                    <p><?= $child['Ville'] ?></p>
                </td>
                <td>
                    <p><?= $child['Media'] ?></p>
                </td>
                <td>
                    <p><?= $child['Anneeprod'] ?></p>
                </td>
                <td>
                    <p><?php echo substr($child['Desc'], 0,15)  ?></p>
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
    if ($child['IDImage'] == $_SESSION['idchild']) {
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
        $valuemedia = $child['Media'];
        $valuetitre = $child['Titre'];
        $valueanneeprod = $child['Anneeprod'];
        $valuedesc = $child['Desc'];
        $_SESSION['backupnull']=[
            "lat"=>$valuelat,
            "mer"=>$valuemer,
            "lon"=>$valuelon,
            "IDPlace"=>$valueidplace,
            "IDImage"=>$valueidimage,
        ];
    }
}
?>
<br>
<form method="post" id="formedit" action="index.php?action=save">
    <table align="center" class="table" style="width: 80%">
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
                <label for="Ville">Ville</label>
                <input name="Ville" value="<?= $valueville ?>" class="form-control" type="text" id="Ville" >
            </td>
            <td class="form-group">
                <label for="Media">Media</label>
                <input name="Media" value="<?= $valuemedia ?>" class="form-control" type="text" id="Media" >
            </td>
        </tr>
        <tr>
            <td class="form-group">
                <label for="Anneeprod">Année de production</label>
                <input name="Anneeprod" value="<?= $valueanneeprod ?>" class="form-control" type="text" id="Anneeprod" >
            </td>
            <td class="form-group">
                <label for="Titre">Titre du média</label>
                <input name="Titre" value="<?= $valuetitre ?>" class="form-control" type="text" id="Titre" >
            </td>
            <td class="form-group">
                <label for="Desc">Description</label>
                <textarea rows="8" maxlength="1000"   class="form-control" name="desc" id="Desc" form="formedit"><?= $valuedesc ?></textarea>
            </td>
        </tr>
    </table>
    <div class="buttonEdit">
        <img src="images/400-500/<?= $valueidimage ?>.jpg" width="15%" style="margin-top: -30px" alt="Images id : <?= $valueidimage ?>"><br><br>
        <button id="Save" type="submit" class="btn btn-success">Sauvegarder</button>
    </div>
</form>
<br>


    <?php

$content = ob_get_clean();
require_once 'gabarit2.php';
?>
