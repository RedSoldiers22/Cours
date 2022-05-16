<?php

require_once "connect.php";

$i = $_POST['id'];
$n = $_POST['nom'];
$d = $_POST['description'];
$h = $_POST['prixht'];
$t = $_POST['tva'];
$c = $_POST['prixttc'];

$sql = "UPDATE produit SET nom=?, description=?, `prix HT`=?, tva=?, `prix TTC`=? WHERE id=?"; //utilisre des backquotes ou pas d'espaces dans les champs
$sth = $connection->prepare($sql);
$sth->execute([$n,$d,$h,$t,$c,$i]);

?>