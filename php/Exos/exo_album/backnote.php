<?php
require_once "connect.php";
$u = $_POST['user'];
$t = $_POST['titre'];
$n = $_POST['note'];

$sql = "INSERT INTO notation (id, id_utilisateur, note) VALUES (?,?,?);";
$sth = $connection->prepare($sql);
$sth->execute([$u,$t,$n]);
?>