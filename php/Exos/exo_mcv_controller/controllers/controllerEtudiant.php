<?php
require_once ('models/modelStudents.php');
function ditBonjour(){
    echo "Bonjour dit";

}

function listeEtudiant(){
    $result = getEtudiants();
    print_r(($result));
}

?>