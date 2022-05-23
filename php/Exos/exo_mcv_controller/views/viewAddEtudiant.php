<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajout d'un étudiant</h1>
    <form action="../controllerEtudiant/ajouteEtudiant" method="POST">
        <input type="text" name="nom" placeholder="Votre nom"><br>
        <input type="text" name="prenom" placeholder="Votre prénom"><br>
        <input type="mail" name="mail" placeholder="Votre email"><br>
        <input type="password" name="mdp" placeholder="Votre mot de passe"><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>