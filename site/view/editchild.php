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
<table class="table" border="1"  align="center">
    <thead>
    <th>
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
        Origine
    </th>
    </thead  align="center">
    <tbody  align="center">

        <?php echo "POMME POIRE ABRICOT";
        foreach ($childs as $child) { ?>
    <tr>
            <td>
                <p><?= $child['lat'] ?> /  <?= $child['lon'] ?> / <?= $child['mer'] ?></p>
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

            <?php
        }
      ?>

    </tbody>
</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
