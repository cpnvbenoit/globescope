<?php
/**
 * Created By PhpStorm
 * User: Benoit.PIERREHUMBERT
 * Date: 11.02.2020
 * Time: 16:38
 */
ob_start();
?>
    <script>window.open("index.php?action=showchilds")</script>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>