<?php
require_once('models/model.php');

function getEtudiants(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM student ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

?>