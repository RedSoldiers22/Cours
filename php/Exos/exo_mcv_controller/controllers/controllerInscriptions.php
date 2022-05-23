<?php
require_once('models/modelInscriptions.php');

function addCourseToStudent($studentId, $coursId){
        $coursId = $_POST['idCourt'];
        // fonction qui vient du modele modelInscriptions
        $result = getCoursesStudent($studentId, $coursId);
        $nb_cours = $result->rowCount();
        if($nb_cours>0){
            $message = "Vous êtes déjà inscris à ce cours ";    
        }
        else{
            $result = addCourseForStudent($studentId, $coursId);
        if(!$result){
            $message = "Le cours choisi n'a as été attribué!";
        } else {
            
            $resultGetCours = getAllMyCourses($studentId);
            require("views/viewCoursesForStudent.php");
        }

        }
}

function getAllMyCourses($studentId){
                        // getMyCourses est à créer dans modelInscriptions
                $resultGetCours = getMyCourses($studentId);
                
                if(!$resultGetCours) {
                    $message = "La récuperation des cours a rencontré un problème";

                } else {
                    $nb_cours = $resultGetCours->rowCount();
                    if($nb_cours == 0){
                        $message = "Vous n'êtes inscris à aucun cours!";
                        getAllCoursStudents();
                    }else{
                        require_once('views/viewCoursForStudent.php');
                    }
                }  
}