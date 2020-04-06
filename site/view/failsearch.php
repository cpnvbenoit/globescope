<?php
/**
 * Created By PhpStorm
 * User: Benoit.PIERREHUMBERT and simon.cuany
 * Date: 11.02.2020
 * Time: 16:38
 */
ob_start();

if (isset($_SESSION['username'])) {
    ?>
    <script>alert('Aucun résultat.')
    </script>
    <?php
    require_once 'view/showchildsSearch.php';
}
$content = ob_get_clean();

require "gabarit2.php";
?>