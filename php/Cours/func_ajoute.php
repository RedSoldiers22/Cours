<?php

    //fonction normale
    //soit une variable
    $x=0;
    function ajoute3(&$arg){
        $arg = $arg + 3; // peut s'écrire aussi $arg += 3
        //echo "valeur dans la fonction: ".$arg;
        // sinon comme dans JS on peut utiliser l'opérateur return pour retourner une valeur
        // *ici par exemple
        return($arg);
    }

    // execution de la fonction
    //ajoute3($x);
    //echo "valeur de x ". $x.<br> ;
    // *et ici
    echo "valeur de x: ".ajoute3($x)."<br>";

    //passage par référence => va s'éxecuter sur l'adresse de la variable
    // avec l'opérateur & (ajouter & à $arg dans la fonction)


?>