<?php
/**
 * Created By PhpStorm
 * User: simon.cuany and benoit.pierrehumbert
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "Error";
if ($_SESSION['fail'] = "false") {
    $title = "Affichage";
    ob_start();
    ?>
    <div id="searchbar">

        <form method="post" action="index.php?action=showchildsSearch" class="form-group formshow">
            <div class="input-group">
                <input class="form-control" type="text" name="searchText" value=" "/>
                <div class="input-group-btn">
                    <button class="btn btn-default" id="searchButton" >
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script> alert("Bienvenue !") </script>
    <h1 class="titleshowchild">Afficher les enfants</h1>
    <!--
    <h4 style="padding-left: 10px"> Rechercher par</h4>
    <table class="table" style="text-align: center">
        <form>
            <tr>
                <td>
                    <label for="test">Latitude</label>
                    <input type="radio" id="test" name="Recherche-Latitude">
                </td>
                <td>
                    <label for="test">Longitude</label>
                    <input type="radio" id="test" name="Recherche-Longitude">
                </td>
                <td>
                    <label for="test">Meridien</label>
                    <input type="radio" id="test" name="Recherche-Meridien">
                </td>
                <td>
                    <label for="test">id image</label>
                    <input type="radio" id="test" name="Recherche-idimage">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="test">Pseudo</label>
                    <input type="radio" id="test" name="Recherche-Pseudo">
                </td>
                <td>
                    <label for="test">Droit</label>
                    <input type="radio" id="test" name="Recherche-Droit">
                </td>
                <td>
                    <label for="test">Slogan</label>
                    <input type="radio" id="test" name="Recherche-Slogan">
                </td>
                <td>
                    <label for="test">Team</label>
                    <input type="radio" id="test" name="Recherche-Origine-des-données">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="test">Pays</label>
                    <input type="radio" id="test" name="Recherche-Pays">
                </td>
                <td>
                    <label for="test">Ville</label>
                    <input type="radio" id="test" name="Recherche-Ville">
                </td>
                <td>
                    <label for="test">Team</label>
                    <input type="radio" id="test" name="Recherche-Team">
                </td>
                <td>

                    <label for="test">Tous</label>
                    <input type="radio" id="test" name="Recherche-Tous">

                </td>
            </tr>
        </form>
    </table>
    -->
    <br>
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
        <th>
            Ville
        </th>
        <th>
            Media
        </th>
        <th>
            Anneeprod
        </th>
        <th>
            Desc
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
                    <p><?= $child['Desc'] ?></p>
                </td>

                <td>
                    <button class="btn btn-primary"><a
                                href="index.php?action=editchild&IDimage=<?= $child['IDImage'] ?>" target="_blank"
                                class="buttoneditshowchild">Modifier</a></button>
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
