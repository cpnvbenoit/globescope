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
        require_once 'view/home.php';
    }
}//edmadmin 2020_CPNV_A1

function showchilds($welcome)
{

    if (isset($_SESSION['username']) == true) {
        $childs = getChilds();
        require_once 'view/showchilds.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !";
        require 'view/home.php';
    }

}
function showBackup()
{

    if (isset($_SESSION['username']) == true) {
        $childs = getBackup();
        require_once 'view/showbackup.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !";
        require 'view/home.php';
    }

}
function GetData(){
    //Get JSON Params

    $obj = json_decode($_POST["x"], false);
    $data = json_decode(file_get_contents('model/dataStorage/images.json'),true); // by default, return everything as an associative array
    $query = "";
    if (isset($_POST['Mode']))
    {
        $mode = $_POST["Mode"];

        if ($mode == "search")
        {
            $pattern = "/{$obj->Pseudo}/i";

            $res = [];
            foreach ($data as $image)
                if (preg_match($pattern, $image['Pseudo'])) { // match
                    $res[] = $image;
                }else if (preg_match($pattern, $image['Slogan'])){
                    $res[] = $image;
                }else if (preg_match($pattern, $image['Droit'])){
                    $res[] = $image;
                }else if (preg_match($pattern, $image['Pays'])){
                    $res[] = $image;
                }else if (preg_match($pattern, $image['Ville'])){
                    $res[] = $image;
                }else if (preg_match($pattern, $image['Team'])){
                    $res[] = $image;
                }
        } else if ($mode == "click")
        {
            foreach ($data as $key => $image)
            {
                if ($image['IDPlace'] == $obj->ID) // found it
                {
                    $res = $image;
                    break; // no need to continue
                }
            }
        } else if ($mode == "load")
        {
            $res = $data;
        } else
        {
            $res = null;
        }
    }
    echo json_encode($res);

}
function testsecret(){
    require 'view/testsecret.php';
}

function showchildsSearch()
{

    if (isset($_SESSION['username']) == true) {
        $searchText = "/" . $_POST['searchText'] . "/i";
        $childs = getChilds();
        $compteur = -1;
        foreach ($childs as $child) {
            $compteur++;
            $in = false;
            $inIDImage = false;
            $inIDPlace = false;
            $inmer = false;
            $inlat = false;
            $inlon = false;
            $inPseudo = false;
            $inDroit = false;
            $inSlogan = false;
            $inTeam = false;
            $inPays = false;
            $inVille = false;
                if ($searchText == ['IDPlace']) {
                    $in = true;
                    $inIDPlace = true;
                }
                if ($searchText == ['IDImage']) {
                    $in = true;
                    $inIDImage = true;
                }
                if ($searchText == ['mer']) {
                    $in = true;
                    $inmer = true;
                }
                if ($searchText == ['lat']) {
                    $in = true;
                    $inlat = true;
                }
                if ($searchText == ['lon']) {
                    $in = true;
                    $inlon = true;
                }
                if (preg_match($searchText,$child['Pseudo'])){$in=true;$inPseudo=true;}//vague
                if (preg_match($searchText,$child['Droit'])){$in=true;$inDroit=true;}//vague
                if (preg_match($searchText,$child['Slogan'])){$in=true;$inSlogan=true;}//vague
                if (preg_match($searchText,$child['Team'])){$in=true;$inTeam=true;}//vague
                if (preg_match($searchText,$child['Pays'])){$in=true;$inPays=true;}//vague
                if (preg_match($searchText,$child['Ville'])){$in=true;$inVille=true;}//vague
                if ($in == true) {
                    $search[] = ["id" => $compteur,
                        "searchText"=> $_POST['searchText'],
                        "IDPlace" => $child['IDPlace'],
                        "inIDPlace" => $inIDPlace,
                        "inIDImage" => $inIDImage,
                        "inmer" => $inmer,
                        "inlat" => $inlat,
                        "inlon" => $inlon,
                        "inPseudo" => $inPseudo,
                        "inDroit" => $inDroit,
                        "inSlogan" => $inSlogan,
                        "inTeam" => $inTeam,
                        "inPays" => $inPays,
                        "inVille" => $inVille,
                        "IDImage" => $child['IDImage'],
                        "mer" => $child['mer'],
                        "lat" => $child['lat'],
                        "lon" => $child['lon'],
                        "Pseudo" => $child['Pseudo'],
                        "Droit" => $child['Droit'],
                        "Slogan" => $child['Slogan'],
                        "Team" => $child['Team'],
                        "Pays" => $child['Pays'],
                        "Ville" => $child['Ville'],
                        "Media" => $child['Media'] ,
                        "Titre" => $child['Titre'] ,
                        "Anneeprod" => $child['Anneeprod'] ,
                        "desc" => $child['desc']
                    ];
                }
            }

        require_once 'view/showchildsSearch.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !";
        require 'view/home.php';
    }
}

function editchild($IDimage)
{
    if (isset($_SESSION['username']) == true) {
        $_SESSION['idchild'] = $IDimage;
        $childs = getChilds();
        require_once 'view/editchild.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !";
        require 'view/home.php';
    }


}

function backup()
{
    $backup = getBackup();
    $backup[]=[
        "IDPlace" =>     $_SESSION['valueidplace'],
        "IDImage" =>    $_SESSION['valueidimage'],
        "mer" =>       $_SESSION['valuemer'],
        "lat" =>   $_SESSION['valuelat'],
        "lon" =>     $_SESSION['valuelon'],
        "Pseudo" => $_SESSION['valuepseudo'],
        "Droit" => $_SESSION['valuedroit'],
        "Slogan" => $_SESSION['valueslogan'],
        "Team" => $_SESSION['valueteam'],
        "ImageOK" =>  "VRAI",
        "Pays" => $_SESSION['valuespays'],
        "Ville" =>    $_SESSION['valueville'],
        "Media" =>    $_SESSION['valuemedia'],
        "Titre" =>  $_SESSION['valuetitre'],
        "Anneeprod" =>$_SESSION['valueanneeprod'],
        "desc" => $_SESSION['valuedesc'],
        "date"=>strtotime("now")+7200
    ];
    putBackup($backup);
}
function save($IDimage, $meridien, $latitude, $longitude, $idplace, $team, $Droit, $Slogan, $Pseudo, $Pays, $Ville, $Media, $Anneeprod, $desc,$Titre)
{
        backup();
        $save = getChilds();
        $compteur=0;
        if ($meridien==null){$meridien=$_SESSION['backupnull']['mer'];}
        if ($latitude==null){$latitude=$_SESSION['backupnull']['lat'];}
        if ($longitude==null){$longitude=$_SESSION['backupnull']['lon'];}
        if ($idplace==null){$idplace=$_SESSION['backupnull']['IDPlace'];}
        if ($IDimage==null){$IDimage=$_SESSION['backupnull']['IDImage'];}
        foreach ($save as $element){
            if ($IDimage==$element['IDImage']){
                $save[$compteur] = [
                    "IDPlace" => $idplace,
                    "IDImage" => $IDimage,
                    "mer" => $meridien,
                    "lat" => $latitude,
                    "lon" => $longitude,
                    "Pseudo" => $Pseudo,
                    "Droit" => $Droit,
                    "Slogan" => $Slogan,
                    "Team" => $team,
                    "ImageOK" => "VRAI",
                    "Pays" => $Pays,
                    "Ville" => $Ville,
                    "Media" => $Media,
                    "Titre" => $Titre,
                    "Anneeprod" => $Anneeprod,
                    "desc" => $desc,
                ];
            }
            $compteur++;
        }
        putSave($save);
        $childs = $save;
        echo "<script>alert('Sauvegarde réussie !')</script>";
        require_once 'view/editchild.php';

}

function homepage(){
    require_once 'view/Homepage.php';
}
function pageupload(){

}
function boutique(){
    require_once 'boutique/index.php';
}
function forum(){
    require_once 'forum/index.php';
}
function uploadmedia(){

}
?>