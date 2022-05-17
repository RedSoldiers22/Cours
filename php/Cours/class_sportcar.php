<?php

require "car.php";

class Sportcar extends Car {
    private $aileron;       // on peut rajouter des propriétés dans les héritiers
    public function hello(){
        return "beeeeeep beeeeeeep";
    }
}

?>