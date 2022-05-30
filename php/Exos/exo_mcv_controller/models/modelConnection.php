<?php
require_once('models/model.php');

function logStudent($log){
    $n = $log['nom'];
    $m = $log['mdp'];
    try{
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM student WHERE nom=? AND password=? ";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($n,$m));
    $data = $stmt->fetch();
    } catch (Exception $e){
        print_r($e->getMessage());
    }
    return $data;


}