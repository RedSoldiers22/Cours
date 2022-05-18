<?php

require "connect.php";

$sql ="SELECT id, AVG(note) FROM notation GROUP BY id ";
$sql = $connection->prepare($sql);
$sql->execute();
$data = $sql->fetchAll();
echo "<pre>";
var_dump($data);

?>
