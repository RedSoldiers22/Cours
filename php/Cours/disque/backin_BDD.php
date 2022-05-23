<?php
require_once "connec_disk.php";
$d = $_POST['titre']; //va chercher les valeurs postées du formulaire
$g = $_POST['genre'];
$a = $_POST['artistes'];

$sql = "INSERT INTO disque (titre,id_genre,id_artiste) VALUES (?,?,?)"; // ? permettent que ce qui est posté s'arrête là (sinon continue à interpréter)
$sth = $connection->prepare($sql);
$sth->execute([$d,$g,$a]);

?>