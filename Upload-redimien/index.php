<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert  and simon.cuany
 * Date: 04.02.2020
 * Time: 15:57
 */
session_start();
require "controler.php";
if (isset($_GET['action'])){
    $action=$_GET['action'];
}
if (isset($_GET['IDimage'])){
    $IDimage=$_GET['IDimage'];
}
if (isset($_GET['welcome'])){
    $welcome=$_GET['welcome'];
}
if (!isset($_SESSION['fail'])){
    $_SESSION['fail']=true;
}
//Set var for save -----------------------------------------
if (isset($_POST['image'])){
    $image=$_POST['image'];
}

if (isset($action)) {
    switch ($action) {
        case 'home';
            home();
            break;
        case 'upload';
            upload();
            break;
        default:
            home();
            break;
    }
}else{
    home();
}
?>