<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert  and simon.cuany
 * Date: 04.02.2020
 * Time: 15:57
 */
session_start();
require 'controller/dataControler.php';
require "controller/controler.php";
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
if (isset($_POST['meridien'])){
    $meridien=$_POST['meridien'];
}
if (isset($_POST['latitude'])){
    $latitude=$_POST['latitude'];
}
if (isset($_POST['longitude'])){
    $longitude=$_POST['longitude'];
}
if (isset($_POST['idplace'])){
    $idplace=$_POST['idplace'];
}
if (isset($_POST['idimage'])){
    $idimage=$_POST['idimage'];
}
if (isset($_POST['team'])){
    $team=$_POST['team'];
}
if (isset($_POST['Droit'])){
    $Droit=$_POST['Droit'];
}
if (isset($_POST['Slogan'])){
    $Slogan=$_POST['Slogan'];
}
if (isset($_POST['Pseudo'])){
    $Pseudo=$_POST['Pseudo'];
}
if (isset($_POST['Pays'])){
    $Pays=$_POST['Pays'];
}
if (isset($_POST['Ville'])){
    $Ville=$_POST['Ville'];
}
if (isset($_POST['Media'])){
    $Media=$_POST['Media'];
}
if (isset($_POST['Titre'])){
    $Titre=$_POST['Titre'];
}
if (isset($_POST['Anneeprod'])){
    $Anneeprod=$_POST['Anneeprod'];
}
if (isset($_POST['desc'])){
    $desc=$_POST['desc'];
}
//END set var for save -----------------------------------------
if (isset($action)) {
    switch ($action) {
        case 'home';
            home();
            break;
        case 'editchild';
            editchild($IDimage);
            break;
        case 'save';
            save($IDimage, $meridien, $latitude, $longitude, $idplace, $team, $Droit, $Slogan, $Pseudo, $Pays, $Ville, $Media, $Anneeprod, $desc, $Titre);
            break;
        case 'showchilds';
            showchilds($welcome);
            break;
        case 'showBackup';
            showBackup();
            break;
        case 'showchildsSearch';
            showchildsSearch();
            break;
        case 'GetData';
            GetData();
            break;
        case 'tryLogin';
            tryLogin();
            break;
        case 'disconnect';
            disconnect();
            break;
        case 'testhashed';
            testhashed();
            break;
        default:
            home();
            break;
    }
}else{
    home();
}
?>