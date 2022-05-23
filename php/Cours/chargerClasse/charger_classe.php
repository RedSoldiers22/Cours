<?php
function chargerClasse($classe){
    require $classe . '.php';
}

spl_autoload_register(('chargerClasse'));

$perso = new Personnage("polo","jean",66);
$perso->parler("ESSAI");

$employe = new Employe("x","y",5);
$employeparler("enmp");

?>