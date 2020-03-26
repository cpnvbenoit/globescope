<?php
/**
 * Created By PhpStorm
 * User: Benoit.PIERREHUMBERT
 * Date: 10.02.2020
 * Time: 14:24
 */
function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}

function getChilds()
{
    return json_decode(file_get_contents("model/dataStorage/images.json"),true);
}
function getBackup()
{
    return json_decode(file_get_contents("model/dataStorage/backup.json"),true);
}

function putBackup($backup)
{
    file_put_contents('model/dataStorage/backup.json', json_encode($backup));
}
?>