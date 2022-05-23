<?php

require "connect.php";

$sql="SELECT * FROM album ";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $albums=$sth->fetchAll();

    $sql="SELECT * FROM utilisateur ";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $users=$sth->fetchAll();

?>

<form action="backnote.php" method="POST">
        <p>Utilisateur : <select name="user">
            <?php foreach($users as $key=>$val){
                $id=$val['id'];
                $nom=$val['nom'];
                print_r("<option value=$id>$nom</option>");
            } ?></select></p> 
        <p>Titre : <select name="titre">
            <?php foreach($albums as $key=>$val){
                $id=$val['id'];
                $titre=$val['titre'];
                print_r("<option value=$id>$titre</option>");
            } ?></select></p>
            <p>Utilisateur : <input type="number" name="note" placeholder="Votre note"></p>
            <input type="submit" value="OK">

    </form>

    <br><br>

    <form action="tracks.php" method="POST">
    <p>Voir l'album : <select name="songs">
            <?php foreach($albums as $key=>$val){
                $id=$val['id'];
                $titre=$val['titre'];
                print_r("<option value=$id>$titre</option>");
            } ?></select></p>
            <input type="submit" value="OK">
    </form>
