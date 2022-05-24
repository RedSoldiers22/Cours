<?php
require_once('models/model.php');

function getCours(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM cours ORDER BY id ASC";
    $resultGetCours = $bddPDO->query($requete);
    $data = $resultGetCours->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUnCours($id){
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM cours WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function addCours(){
    $c = $_POST['code'];
    $t = $_POST['titre'];
    $l = $_POST['langage'];
    $bddPDO = connexionBDD();
    $req = "INSERT INTO cours (code,titre,langage) VALUES (?,?,?)";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($c,$t,$l));
}

function updateCours($id,$edu){
    $c = $edu['code'];
    $t = $edu['titre'];
    $l = $edu['langage'];
    $bddPDO = connexionBDD();
    $req = "UPDATE cours SET code=?, titre=?, langage=? WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($c,$t,$l,$id));
}
?>