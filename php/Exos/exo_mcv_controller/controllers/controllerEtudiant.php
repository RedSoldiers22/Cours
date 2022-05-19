<?php
require_once ('models/modelStudents.php');
function ditBonjour(){
    echo "Bonjour dit";

}

function listeEtudiant(){
    $result = getEtudiants();
    //print_r(($result));
    require("views/viewAllEtudiant.php");
}

function listeUnEtudiant($id){
    $result=getUnEtudiant($id);
    require("views/viewOneEtudiant.php");
}

function afficheAddEtudiant(){
    require("views/viewAddEtudiant.php");
}

function ajouteEtudiant(){
    addEtudiant($_POST);
}

function afficheModifEtudiant($id){
    $result=getUnEtudiant($id);
    require ("views/viewModifEtudiant.php");

function modifEtudiant($id){
    //execite une fonction du modèle
    updateEtudiant($id,$_POST);
}
}

?>