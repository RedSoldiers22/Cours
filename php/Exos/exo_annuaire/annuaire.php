<?php

function debug($l){
    echo "<pre>";
    print_r($l);
    echo"</pre>";
}

$annuaire = [
    "Julia" => "00000001",
    "Roger" => "00000002",
    "Polo" => "00000003"

];
debug($annuaire);
echo $annuaire["Roger"];
//renvoi les clés de $annuaire
debug(array_keys($annuaire));
debug(array_values($annuaire));
// on sait que array_keys ou array_values ramènent des listes donc
// on peut faire un debug sur chacune de ces variables

// il existe une fonction en php qui permet de vérifier si une clé existe
if (array_key_exists("Polo",$annuaire)){
    echo "Polo existe";
}else{
    echo "Polo n'existe pas";
};

?>
