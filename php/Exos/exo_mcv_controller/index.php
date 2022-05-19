<?php

if($_GET['action']){
    $params = explode("/", $_GET['action']);
    $controller = $params[0];
    require_once('controllers/'.$controller.'.php');
    if(isset($params[1])){
        $action = $params[1];
    }




}else{
    echo "pas de controller";
};

if(function_exists($action)){
    $action();
}


?>