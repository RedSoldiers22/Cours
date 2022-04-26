<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require_once("6.2fonctions.php");
// En PHP on ne met pas à jour un élément précis puisque le PHP regenere toute une page HTML côté serveur 
// on peut pas aller modifier un élément précis

$femmes = [    
                [ "nom_produit" => "robe classe"    , "prix" => 25    ,    "photo"=> "robe.png" ],
                [ "nom_produit "=> "pantalon femme" , "prix"=> 45     ,    "photo"=> "pantalonf.png" ],
                [ "nom_produit "=> "t-shirt femme"  ,  "prix"=> 35.5  ,    "photo"=> "tshirt.png" ]
        ];

 /*1 - Vous allez modifier ce programme pour l'écrire en PHP c'est-à-dire que cette page va afficher une liste de produits 
pour les femmes*/


/*foreach($femmes as $key => $values){
    print_r($values);
    foreach ($values as $key1 => $vals){
       echo($vals);
    }
    }*/
    

/*2 -Ensuite vous faites un autre programme PHP en partant du Catalogue qu'on avait dans le programme précédent où il y avait
 les femmes hommes et les enfants
Ici on voit que le la variable femme était un tableau d'objets on peut pas le faire comme ça en PHP 
donc il faut qu'on fasse un tableau de tableau avec un système clé valeur.
*/

foreach($femmes as $key => $values){ ?>
    <h1>Catalogue femmes</h1>
<?php
foreach($values as $keys => $val) {
    debug($val);
}
?>
<hr>
<?php }

?>
<div id="collection">

</div>
</body>
</html>