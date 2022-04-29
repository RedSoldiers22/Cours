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

    //on peut aussi décarer des fonctions en PHP et ici on va déclarer une fontion pour nous donner les chiffres impairs
    function impairs($liste){
        echo $liste[0];
    }
    //déclaration de variable
    $var = 5;
    echo $var;
    // les tableaux s'écrivent comme en JS
    $numbers = [56,65,36,88,44];
    //comme en JS on accède aux éléments par l'index
    echo "<br>";
    echo $numbers[2];
    //la fonction compte le nombre d'éléments ddu tableau
    echo "<br>";
    for($i =0; $i <count($numbers); $i++{
        //la concatenation en PHP se fait avec le point
        echo $i.":".$numbers[$i]."<br>";
    })
    
    ?>
    
</body>
</html>