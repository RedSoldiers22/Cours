<?php
class Car {
    // L'ENCAPSULATION
    private $modele;
    private $color;
    private $energie;
    private $reservoir;
    private $vitesse;

    //les attributs
    /*public $modele;
    public $color;
    public $energie;
    public $reservoir;
    public $vitesse;*/

    public function __construct($m,$c,$e,$r,$v){
        $this->modele = $m;
        $this->color = $c;
        $this->energie = $e;
        $this->reservoir = $r;
        $this->vitesse = $v;
    }

    public function setModel($modele){
        $this->modele = $modele;
    }

    public function getModel(){
        return $this->modele;
    }

    public function setVitesse($vitess){
        //if(!is_numeric($vitess) {echo "erreur"; die;}
        $this->model = $vitess;
    }

    //les méthodes
    public function hello(){
        return "bip bip";
    }

    public function rempli($litres) {
        $this->reservoir=$litres;
    }
    
    public function demarre(){
        $this->vitesse = 10;
    }
    public function accelere($plus){
        $this->vitesse += $plus;
    }

} 

   