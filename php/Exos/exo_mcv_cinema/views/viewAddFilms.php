<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ajouter un film</h1>
    <form action="<?= _URL ?>/ctrlFilms/addFilm" method="POST">
        <input type="text" name="titre" placeholder="Titre du film"><br>
        <input type="text" name="cover" placeholder="Affiche du film"><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>