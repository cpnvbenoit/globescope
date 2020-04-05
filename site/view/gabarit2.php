<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/pomme.css">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/cssinhtml.css">
    <script type="text/javascript" src="js/editchild.js"></script>
</head>

<body>
<a class="backup" target="_blank" href="index.php?action=showBackup"><button class="btn btn-primary">Backup</button></a>
<a href="index.php?action=disconnect"><button class="btn btn-danger">Déconnexion</button></a>

<?= $content?>

<script src="js/searchChild2.js"></script>
<script src="js/childClicked2.js"></script>
</body>
</html>