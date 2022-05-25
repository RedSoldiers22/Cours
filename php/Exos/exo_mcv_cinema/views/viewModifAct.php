<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modifier un réalisateur</h1>
    <form action="<?= _URL ?>/ctrlAct/modifAct/<?= $result['id']?>" method="POST">
        <input type="text" name="nom"  value="<?= $result['nom']?>"><br>
        <input type="text" name="prenom"  value="<?= $result['prenom']?>"><br>
        <input type="text" name="cover" value="<?= $result['cover']?>"><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>