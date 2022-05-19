<?php
require_once('models/model.php');

function getEtudiants(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM student ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUnEtudiant($id){
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM student WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

?>