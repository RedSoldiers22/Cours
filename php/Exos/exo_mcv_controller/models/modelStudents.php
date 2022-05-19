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
    /*echo "<pre>";
    print_r($etu);die;
    echo "</pre>";*/
    $n = $_POST['nom'];
    $p = $_POST['prenom'];
    $m = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $bddPDO = connexionBDD();
    $req = "INSERT INTO student (nom,prenom,email,password) VALUES (?,?,?,?)";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($n,$p,$m,$mdp));
}

?>