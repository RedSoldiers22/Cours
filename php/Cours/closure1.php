<?php

$s = "hello";
$f = function () use(&$s){ // & permets de stocker l'adresse de $s, et efface et change
        echo $s;           // ce qui est dedans si on mets autre chose dans $s
    
};
// dans $f je mets le texte de la fonction en enfermant la variable $s
$s = "how are you"; // si pas de & il ne gardera que la valeur initiale

$f();
?>