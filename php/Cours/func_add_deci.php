<?php
// il faut dire à php qe le type strict soit activé ainsi;
declare(strict_types=1); // permet de controler le type d'arguments qui seront envoyés à la fonction

function addDec(float $a, float $b) {
    echo ($a + $b); 
}

addDec(4,5);
addDec(4,5.5);
addDec(4,"6xxxx");