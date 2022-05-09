<?php
require_once "connect.php";

    $connection = new PDO("mysql:host=localhost;dbname=premiere","root","");
    $id= $_GET["id"];
    $req = $connection->prepare("DELETE FROM produit WHERE id = :id");
    echo $_GET["id"];

    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();

    

    //header('Location: accueil.php');


require_once('close.php');