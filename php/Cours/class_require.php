<?php
require "class.php";

$auto1 = new Car();
$auto2 = new Car();

$auto1->modele = "CITROEN";
echo $auto1->hello();
$auto1->rempli(50);
$auto1->dmarre();
$auto1->accelere(20);

echo $auto1->vitesse;

//$auto2->modele = "VW";

/*echo $auto1->modele;
echo $auto2->modele;



$auto1->rempli(50);
echo $auto1->reservoir;*/