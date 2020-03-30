<?php
/**
 * Created By PhpStorm
 * User: benoit.pierrehumbert
 * Date: 04.02.2020
 * Time: 15:57
 */
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
?>