<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>test2</h1>
    <?php

    function debug($l){
        echo "<pre>";
        print_r($l);
        echo"</pre>";
    }

        $liste = [1,2,3,5];
        $ajout = [12,43,22];
        //la fonction print_r permet d'afficher un tableau
        //print_r($liste);
        echo "<pre>";
        print_r($liste);
        echo"</pre>";
    ?>
    <h1>Nombre de variables dans liste:
        <?php echo count($liste) ; ?>
    </h1>

    <?php
    //exécuter des fonctions sur le tableau

    ?>
    1er élément : <?php echo reset($liste)?>
    Dernier élément d'une liste: <?php echo end($liste)?>
    <?php
    //fonctions qui permettent d'ajouter ou de supprimer des élémentes d'un liste
    array_push($liste,6); //ajoute un élément
    debug($liste);
    array_pop($liste); debug($liste); //supprime dernier élément
    array_unshift($liste); debug($liste); //ajoute élément au début
    array_shift($liste); debug($liste); //supprime premier élément
    unset($liste[2]); debug($liste); //supprime variable à une position donnée
    $liste = array_merge($liste,$ajout); debug($liste); //fusionne(merge) 2 listes (tableaux)
    
    ?>
</body>
</html>