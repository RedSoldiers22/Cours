<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 200px;
            width: 200px;
        }
    </style>
</head>
<body>
<ul>
    <?php
        foreach($result as $value){ ?>
            <li><?=$value['prenom']." ".$value['nom']?>
            <a href="<?= _URL ?>/ctrlReal/formModifReal/<?=$value['id']?>">Modifier</a>
            <a href="<?= _URL ?>/ctrlReal/supprReal/<?=$value['id']?>">Supprimer</a>
        </li> <br>
            <img src="../<?=$value['cover']?>" alt=""><br><br><br><br>                               
        <?php } ?>

    </ul>
</body>
</html>