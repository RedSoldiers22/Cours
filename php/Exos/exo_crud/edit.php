<?php
//connexion DBB
require_once "connect.php";
//données postées
$connection = new PDO("mysql:host=localhost;dbname=premiere","root","");
    $id= $_GET["id"];
    $sql="SELECT * FROM produit WHERE id=?";
    $sth=$connection->prepare($sql);
    $sth->execute(array($id));
    $genre=$sth->fetch();

?>
   <form action="update.php" method="POST">
       <input type="hidden" name="id" value="<?=$genre["id"]?>"><br><br>
       <input type="text" name="nom" value="<?=$genre["nom"]?>"><br><br>
       <input type="text" name="description" value="<?=$genre["description"]?>"><br><br>
       <input type="text" name="prixht" value="<?=$genre["prix HT"]?>"><br><br>
       <input type="text" name="tva" value="<?=$genre["tva"]?>"><br><br>
       <input type="text" name="prixttc" value="<?=$genre["prix TTC"]?>"><br><br>
       <input type="submit" value="OK">
   </form> 
  
