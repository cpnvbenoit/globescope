<?php
if (isset($_FILES['image'])){
    unset($_FILES['image']);
}
?>
<html>
<body>
<form action="index.php?action=upload" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
</form>
</body>
</html>
