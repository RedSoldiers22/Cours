<?php 
require_once("6.2.fonctions.php");
// recupérer la categorie dans $_GET
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
   
</style>
<body>


<?php
  $cata = [

    "hommes" => [

      ["nom_produit" => "short homme", "prix" => 26.00, "photo" => "media.auchan.fr/9d0c80b4-42c1-4b5a-ad9a-3261cdbbe43e_256x256/B2CD"],
      ["nom_produit" => "pantalon homme", "prix" => 28.00, "photo" => "media.auchan.fr/baaaf199-d8e7-4e3c-af5b-a54ea7e50e68_256x256/B2CD"],
      ["nom_produit" => "t-shirt homme", "prix" => 35.00, "photo" => "media.auchan.fr/c017a0f8-057e-4e31-ae1b-e703da5554af_256x256/B2CD"],
      ["nom_produit" => "chaussurehomme", "prix" => 15.00, "photo" => "s.cdnshm.com/catalog/fr/t/1026186811/chaussures-tommy-hilfiger-court-cupsole-suede-homme-44.jpg"]

    ],

    "femmes" => [
      ["nom_produit" => "robe femme",     "prix" => 25.00, "photo" => "terrebleue.com/files/cache/square_two/files/221-3120-31-101-c-60098357ea22f.jpeg"],
      ["nom_produit" => "pantalon femme", "prix" => 28.00, "photo" => "media.auchan.fr/9a63b934-0ac2-46ce-8070-5c47a582302b_256x256/B2CD"],
      ["nom_produit" => "t-shirt femme", "prix" => 35.00, "photo" => "media.auchan.fr/1f038c7a-d25b-475d-b8c5-26ec7c89a84f_256x256/B2CD"],
      ["nom_produit" => "chaussure femme", "prix" => 15.00, "photo" => "terrebleue.com/files/cache/square_two/files/421-3305-00-856-b-614d9ffc186b1.jpg"]
    ],

    "enfants" => [
      ["nom_produit" => "robe enfant",     "prix" => 25.00, "photo" => "cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/o/moncler-enfant-girls-pink-polo-dress-4…"],
      ["nom_produit" => "pantalon enfant", "prix" => 28.00, "photo" => "cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/o/moncler-enfant-black-cotton-jersey-jog…"],
      ["nom_produit" => "t-shirt enfant", "prix" => 35.00, "photo" => "cdn.childrensalon.com/media/catalog/product/cache/0/small_image/256x256/9df78eab33525d08d6e5fb8d27136e95/m/o/moncler-enfant-boys-blue-logo-t-shirt-…"]
    ]

  ];

 $categorie = $_GET["cata"];
  if( $categorie == "femmes") {
    echo $categorie["nom_produit"];
  
    // Voilà comment il fallait transformer l'espèce de fichier JavaScript en tableau de tableau PHP c'est ce tableau qu'on pourra Qu'on pourra filtrer 
    // avec la clé catégories par exemple qu'on retrouve dans $_GET
    // modifier le tableau ci-dessous pour qu'il soit compatible PHP (les images sont celles que quentin à renseigné dans son exemple) on vient de le faire
    // créer la même application qu'en javascript
    // debug($cata);
    
    // Le menu peut déjà ici être définie en parcourant le tableau
    // Chaque URL de ce menu pour avoir un lien vers homme femme ou enfants enseignants enseignants les paramètres après le ? Dans l'URL
    // 

?>

</body>
<nav>

 <a href=hommeFemmesEnfants.php?categ=hommes>Hommes</a>
 <a href=hommeFemmesEnfants.php?categ=femmes>Femmes</a>
 <a href=hommeFemmesEnfants.php?categ=enfants>Enfants</a>

</nav>
<main>

</main>
</html>
