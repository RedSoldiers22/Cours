<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require_once "connect.php";
    
    $sql="SELECT * FROM bureau";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $bureau=$sth->fetchAll();

    $sql="SELECT * FROM id_role";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $idRole=$sth->fetchAll();
    
    
?>
    <form action="goBDD.php" method="POST">
        <p>Email : <input type="text" name="email"></p> 
        <p>Mot de passe : <input type="password" name="password"></p> 
        <p>Nom : <input type="text" name="nom"></p> 
        <p>Prénom : <input type="text" name="prenom"></p> 
        <p>Bureau : <select name="bureau">
            <?php foreach($bureau as $key=>$val){
                $id=$val['id'];
                $bur=$val['bureau'];
                print_r("<option value=$id>$bur</option>");
        } ?></select></p>

        <p>Role : <select name="idRole">
            <?php foreach($idRole as $key=>$val){
                $id=$val['id'];
                $idr=$val['id_role'];
                print_r("<option value=$id>$idr</option>");
        }?></select></p> 
        <input type="submit" value="OK">
    </form>
</body>
</html>