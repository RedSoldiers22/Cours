<?php
session_start();
require_once ('models/modelCours.php');

function listeCours(){
    $result = getCours();
    //print_r(($result));
    require("views/viewAllCours.php");
}

function listeUnCours($id){
    $result=getUnCours($id);
    require("views/viewOneCours.php");
}

function afficheAddCours(){
    require("views/viewAddCours.php");
}

function ajouteCours(){
    addCours($_POST);
}

function afficheModifCours($id){
    $result=getUnCours($id);
    require ("views/viewModifCours.php");

function modifCours($id){
    //execite une fonction du modèle
    updateCours($id,$_POST);
}
}

?>