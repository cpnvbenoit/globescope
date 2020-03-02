<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 06.02.2020
 * Time: 10:44
 */
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    require_once 'view/home.php';
}

function disconnect()
{
    unset($_SESSION);
    require_once 'view/home.php';
}
function tryLogin()
{

    $users=getUsers();
    $username=$_POST['username'];
    $password=$_POST['password'];
    unset($_SESSION['username']);

    foreach ($users as $user){
        if (($username==$user['username'])&&($password==$user['password'])){

            $_SESSION['username']=$username;//a röussi

        }
    }
    if (isset($_SESSION['username'])){//si a reussi
        echo "pomme";
        $_SESSION['fail']=false;//resusi
        require_once 'view/succeslogin.php';
    }else{
        echo "Banane";
        $_SESSION['fail']=true;//pas susi
        require_once 'view/home.php';
    }


}

function showchilds(){

    $childs= getChilds();
    require_once 'view/showchilds.php';
}
function editchild($IDimage){
    $idchild = $IDimage;
    $childs= getChilds();
    require_once 'view/editchild.php';
}

?>