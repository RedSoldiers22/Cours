<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        foreach($res as $genre){ ?>
            <li><?= $genre->getName() ?>
            <a class="nav-link" href="updateGenre/<?= $genre->getId() ?>" >Modifier un genre</a></li> 
    <?php }
    ?>
    </ul>
</body>
</html>