<?php
if (isset($_FILES['media'])){
    unset($_FILES['media']);
}
?>
<html>
<head>
    <title>Upload-Image</title>
    <style>
        body{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    <link rel="icon" type="image/png" href="//cdn.icon-icons.com/icons2/665/PNG/512/earth_icon-icons.com_60279.png" />
</head>
<body>

<h1>Merci de donner un fichier qui ne dépasse pas 10 MB.</h1>
<h3 class="alert-danger"><?= $errors ?></h3>
<form action="index.php?action=uploadfile&IDimage=<?= $IDimage?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="media" />
    <input type="submit"/>
</form>
</body>
</html>
