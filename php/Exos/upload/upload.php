<?php

if(isset($_FILES['avatar'])){
    $dossier = 'upload/'; //nom du fichier où on va copier le fichier
    $fichier = basename($_FILES['avatar']['name']);
    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$fichier)){
        echo 'Upload effectué avec succès !';
    }else{
        echo 'Echec de l\'upload !';
    }
    
}

?>