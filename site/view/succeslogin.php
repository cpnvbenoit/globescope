<?php
/**
 * Created By PhpStorm
 * User: Benoit.PIERREHUMBERT
 * Date: 11.02.2020
 * Time: 16:38
 */
ob_start();
?>
<p class="alert alert-success">Connexion réussie.</p>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>