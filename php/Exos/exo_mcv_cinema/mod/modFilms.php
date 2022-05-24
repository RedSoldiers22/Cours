<?php
require_once('mod/modCo.php');

function modAllFilms(){
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM film ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}