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
        Team
    </th>
    <th>
        Modifier
    </th>
    </thead  align="center">
    <tbody  align="center">

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
<table>
    <tr>
        <td>
            <input type="text" disabled id="meridien" >
            <input type="text" disabled id="latitude">
            <input type="text" disabled id="longitude">
            <input type="text" disabled id="idplace">
            <input type="text" disabled id="idimage">
            <input type="text" id="Pseudo">
            <input type="text" id="Droit">
            <input type="text" id="Slogan">
            <input type="text" id="team">

        </td>
        <td>

        </td>
        <td>

        </td>
        <td>

        </td>
    </tr>

</table>

<?php
$content = ob_get_clean();
require_once 'gabarit2.php';
?>
