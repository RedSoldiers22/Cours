<?php

require("specialite.php");
require("professeur.php");

$prof = new Professeur(1,"Smith","John","email@email.fr");
$prof->addSpecialite("001","Java");
$prof->addSpecialite("002","PHP");

$prof->afficheSpecialites();



?>