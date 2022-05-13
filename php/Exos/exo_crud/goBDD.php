<?php
require_once "connect.php";
$e = $_POST['email']; //va chercher les valeurs postées du formulaire
$m = $_POST['mdp'];
$n = $_POST['nom'];
$p = $_POST['prenom'];
$b = $_POST['bureau'];
$i = $_POST['idRole'];
$hash= password_hash($m,PASSWORD_DEFAULT); // hash le password

$sql = "INSERT INTO user (email, password, nom, prenom, bureau, id_role) VALUES (?,?,?,?,?,?)"; // ? permettent que ce qui est posté s'arrête là (sinon continue à interpréter)
$sth = $connection->prepare($sql);
$sth->execute([$e,$hash,$n,$p,$b,$i]);

?>