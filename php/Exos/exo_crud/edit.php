<?php
//connexion DBB
require_once "connect.php";
//données postées
//requête SQL
$sql = "UPDATE `produit` SET `nom` = 'nom', `description` = 'description', `prix HT` = 'prix HT', `tva` = tva', `prix TTC` = 'prix TTC' WHERE `produit`.`id` = id;";