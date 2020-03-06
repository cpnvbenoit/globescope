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

switch ($action) {
    case 'home';
        home();
        break;
    case 'editchild';
        editchild($IDimage);
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