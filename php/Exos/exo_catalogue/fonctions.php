<?php
// on peut mettre une fonction qui sera utilisé dans nos programmes
// dans un php qu'on va inclure dans nos programmes
// on appellera ce fichier fonctions.php

function debug($l){
    echo "<pre>";
    print_r($l);
    echo"</pre>";
}