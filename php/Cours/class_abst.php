<?php

// classe abstraite
abstract class Vehicule{
    public $couleur;
    public $modele;

    public function __construct($c,$m){
        $this->couleur = $c;
        $this->modele = $m;
    }
    // déclaration d'une fonction abstraite, elle est déclarée mais non définie
    abstract public function affiche();
}

class Automobile extends Vehicule {
    public function affiche(){
        echo $this->modele;
    }
}