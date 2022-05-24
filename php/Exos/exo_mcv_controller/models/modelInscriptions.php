<?php

require_once('models/model.php');

function addCoursForStudent($studentId, $courseId) {

    $bddPDO = connexionBDD();
<<<<<<< HEAD
    $requete = $bddPDO->prepare('INSERT INTO inscription(studentId,coursId) VALUES (:studentId, :courseId)');
=======
    $requete = $bddPDO->prepare('INSERT INTO inscriptions(studentId,courseId) VALUES (:studentId, :courseId)');
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
    $requete->bindvalue(':studentId', $studentId);
    $requete->bindvalue(':courseId', $courseId);
    $requete->bindvalue(':inscriptionDate', date('Y-m-d'));

    $result = $requete->execute();
    return $result;
}

function getOnStudentCours($studentId) {
    $bddPDO = connexionBDD();

<<<<<<< HEAD
    $requete = "SELECT cours.id, cours.code, cours.titre, cours.langage,inscriptions.id_student, inscriptions.id_cours 
                FROM cours, inscription
                WHERE inscription.id_student = '$studentId' AND inscriptions.id_cours = cours.id";
=======
    $requete = "SELECT cours.id_cours, cours.code, cours.titre, cours.langage,inscriptions.id_student, inscriptions.id_cours 
                FROM courses, inscriptions
                WHERE inscriptions.id_student = '$studentId' AND inscriptions.id_cours = cours.id_cours";
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
                $result = $bddPDO->query($requete);
                return $result;
}

function getCoursStudent($studentId, $courseId) {
    $bddPDO = connexionBDD();
<<<<<<< HEAD
    $requete = "SELECT * FROM inscription WHERE id_student='$studentId' AND id_cours = '$courseId' ";
=======
    $requete = "SELECT * FROM inscriptions WHERE id_student='$studentId' AND id_cours = '$courseId' ";
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
    $result = $bddPDO->query($requete);
    return $result;
}