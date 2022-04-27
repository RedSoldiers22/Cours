<?php
require("6.2.fonctions.php");

debug($_POST);

// des fonctions PHP permettent d'écrire dans un fichier
// ce sont fopen et fwrite
$annuaire = fopen("annuaire.txt","a+"); //crée un fichier, l'ouvre en écriture et place le pointeur à la fin du fichier
// d'abord on fabrique la chaîne à partir de ce qu'il y a dans $_POST
$content = $_POST["nom"].":".$_POST["prenom"].":".$_POST["age"]."\n"; // $_POST est un tableau associatif
fwrite($annuaire,$content);

header('Location: form01.php');
// ce programme enregistre les o
?>