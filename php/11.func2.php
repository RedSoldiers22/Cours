<?php

function affiche($nom,$prenom,$dept){
    // concatenation de chaines et variables
    echo "bonjour ".$prenom. " " .$nom. " du département " .$dept."<br>";
}

affifche("Smith","John","production")

// on peut lui dire ici di jamais il n'y a pas 
// de troisième arguments de mttre un argument par default ainsi
// je ne peux executer la fonction avec seulement deux arguments
affiche("xxxx","polo");

?>