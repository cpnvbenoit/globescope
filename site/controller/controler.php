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
    foreach ($users as $user){
        if (($username==$user['username'])&&($password==$user['password'])){

            $_SESSION['username']=$username;
        }
    }
    if (isset($_SESSION['username'])==false){
        $_SESSION['fail']=true;
        require_once 'view/succeslogin.php';
    }else{
        $_SESSION['fail']=false;
        require_once 'view/home.php';
    }


}

function editchild(){

    $childs= getChilds();
    require_once 'view/editchild.php';
}

?>