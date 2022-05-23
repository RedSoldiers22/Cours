<?php

require_once('models/model.php');

function addCoursForStudent($studentId, $courseId) {

    $bddPDO = connexionBDD();
    $requete = $bddPDO->prepare('INSERT INTO inscriptions(studentId,courseId) VALUES (:studentId, :courseId)');
    $requete->bindvalue(':studentId', $studentId);
    $requete->bindvalue(':courseId', $courseId);
    $requete->bindvalue(':inscriptionDate', date('Y-m-d'));

    $result = $requete->execute();
    return $result;
}

function getOnStudentCours($studentId) {
    $bddPDO = connexionBDD();

    $requete = "SELECT cours.id_cours, cours.code, cours.titre, cours.langage,inscriptions.id_student, inscriptions.id_cours 
                FROM courses, inscriptions
                WHERE inscriptions.id_student = '$studentId' AND inscriptions.id_cours = cours.id_cours";
                $result = $bddPDO->query($requete);
                return $result;
}

function getCoursStudent($studentId, $courseId) {
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM inscriptions WHERE id_student='$studentId' AND id_cours = '$courseId' ";
    $result = $bddPDO->query($requete);
    return $result;
}