<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour <?php echo $result['prenom'] ?></h1>
    <h2>Mes infos persos</h2>
    <ul>
        <li>Nom: <?php echo $result['nom'] ?></li>
        <li>Prénom: <?php echo $result['prenom'] ?></li>
        <li>Email: <?php echo $result['email'] ?></li>
    </ul>
    <h2>Mes Cours</h2>

    <ul>
        <li class="nav-item"><a class="nav-link" href="http://localhost/afpa/php/Exos/exo_mcv_controller//controllerStudents/afficheAddCoursToStudent">Ajouter un cours</a></li> 
        <li class="nav-item"><a class="nav-link" href="controllerStudents/supptCoursEtudiant">Supprimer un cours</a></li>
    </ul>


</body>
</html>