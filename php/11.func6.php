<?php
// La variable static, quand on exécute une fonction la variable qui est déclaré
// dans la fonction n'existe plsu quand la fonction a terminé son exécution
// Une variable déclarée static dans cette fonction garde sa valeur même si
// on exécute plusieurs fois la fonction

function compteur(){
    static $x=0;
    echo "x =".$x."<br>";
    $x++
}

compteur();
compteur();
compteur();