<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
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