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
$action=$_GET['action'];
if (isset($_GET['IDimage'])){
    $IDimage=$_GET['IDimage'];
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

//END set var for save -----------------------------------------
//set var for shearched child
$_SESSION['searchChild'] = array();
switch ($action) {
    case 'home';
        home();
        break;
    case 'editchild';
        editchild($IDimage);
        break;
    case 'save';
        save($IDimage,$meridien,$latitude,$longitude,$idplace,$team,$Droit,$Slogan,$Pseudo,$Pays,$Ville);
        break;
    case 'showchilds';
        showchilds();
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

?>