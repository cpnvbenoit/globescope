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


}//2020_CPNV_A1

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

function showchildsSearch()
{

    if (isset($_SESSION['username']) == true) {
        $searchText = "/" . $_POST['searchText'] . "/i";

        $childs = getChilds();//Verifier si utile/ necessaire
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
         /*   $fields = [
                ["field" => $child['Pseudo'], "var" => "1"],
                ["field" => $child['Droit'], "var" => "2"],
                ["field" => $child['Slogan'], "var" => "3"],
                ["field" => $child['Team'], "var" => "4"],
                ["field" => $child['Pays'], "var" => "5"],
                ["field" => $child['Ville'], "var" => "6"]
            ];
            foreach ($fields as $field) {
                if (preg_match($searchText, $field['field'])) {
                    $in = true;
                    switch ($field['var']) {
                        case 1:
                            $inPseudo = true;
                            break;
                        case 2:
                            $inDroit = true;
                            break;
                        case 3:
                            $inSlogan = true;
                            break;
                        case 4:
                            $inTeam = true;
                            break;
                        case 5:
                            $inPays = true;
                            break;
                        case 6:
                            $inVille = true;
                            break;
                    }
                }*/
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
                        "Ville" => $child['Ville']
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
        $idchild = $IDimage;
        $childs = $_SESSION['childs'];
        require_once 'view/editchild.php';
    } else {
        $_SESSION['flashmessage'] = "Pas touche !";
        require 'view/home.php';
    }


}

function backup($IDimage, $meridien, $latitude, $longitude, $idplace, $team, $Droit, $Slogan, $Pseudo, $Pays, $Ville, $Media, $Anneeprod, $desc)
{
    $backup = getBackup();
    $backup[] = [
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
        "Anneeprod" => $Anneeprod,
        "desc" => $desc
    ];
    putBackup($backup);
}
function save($IDimage, $meridien, $latitude, $longitude, $idplace, $team, $Droit, $Slogan, $Pseudo, $Pays, $Ville, $Media, $Anneeprod, $desc)
{
    /*$childs = getChilds();
    foreach ($childs as $child){
        if (preg_match($searchText,$child['IDImage'] == $idplace) {

        }
    }*/
    backup($IDimage, $meridien, $latitude, $longitude, $idplace, $team, $Droit, $Slogan, $Pseudo, $Pays, $Ville, $Media, $Anneeprod, $desc);
}

?>