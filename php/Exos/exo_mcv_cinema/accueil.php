<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue au Festival</h1>
    <ul>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlFilms/affAcc">Accueil</a></li><br>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlFilms/viewFilms">Films en compétitions</a></li>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlReal/viewReal">Réalisateurs</a></li>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlAct/viewAct">Acteurs</a></li><br>

        <li><a class="nav-link" href="<?= _URL ?>/ctrlFilms/formAddFilms">Ajouter un film</a></li>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlReal/formAddReal">Ajouter un réalisateur</a></li>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlAct/formAddAct">Ajouter un acteur</a></li>
        <li><a class="nav-link" href="<?= _URL ?>/ctrlFilms/affUpl">Ajouter une image</a></li><br>
    </ul>
</body>
</html>