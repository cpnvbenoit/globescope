<?php
/**
 * Created By PhpStorm
 * User: simon.cuany
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "testhash";
ob_start();

?>
<form action="index.php?action=testhashed">
    <input type="text" name="testhash">
    <button type="submit">fsdf</button>
</form>
<?php
$content = ob_get_clean();
require_once 'gabarit2.php';
?>
