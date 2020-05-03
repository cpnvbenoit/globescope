<?php
/**
 * Created By PhpStorm
 * User: simon.cuany and benoit.pierrehumbert
 * Date: 13.02.2020
 * Time: 11.19
 */
$title = "Error";
if ($_SESSION['fail'] == false) {
    $title = "Logs";
    ob_start();
    /*
     * $log[]=[
                "before"=>$_SESSION['valuemedia'],
                "after"=>"media/".$IDimage.".".$file_ext,
                "what"=>"Changing Media upload : $file_name",
                "IDimages"=>$IDimage,
                "state"=>"succes",
                "date"=>strtotime("now")+7200
    */
    ?>

    <style>.log{display: none}</style>
    <h1 class="titleshowchild">Logs</h1>
    <br><br><br><br><br>
    <?php
        foreach ($log as $item){
    ?>
            <h4><?php echo date('d/m/Y H:i:s', $item['date']);  ?>IDimages=<?= $item['IDimages']?> (<?= $item['state']?>): <?= $item['what']?>| Before: <?= $item['before']?>|
                 After: <?= $item['after']?></h4>
<?php }?>

    <?php
    $content = ob_get_clean();
    require_once 'gabarit2.php';
} else {
    require 'home.php';
}
?>
