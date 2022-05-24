<?php
<<<<<<< HEAD
session_start();
require_once('models/modelInscriptions.php');

function addCoursToStudent($studentId, $coursId){
        $coursId = $_POST['idCourt'];
        // fonction qui vient du modele modelInscriptions
        $result = getCoursStudent($studentId, $coursId);
=======
require_once('models/modelInscriptions.php');

function addCourseToStudent($studentId, $coursId){
        $coursId = $_POST['idCourt'];
        // fonction qui vient du modele modelInscriptions
        $result = getCoursesStudent($studentId, $coursId);
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
        $nb_cours = $result->rowCount();
        if($nb_cours>0){
            $message = "Vous êtes déjà inscris à ce cours ";    
        }
        else{
<<<<<<< HEAD
            $result = addCoursForStudent($studentId, $coursId);
=======
            $result = addCourseForStudent($studentId, $coursId);
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
        if(!$result){
            $message = "Le cours choisi n'a as été attribué!";
        } else {
            
<<<<<<< HEAD
            $resultGetCours = getAllMyCours($studentId);
            require("views/viewCoursForStudent.php");
=======
            $resultGetCours = getAllMyCourses($studentId);
            require("views/viewCoursesForStudent.php");
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
        }

        }
}

<<<<<<< HEAD
function getAllMyCours($studentId){
                        // getMyCourses est à créer dans modelInscriptions
                $resultGetCours = getMyCours($studentId);
=======
function getAllMyCourses($studentId){
                        // getMyCourses est à créer dans modelInscriptions
                $resultGetCours = getMyCourses($studentId);
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
                
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