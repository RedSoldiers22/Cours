<?php

$n = $_POST['nom'];
$p = $_POST['prenom'];
$m = $_POST['email'];

try {
//connection à la base de données
$connection = new PDO("mysql:host=localhost;dbname=premiere","root","");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //reporte les erreurs PDO en mode PDO Execption
//on crée un objet de connection à la base de données
$sql = "INSERT INTO employe (id, nom, prénom, email) VALUES (NULL, '$n', '$p', '$m');";
//on crée sous la forme de chaînes de caractères la requête sql (langage MySQL)
echo($sql);

$connection->exec($sql);

}
catch(PDOExecption $e) {echo $e->getMessage();}
?>