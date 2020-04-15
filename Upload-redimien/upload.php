<?php//code copier de https://www.tutorialspoint.com/php/php_file_uploading.htm
ob_start();
?>
<html>
<body>
<span style="color: red">
<?php
    if (isset($errors)){
        foreach ($errors as $error){
            echo $error;
        }
    }
?>
    </span>
<form action="index.php?action=upload" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
</form>

</body>
</html>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>