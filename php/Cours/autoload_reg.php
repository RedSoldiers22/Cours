<?php

// autoload de classes
function chargerClasse($classe){
    require $classe.'.php';
}

spl_autoload_register('chargerClasse');

$user = new User();
$user->setNom("Roger");
$user->setPrenom("Pol");
$user->setAge(22);
print_r($user);
$user->plusUn()->moins2();
print_r($user);
