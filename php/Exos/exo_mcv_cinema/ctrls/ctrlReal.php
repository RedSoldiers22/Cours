<?php
session_start();
require_once ('mod/modReal.php');

function viewReal(){
    $result = modAllReal();
    require("views/viewAllReal.php");
}

function formAddReal(){
    require("views/viewAddReal.php");
}

function addReal(){
    addUnReal($_POST);
    header("../header.php");
}

function formModifReal($id){
    $result=getUnReal($id);
    require ("views/viewModifReal.php");
}
function modifReal($id){
    updateReal($id,$_POST);
    header("../header.php");
}

function supprReal($id){
    deleteReal($id);
}

?>