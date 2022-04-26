<?php
require_once("6.2fonctions.php");

// on créé un tableau de tableaux
$employes = [
    [ "name"=>"Polo",
        "adresse"=>"Paris",
        "email"=>"polo@gmail.com"
    ],
    [ "name"=>"Jeanne",
        "adresse"=>"Grenoble",
        "email"=>"Jeanne@gmail.com"
    ],
    [ "name"=>"Robert",
        "adresse"=>"Combourg",
        "email"=>"Roro@gmail.com"
    ],  
];

debug($employes);

debug($employes[0]["name"]);

foreach($employes as $key => $values){
    <h1>employés</h1>

    foreach($values as $keys => $val);
    debug($val);
    //afficher l'employé en html autre que <pre>
}