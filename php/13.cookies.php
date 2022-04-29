<?php

setcookie("nom","polo", time() + 86400);
// arguments: clé, valeur, datetime d'expiration ici 1 journée

if(isset($_COOKIES['nom'])) {
    echo "nom est:"+ $_COOKIES['nom'];
}

?>