<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajout d'un cours</h1>
<<<<<<< HEAD
    <form action="<?= _URL ?>/controllerCours/ajouteCours" method="POST">
=======
    <form action="../controllerCours/ajouteCours" method="POST">
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
        <input type="text" name="code" placeholder="Entrez le code"><br>
        <input type="text" name="titre" placeholder="Entrez le titre"><br>
        <input type="mail" name="langage" placeholder="Entrez le langage"><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>