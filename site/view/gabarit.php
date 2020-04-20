<!DOCTYPE html>
<html>
<head>
    <title>Globescope</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/Loginstyle.css">
    <link rel="stylesheet" href="css/style.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/sideBarStyle.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/searchBar.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/searchResults.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/helpStyle.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/progressBar.css?d=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/cssinhtml.css">
    <script src="js/Loginstyle.js"></script>
    <script src="js/Media.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="https://image.flaticon.com/icons/svg/814/814513.svg" />

</head>

<body>

<!-- Code de la pop-up de login sur le globe -->
<div id="login" class="modal" style="  overflow: hidden;">

    <form class="modal-content animate" action="index.php?action=tryLogin" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
        </div>


    </form>
</div>




<div class="test">

    <?= $content ?>


</div>
<span><img id="helpButton" class="GUI" src="images/questionMark.png"></span>
<div id="Help" class="GUI">
    <div id="box">
        <div id="header">
            <h3 class="aide" a href="">Help</h3>
        </div>
        <p id="closeHelp" class="closeButton" onclick="closeHelp()">X</p>
        <div id="direction">
            <a href="?action=testsecret"> <img src="images/arrowKeys.png" height="50" width="80" alt="touches directions" class="default"/></a>
            <p id="aideDeplacementSouris"> Déplacez vous en maintenant le clic gauche de la souris.</p>
        </div>
        <div id="Aidereste" class="Aide">
            <p id="aideZoom">Utilisez les touches +/- pour zoomer/dézoomer.</p>
            <hr>
            <p id="aideAgrandirImage">Double-cliquez sur l'image pour l'agrandir et afficher ses informations.</p>
            <hr>
            <p id="aideRecherche">Pour rechercher un pseudo cliquez sur la loupe et écrivez ensuite un
                pseudo.</p>
        </div>
        <div class="languageSelect">
            <span id="FR" onclick="aideFr()">FR</span>/<span id="EN" onclick="aideAng()">EN</span>/<span id="creditSpan"
                                                                                                         onclick="credit()">Credits</span>
        </div>
    </div>
    <div id="creditBox">
        <div id="header">
            <h3 class="credit" a href="">Credit</h3>
        </div>
        <p id="closeCredit" class="closeButton" onclick="closeHelp()">X</p>
        <img id="imageGroupe" src="images/photoGroupe.png" alt="Development Group">
        <div id="Groupe">
            <p id="groupeMembresContenu"></p>
        </div>
        <div class="languageSelect">
            <span id="creditSpan" onclick="aideFr()">Help</span>
        </div>
    </div>
</div>

<div id="sideBar" class="GUI" style="height: 640px">
    <p id="closeSideBar" class="closeButton">X</p>
    <div class="loader" id="imageLoader"></div>
    <div id="onClickDetails" style="overflow-y: scroll; height:630px;" >
        <img style="margin-top: 175px;width:260px;height:325px;" id="childImage">
        <span id="separator"></span>

        <div id="description">
            <table class="tablehome-infos">

                <tr>
                    <td>
                        <h6 class="infosuppleft" align="left"><b>Pseudo</b> : <span id="childPseudo"></span></h6>
                        <h6 class="infosuppleft" align="left"><b>Slogan</b> : <span id="childCitation"></span></h6>
                        <h6 class="infosuppleft" align="left"><b>Droit</b> : <span id="childRight"></span></h6>
                        <h6 class="infosuppleft" align="left"><b>Pays</b> : <span id="childPays"></span></h6>

                        <h6 class="infosuppleft" align="left"><b>Ville</b> : <span id="childVille"></span></h6>
                        <h6 class="infosuppleft" align="left"><b>Équipe</b> : <span id="childEquipe"></span></h6>
                        <h6 class="infosuppleft" align="left"><b>Média</b> : <a class="medialink" target="_blank" id="childMedia"></a></span></h6>
                        <h6 class="infosuppleft" align="left"><b>Année de production</b> : <span id="childAnneeprod"></span></h6>
                        <h6 class="infosuppleft" align="left"><b>ID de la place</b> : <span id="childIDPlace"></span></h6>

                    </td>
                </tr>
                <tr>
                    <td colspan="2"><textarea disabled name="desc" id="childDesc" cols="50" rows="4"></textarea></td>
                </tr>
                <?php if ($_SESSION['fail']==false){echo "
                    <tr>
                    
                        <td><a id=\"childEdit\" target=\"_blank\"><button class=\"editbuttonglobe\">Edit</button></a></td>
                    </tr>
                ";} ?>


            </table>

            <?php if ($_SESSION['fail']==false){echo "";} ?>
        </div>
    </div>
    <div id="onSearchDetails" class="flexContainer">
        <h1>Resultat de la recherche</h1>

    </div>
</div>

<span><img id="showSearch" class="GUI" src="images/searchIcon.png"></span>

<div id="searchBar" class="GUI">
    <input type="text" id="searchText">
    <span id="searchButton">Recherche</span>
    </input>
    <div id="onDynamicSearch">

    </div>
</div>

<div>
    <?php if (isset($_SESSION['username'])) {
        echo "<a href=\"index.php?action=disconnect\"><button class=\"disconnect-cmd\">Déconnexion</button></a>";
    } ?>
</div>

<div id="loading">
    <p>Chargement...</p>
</div>

<script src="js/three.min.js"></script>
<script src="js/three/controls/OrbitControls.js"></script>
<script src="js/three/loaders/DDSLoader.js"></script>
<script src="js/loader.js"></script>
<script src="js/searchChild.js"></script>
<script src="js/childClicked.js"></script>
<script src="js/Tween.js"></script>
<div class="pop-up">

</div>


<script type="application/x-glsl" id="sky-vertex">
varying vec2 vUV;

void main() {
    vUV = uv;
    vec4 pos = vec4(position, 1.0);
    gl_Position = projectionMatrix * modelViewMatrix * pos;
}


</script>
<script type="application/x-glsl" id="sky-fragment">
uniform sampler2D texture;
varying vec2 vUV;

void main() {
    vec4 sample = texture2D(texture, vUV);
    gl_FragColor = vec4(sample.xyz, sample.w);
}


</script>



<script src="js/globescope.js"></script>
<script src="js/Login.js"></script>


</body>
</html>