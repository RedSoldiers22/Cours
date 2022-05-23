<?php

require_once('models/modelInscriptions.php');

require_once('models/modelStudents.php');

require_once('models/modelCours.php'); 



function afficheAddCourseToStudent($stud_id) {

    // je veux afficher le formulaire qui permet d'ajouter un

    // coursà n etudiant 

    $student = getUnEtudiant($stud_id); 

    // j'ai les info concernant un etudiant que je peux afficher 

    $cours = getAllCours(); // recup liste des cours

    require("views/viewSelectCours.php"); 

    // dans le viewSelectCours j'ai 

    // -> affichage de l'étudiant

    // -> formulaire pour choisir un cours par SELECT (HTML).



    // l'action de ce formulaire sera addCourseToStudiant.

    //    <form action=controllerInscriptions/addCourseToStudent/1 method="post >

    //       <select name="id_cours" >

    //          <option value=1>Java</option>

    //          <option value=2>PHP</option>

    //      </select>

    //    </form>

    // options générées par PHP avec parcours de la liste des cours. 

}





function addCourseToStudent($studentId, $courseId) {



        // fonction qui vient du modele modelInscriptions

        $result = getCoursesStudent($studentId, $courseId);

        $nb_courses = $result->rowCount();

        if($nb_courses>0){

            $message = "Vous êtes déjà inscris à ce cours ";    

        }

        else{

            $result = addCourseForStudent($studentId, $courseId);

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

                $resultGetCourses = getMyCourses($studentId);

                

                if(!$resultGetCourses) {

                    $message = "La récuperation des cours a rencontré un problème";



                } else {

                    $nb_courses = $resultGetCourses->rowCount();

                    if($nb_courses == 0){

                        $message = "Vous n'êtes inscris à aucun cours!";

                        getAllCoursesStudents();

                    }else{

                        require_once('views/viewCoursesForStudent.php');

                    }

                }  

}