<?php
require_once "connect.php";
$s = $_POST['songs'];

$sql = "SELECT titre FROM `track` WHERE id_album = $s;";
$sql = $connection->prepare($sql);
$sql->execute();
$data = $sql->fetchAll();
echo "<pre>";
var_dump($data);
?>