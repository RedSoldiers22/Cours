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

function addEtudiant(){
    $n = $_POST['nom'];
    $p = $_POST['prenom'];
    $m = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $bddPDO = connexionBDD();
    $req = "INSERT INTO student (nom,prenom,email,password) VALUES (?,?,?,?)";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($n,$p,$m,$mdp));
}

function updateEtudiant($id,$edu){
    $n = $edu['nom'];
    $p = $edu['prenom'];
    $m = $edu['mail'];
    $mdp = $edu['mdp'];
    $bddPDO = connexionBDD();
    $req = "UPDATE student SET nom=?, prenom=?, email=?, password=? WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($n,$p,$m,$mdp,$id));
}

function deleteEtudiant($id){
    $bddPDO = connexionBDD();
    $req = "DELETE * FROM student WHERE id = $id";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute();
}

?>