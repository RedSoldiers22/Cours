<?php
// on peut dire à une fonction quel type de vlaeur on veut en retour depuis PHP 7
// Si on lui dut que la valeur de retour doit être un entier je rajoute int

function addition($x,$y): int {
    return($x + $y);
}

echo addition(44,55.4);