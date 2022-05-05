<?php
require_once('connect.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `produit` WHERE `id`=:id;";

    $query = $connection->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: crud_aff.php');
}

require_once('close.php');