<?php
require_once('mod/modCo.php');

function modAllFilms(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM film ORDER BY id ASC";
    $stmt = $bddPDO->query($requete);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function addUnFilm($edu){
    $t = $edu['titre'];
    $c = $edu['cover'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO film (titre,cover) VALUES (?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($t,$c));
}

function getUnFilm($id){
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM film WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function updateFilm($id,$edu){
    $t = $edu['titre'];
    $c = $edu['cover'];
    $bddPDO = connexionBDD();
    $req = "UPDATE film SET titre=?, cover=? WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($t,$c,$id));
}

function deleteFilm($id){
    $bddPDO = connexionBDD();
    $req = "DELETE FROM film WHERE id = $id";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute();
}