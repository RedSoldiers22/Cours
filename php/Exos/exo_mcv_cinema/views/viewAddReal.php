<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ajouter un réalisateur</h1>
    <form action="<?= _URL ?>/ctrlReal/addReal" method="POST">
        <input type="text" name="nom" placeholder="Nom du réalisateur"><br>
        <input type="text" name="prenom" placeholder="Prénom du réalisateur"><br>
        <input type="text" name="cover" placeholder="Photo du réalisateur"><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>