<?php
require_once("fonctions.php");

$hommes = [
    [ "nom_produit"=>"short homme"  , "prix"=>26.00, "photo"=> "https://media.auchan.fr/9d0c80b4-42c1-4b5a-ad9a-3261cdbbe43e_256x256/B2CD/"],
    [ "nom_produit"=>"pantalon homme" , "prix"=>28.00, "photo"=> "https://media.auchan.fr/baaaf199-d8e7-4e3c-af5b-a54ea7e50e68_256x256/B2CD/"],
    [ "nom_produit"=>"t-shirt homme"  , "prix"=>35.00, "photo"=> "https://media.auchan.fr/c017a0f8-057e-4e31-ae1b-e703da5554af_256x256/B2CD/"],
    [ "nom_produit"=>"chaussurehomme", "prix"=>15.00, "photo"=> "https://s.cdnshm.com/catalog/fr/t/1026186811/chaussures-tommy-hilfiger-court-cupsole-suede-homme-44.jpg"]
];

for($i = 0 ; $i <count($hommes) ; $i++) //boucle for
        {
            echo '<img src='.$hommes[$i]["photo"].'>'; // /!\
            echo "<br>";
            echo $hommes[$i]["nom_produit"]." : ".$hommes[$i]["prix"]." €"."<br>";
            echo "<br>";

        }

/*foreach($hommes as $key => $values){ ?>
    <h1>Catalogue hommes</h1>
<?php
foreach($values as $keys => $val) {
    debug($val);
}
?>
<hr>
<?php }

?>*/