<?php

$root = str_replace('index.php' , '' , $_SERVER['SCRIPT_FILENAME'] ) ;
define('_ROOT',$root);
define('_URL',"http://localhost/afpa/php/Exos/exo_mcv_controller/");
require ('header.php');

if($_GET['action']){

    $params = explode("/", $_GET['action']);
    $controller = $params[0];
    if(isset($params[1])){
        $action = $params[1];
    }

    require_once('controllers/'.$controller.'.php');
}
else{
    echo "pas de controller";
}

    if(function_exists($action)){
        if(isset($params[2]) && isset($params[3])){
            $action($params[2],$params[3]);
        }elseif (isset($params[2])){
            $action($params[2]);
        }else{
            $action();
        }
    
} else {
 
    require_once('controllers/controllerEtudiant.php');
    listeEtudiant();
}
?>