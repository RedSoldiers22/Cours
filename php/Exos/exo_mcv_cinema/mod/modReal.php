<?php
require_once('mod/modCo.php');

function modAllReal(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM realisateur ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function addUnReal($edu){
    $n = $edu['nom'];
    $p = $edu['prenom'];
    $c = $edu['cover'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO realisateur (nom,prenom,cover) VALUES (?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n,$p,$c));

}

function getUnReal($id){
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM realisateur WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function updateReal($id,$edu){
    $n = $edu['nom'];
    $p = $edu['prenom'];
    $c = $edu['cover'];
    $bddPDO = connexionBDD();
    $req = "UPDATE realisateur SET nom=?, prenom=?, cover=? WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($n,$p,$c,$id));
}

function deleteReal($id){
    $bddPDO = connexionBDD();
    $req = "DELETE FROM realisateur WHERE id = $id";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute();
}