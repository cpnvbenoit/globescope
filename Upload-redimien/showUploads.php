<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert and simon.cuany
 * Date: 04.02.2020
 * Time: 15:49
 */
ob_start();
?>
<img src="uploads/<?= $file_name?>" style="text-align: center" width="400px" alt="image Uploadée">
<div style="position: absolute;left: 42%;top: 42%;background-color: violet;border-radius: 8px;width: 450px;height: 300px">
    <table>
        <tr>
            <td><button><a href="index.php?action=redim&size=128&name=<?= $file_name?>">Redim 128X128</a></button></td>
        </tr>
        <tr>
            <td><button><a href="index.php?action=redim&size=64&name=<?= $file_name?>">Redim 64X64</a></button></td>
        </tr>
        <tr>
            <td><button><a href="index.php?action=redim&size=400&name=<?= $file_name?>">Redim 400X500</a></button></td>
        </tr>
    </table>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
