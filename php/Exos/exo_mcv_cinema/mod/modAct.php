<?php
require_once('mod/modCo.php');

function modAllAct(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM acteur ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function addUnAct($edu){
    $n = $edu['nom'];
    $p = $edu['prenom'];
    $c = $edu['cover'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO acteur (nom,prenom,cover) VALUES (?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n,$p,$c));
}

function getUnAct($id){
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM acteur WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function updateAct($id,$edu){
    $n = $edu['nom'];
    $p = $edu['prenom'];
    $c = $edu['cover'];
    $bddPDO = connexionBDD();
    $req = "UPDATE acteur SET nom=?, prenom=?, cover=? WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($n,$p,$c,$id));
}

function deleteAct($id){
    $bddPDO = connexionBDD();
    $req = "DELETE FROM acteur WHERE id = $id";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute();
}