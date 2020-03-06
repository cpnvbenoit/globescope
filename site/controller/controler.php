<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert and simon.cuany
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

    unset($_SESSION['username']);
    $_SESSION['fail'] = true;
    require_once 'view/home.php';
}

function testhashed()
{
    $_SESSION['hash'] = $_POST['testhash'];
    require_once 'view/testhash.php';
}

function tryLogin()
{

    $users = getUsers();
    $username = $_POST['username'];
    $password = $_POST['password'];
    unset($_SESSION['username']);

    foreach ($users as $user) {
        if (($username == $user['username']) && ($password == password_verify($password, $user['password']))) {

            $_SESSION['username'] = $username;//a röussi

        }
    }
    if (isset($_SESSION['username'])) {//si a reussi
        $_SESSION['fail'] = false;//resusi
        require_once 'view/succeslogin.php';
    } else {
        $_SESSION['fail'] = true;//pas susi
        ?>
        <script> alert("Login échoué")</script>
        <?php
        require_once 'view/home.php';
    }


}

function showchilds()
{

    if (isset($_SESSION['username']) == true) {
        $childs = getChilds();
        require_once 'view/showchilds.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !" ;
        require 'view/home.php';
    }

}

function editchild($IDimage)
{
    if (isset($_SESSION['username']) == true) {
        $idchild = $IDimage;
        $childs = getChilds();
        require_once 'view/editchild.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !" ;
        require 'view/home.php';
    }




}

?>