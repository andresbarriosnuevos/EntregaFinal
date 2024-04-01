<?php 
function getFolderProyect(){

    var_dump(__DIR__);
    if(strpos(__DIR__,"/")!==false ){

        $folder = str_replace("C:/xampp/htdocs/",'\\', __DIR__);
    }else{
        $folder = str_replace("C:\\xampp\\htdocs\\",'\\', __DIR__);
    }

    $folder = str_replace('config','',$folder);
    return $folder;

}


?>