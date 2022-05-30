<?php
session_start();
require_once ('mod/modAct.php');

function viewAct(){
    $result = modAllAct();
    require("views/viewAllAct.php");
}

function formAddAct(){
    require("views/viewAddAct.php");
}

function addAct(){
    addUnAct($_POST);
    header("../header.php");
}

function formModifAct($id){
    $result=getUnAct($id);
    require ("views/viewModifAct.php");
}
function modifAct($id){
    updateAct($id,$_POST);
    header("../header.php");
}

function supprAct($id){
    deleteAct($id);
}

?>