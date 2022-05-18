<?php
// je vais composer (composition) un corpavec 2 objets
// composition 
class Head {
    //attributs
    private $yeux;
    private $couleur;
    private $bouche;
    private $nez;
    // methodes
    public function __construct($y,$c,$b,$n)
    {
        $this->yeux = $y ;
        $this->couleur = $c ;
        $this->bouche = $b ;
        $this->nez = $n ;

    }
}


class Body {
    private $corpulence;
    private $pigmentation;
    private $nombril;
    // methodes
    public function __construct($co,$pi,$no)
    {
        $this->corpulence = $co ;
        $this->pigmentation = $pi ;
        $this->nombril = $no ;
    }
}

class Legs {
    private $nombre;
    private $coloris;
    private $pieds;
    public function __construct($nb,$col,$pie)
    {
        $this->nombre = $nb ;
        $this->coloris = $col ;
        $this->pieds = $pie ;
    }
}

class Human {
    private $head ;
    private $body ;
    private $legs ;
    public function __construct(Head $head, Body $body, Legs $legs) {
        $this->head = $head ;
        $this->body = $body;
        $this->legs = $legs;

    }
}

$tete1 = new Head(2, "bleus", "cousue", "crochu" );
$tronc1 = new Body( "gros", "blanc", 1);
$jambes1 = new Legs(2, "blanc", 2);

$bob = new Human($tete1, $tronc1, $jambes1) ;
var_dump($bob);




?>