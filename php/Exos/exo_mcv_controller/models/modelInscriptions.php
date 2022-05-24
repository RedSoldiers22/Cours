<?php

require_once('models/model.php');

function addCoursForStudent($studentId, $courseId) {

    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO inscription(studentId,coursId) VALUES (:studentId, :courseId)');
    $requete->bindvalue(':studentId', $studentId);
    $requete->bindvalue(':courseId', $courseId);
    $requete->bindvalue(':inscriptionDate', date('Y-m-d'));

    $result = $requete->execute();
    return $result;
}

function getOnStudentCours($studentId) {
    $bddPDO = connexionBDD();

    $requete = "SELECT cours.id, cours.code, cours.titre, cours.langage,inscriptions.id_student, inscriptions.id_cours 
                FROM cours, inscription
                WHERE inscription.id_student = '$studentId' AND inscriptions.id_cours = cours.id";
                $result = $bddPDO->query($requete);
                return $result;
}

function getCoursStudent($studentId, $courseId) {
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM inscription WHERE id_student='$studentId' AND id_cours = '$courseId' ";
    $result = $bddPDO->query($requete);
    return $result;
}

function getMyCours(){
    $bddPDO = connexionBDD();
    
}