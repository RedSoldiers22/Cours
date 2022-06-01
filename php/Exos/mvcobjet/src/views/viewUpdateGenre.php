<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Modifier un acteur</h1>
<body>
    <form action="../updateGenre" method="POST">
        <input type="text" name="nom" value="<?= $result->getName()?>">
        <input type="hidden" name="id" value="<?= $result->getId()?>">
        <input type="submit" value="OK">
    </form>
</body>
</html>