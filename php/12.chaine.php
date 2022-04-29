<?php

// soit une chaine
$chaine = "AZZZZ";
if (preg_match('/[a-zA-Z]/+', $chaine))
{
    echo "Vrai";
} else {
    echo "Faux";
}

/*
début et fin de chaine

/^exe/ commence par exe
/ple$/ fini par ple
/^exemple$/ commence et fini par


quantificateurs

? 0 ou 1 occurence d'une chaine
+ 1 ou plusieurs
* 0.1 ou plusieurs


quantités
{n} n fois une chaine de caractères

ex: $chaine = "bananas";
    if (preg_match('/ba(na)/{2}', $chaine))

classe de caractères
[a-z] minuscules
[^a-z] pas de minuscules
[A-Z] majuscules
[a-z_]
[0-9]

ex: $chaine = "AZZZZ";
    if (preg_match('/[a-zA-Z]/+', $chaine))

exemple pour un tel portable français
^(\+33\s)?0?[67][0-9\s]+

*/


?>