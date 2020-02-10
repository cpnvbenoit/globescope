<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 04.02.2020
 * Time: 15:57
 */
session_start();
require 'controller/dataControler.php';
require "controller/controler.php";
$action=$_GET['action'];
if (isset($_GET['newusername'])){
    $newusername=$_GET['newusername'];
}

switch ($action) {
    case 'home';
        home();
        break;
    case 'GetData';
        GetData();
        break;
    default:
        home();
        break;
}

?>