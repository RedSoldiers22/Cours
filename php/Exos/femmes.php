<?php
require_once("6.2.fonctions.php");

$femmes = [
    [ "nom_produit"=>"robe femme" , "prix"=>25.00, "photo"=> "https://www.terrebleue.com/files/cache/square_two/files/221-3120-31-101-c-60098357ea22f.jpeg"] ,
    [ "nom_produit"=>"pantalon femme" , "prix"=>28.00, "photo"=> "https://media.auchan.fr/9a63b934-0ac2-46ce-8070-5c47a582302b_256x256/B2CD/"] ,
    [ "nom_produit"=>"t-shirt femme"  , "prix"=>35.00, "photo"=> "https://media.auchan.fr/1f038c7a-d25b-475d-b8c5-26ec7c89a84f_256x256/B2CD/"] ,
    [ "nom_produit"=>"chaussure femme", "prix"=>15.00, "photo"=> "https://www.terrebleue.com/files/cache/square_two/files/421-3305-00-856-b-614d9ffc186b1.jpg"] 
];

for($i = 0 ; $i <count($femmes) ; $i++) //boucle for
        {
            echo '<img src='.$femmes[$i]["photo"].'>'; // /!\
            echo "<br>";
            echo $femmes[$i]["nom_produit"]." : ".$femmes[$i]["prix"]." €"."<br>";
            echo "<br>";

        }

/*foreach($femmes as $key => $values){ ?>
    <h1>Catalogue femmes</h1>
<?php
foreach($values as $keys => $val) {
    debug($val);
}
?>
<hr>
<?php }

?>*/