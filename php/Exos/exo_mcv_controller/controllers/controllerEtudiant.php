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

?>