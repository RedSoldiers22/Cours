<?php
require_once "connect.php";

if(!empty ($_POST["email"]) && !empty ($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $hash=password_hash($password,PASSWORD_DEFAULT); //hash le password
    $verify = password_verify($password, $hash);
   

    $connection = new PDO("mysql:host=localhost;dbname=premiere","root","");
    $sql = "SELECT password, prenom, bureau FROM user WHERE email='$email';";
    $stmt = $connection->prepare($sql);
    $stmt -> execute();
    $id_co = $stmt -> fetch(PDO::FETCH_ASSOC);

    if($id_co){
        if($verify){
            session_start();
            $_SESSION ["bureau"] = $id_co["bureau"];
            $_SESSION ["prenom"] = $id_co["prenom"];
            if($id_co["bureau"] === 1){
                header("Location: crud_aff.php");
            } else {
                header("Location: crud_list.php");
            }

        } else {
            echo "mot de passe non reconnu";
        }
    } else {
       echo "Email non reconnu";
    }

} else {
    echo "Veuillez renseigner votre email et mot de passe";
}
?>