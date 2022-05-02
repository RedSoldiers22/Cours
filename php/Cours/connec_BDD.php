<?php
//connection à la base de données
$connection = new PDO("mysql:host=localhost;dbname=premiere","root","");
//on crée sous la forme d'une chaîne de caractère la requête SQL (en langage MySQL)
$sql = "INSERT INTO employe (id, nom, prénom, email) VALUES (NULL, 'SMITH', 'JOHN', 'sj@dd.fr');";
//$connection->exec($sql);
echo($sql);
die();

?>