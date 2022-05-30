<?php
session_start();
require_once ('models/modelConnection.php');

function viewLogin(){
    require("views/viewLogin.php");
}

function loggedStudent(){
    $result = logStudent($_POST);
    if ($result){
        
        $_SESSION['id'] = $result['id'];
        require("views/viewLogged.php");
    }else{
        echo "Identifiants incorrects";
    }
}

function disconnect(){
    $_SESSION=0;
}


?>