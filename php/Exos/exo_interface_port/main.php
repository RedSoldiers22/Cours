<?php

require "amarable.php";
require "port.php";
require "bateau.php";
require "sousmarin.php";
require "hydravion.php";

// création d'un port
$port = new Port("Brest");

$bateau = new Bateau();
$bateau->setMasse(60);
$bateau->affiche();
$port->accueilEngin($bateau);

$sm = new SousMarin();
$sm->setMasse(80);
$sm->affiche();
$port->accueilEngin($sm);

$mh = new Hydravion();
$mh->setMasse(35);
$mh->affiche();
$port->accueilEngin($mh);


?>