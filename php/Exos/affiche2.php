<?php
require("fonctions.php");

debug($_GET); // récupère les valeurs envoyées par la méthode GET

$categorie= $_GET['categorie'];
if($categorie == "femmes"){
    //j'affiche le catalogue femmes (quand il y a un tableau catalogue au dessus)
}
// je récupére les données tableau[$categorie]
?>