<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modification d'un étudiant</h1>
    <form action="<?= _URL ?>/controllerEtudiant/modifEtudiant/<?=$result['id']?>" method="POST">
        <input type="text" name="nom" placeholder="Votre nom" value=<?= $result['nom']?>><br>
        <input type="text" name="prenom" placeholder="Votre prénom" value=<?=$result['prenom']?>><br>
        <input type="mail" name="mail" placeholder="Votre email" value=<?=$result['email']?>><br>
        <input type="password" name="mdp" placeholder="Votre mot de passe" value=<?=$result['password']?>><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>