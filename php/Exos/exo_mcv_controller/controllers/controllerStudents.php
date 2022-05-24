<?php
session_start();
require_once('models/modelInscriptions.php');
require_once('models/modelStudents.php');
require_once('models/modelCours.php'); 



function afficheAddCoursToStudent() {
    $student = getUnEtudiant($_SESSION['id']); 
    $cours = getCours();
    require("views/viewSelectCours.php"); 
}

function addCourseToStudent($studentId, $coursId) {

        // fonction qui vient du modele modelInscriptions
        $result = getCoursStudent($studentId, $coursId);
        $nb_cours = $result->rowCount();
        if($nb_cours>0){
            $message = "Vous êtes déjà inscris à ce cours ";    
        }
        else{
            $result = addCoursForStudent($studentId, $coursId);
        if(!$result){
            $message = "Le cours choisi n'a as été attribué!";
        } else {
            $resultGetCours = getAllMyCourses($studentId);
            require("views/viewCoursesForStudent.php");
        }
        }
}

function getAllMyCours($studentId){

                        // getMyCourses est à créer dans modelInscriptions

                $resultGetCours = getMyCours($studentId);
                if(!$resultGetCours) {
                    $message = "La récuperation des cours a rencontré un problème";
                } else {
                    $nb_courses = $resultGetCours->rowCount();
                    if($nb_courses == 0){
                        $message = "Vous n'êtes inscris à aucun cours!";
                        getAllCoursStudents();
                    }else{
                        require_once('views/viewCoursesForStudent.php');
                    }
                }  
}