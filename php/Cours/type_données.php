<?php
// on définit une constante qui le sera pour tout le fichier
define("DB_NAME","ecommerce")
require_once("6.1fonctions.php")

// types de données en PHP

// string
$str = "Hello world";
echo (is_string($str));

// booléen
$a = true;
$b = false;

if(is_bool($a)){
    debug "$a est un booléen"
}

// entier
$x=3;
$y=7;
$somme = $x + $y;
echo $somme;

if(is_int($x)){
    echo "x est un entier<br>";
}

// décimales
// fonction qui permet d'afficher la valeur d'une variable est var_dump

$decimal = 10.40;
var_dump($decimal); echo "<br>";

// tableaux [] ou avec la fonction array()
$tab = ["une", "chaine"]; //peut être créé comme ça
//ou
$tab1 = array("html","JS","CSS");
debug($tab1)

// constantes (avec en haut)
// par convention les constantes sont en majuscules
echo "Je me connecte à la base de données:".DB_NAME ;
?>