<?php
session_start();

echo "<pre>";
print_r($_POST);
echo "<pre>";

//connection à la BDD
//vérification que le login/password existent et correspondent
//la BDD renvoi des informations sur le profil
//par exemple nom, prenom, role, etc...

$_SESSION['nom']=$nom;
$_SESSION['prenom']=$prenom;
$_SESSION['role']=$role; //par exemple 'client'



?>