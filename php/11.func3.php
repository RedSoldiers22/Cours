<?php

function affiche(...liste){
    foreach($liste as $prenom)
    // si on n'a pas de notion de clé valeur dans leur prénom on peut
    // mettre directement foreach($liste as $key) => $prenom;
    echo "employé: ".$prenom."<br>";
}

affiche("jean", "marcel", "paul", "jojo");

?>