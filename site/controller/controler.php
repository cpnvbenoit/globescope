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
function showchildsSearch()
{

    if (isset($_SESSION['username']) == true) {
        $searchText=$_POST['searchText'];
        $childs = getChilds();
        $compteur=-1;
        $search=["id"=>"test" ,"IDPlace" =>"158"];
        foreach ($childs as $child){
            $compteur++;
            $in=false;
            if ($child['IDPlace']==$searchText){$in=true;}
            else if ($child['IDImage']==$searchText){$in=true;}
            else if ($child['mer']==$searchText){$in=true;}
            else if ($child['lat']==$searchText){$in=true;}
            else if ($child['lon']==$searchText){$in=true;}
            else if ($child['Pseudo']==$searchText){$in=true;}
            else if ($child['Droit']==$searchText){$in=true;}
            else if ($child['Slogan']==$searchText){$in=true;}
            else if ($child['Team']==$searchText){$in=true;}
            else if ($child['ImageOK']==$searchText){$in=true;}
            else if ($child['Pays']==$searchText){$in=true;}
            else if ($child['Ville']==$searchText){$in=true;}
            if ($in==true) {
                $data=["id"=>$compteur ,"IDPlace" => $child['IDPlace']];
                $search[]=$data;
            }
        }
        require_once 'view/showchildsSearch.php';
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

function save($IDimage,$meridien,$latitude,$longitude,$idplace,$team,$Droit,$Slogan,$Pseudo,$Pays,$Ville){
    $childs = getChilds();
    foreach ($childs as $child){
        if ($child['IDImage'] == $idplace) {

        }
    }
}
?>