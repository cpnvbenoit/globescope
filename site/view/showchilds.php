<?php
/**
 * Created By PhpStorm
 * User: simon.cuany and benoit.pierrehumbert
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "Error";
if ($_SESSION['fail']="false") {
    $title = "Affichage";
    ob_start();
    ?>
    <script> alert("Bienvenue !") </script>
    <h1 align="center">Afficher les enfants</h1>
    <h4 style="padding-left: 10px"> Rechercher par</h4>
    <table class="table" style="text-align: center">
        <form>
            <tr>
                <td>
                    <label for="test">Latitude</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
                <td>
                    <label for="test">Longitude</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
                <td>
                    <label for="test">Meridien</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
                <td>
                    <label for="test">id image</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="test">Pseudo</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
                <td>
                    <label for="test">Droit</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
                <td>
                    <label for="test">Slogan</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
                <td>
                    <label for="test">Origine</label>
                    <input type="radio" id="test" name="Recherche">
                </td>
            </tr>
        </form>
    </table>
    <table class="table" border="1" align="center" style="border: #BCDC53">
        <thead>
        <th width="220px">
            Latitude / Longitude / Meridien
        </th>
        <th >
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
            Origine
        </th>
        <th>
            Modifier
        </th>
        </thead  align="center" >
        <tbody align="center">

        <?php
        foreach ($childs as $child) {

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
                <td>
                    <button class="btn btn-primary"><a href="index.php?action=editchild&IDimage=<?= $child['IDImage'] ?>" target="_blank"
                               style="text-decoration: none ; color: #ffffff">Modifier</a></button>
                </td>
            </tr>

            <?php
        }
        ?>

        </tbody>
    </table>


    <?php
    $content = ob_get_clean();
    require_once 'gabarit2.php';
} else {
require 'home.php';
}
?>
