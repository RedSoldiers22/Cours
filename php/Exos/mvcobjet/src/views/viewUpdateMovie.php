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
    <form action="../updateMovie" method="POST">
        <input type="text" name="title" value="<?= $result->getTitle()?>">
        <input type="text" name="description" value="<?= $result->getDescription()?>">
        <input type="text" name="duration" value="<?= $result->getDuration()?>">
        <input type="date" name="date" value="<?= $result->getDate()?>">
        <input type="text" name="coverImage" value="<?= $result->getCover_image()?>">
        <input type="text" name="genreId" value="<?= $result->getGenre_id()?>">
        <input type="text" name="directorId" value="<?= $result->getDirector_id()?>">
        <input type="hidden" name="id" value="<?= $result->getId()?>">
        <input type="submit" value="OK">
    </form>
</body>
</html>