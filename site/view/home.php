<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 04.02.2020
 * Time: 15:49
 */
ob_start();
?>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
