<?php
// je vais composer (composition) un corps avec 2 objets

class Head {
    // attributs
    private $yeux;
    private $couleur;
    private $bouche;
    private $nez;
    // méthodes
    public function __construct($y,$c,$b,$n){
        $this->yeux = $y;
        $this->couleur = $c;
        $this->bouche = $b;
        $this->nez= $n;
    }
   
}

class Tronc {
    private $taille;
    private $couleur;
    private $nombril;
        public function __construct($t,$c,$n){
            $this->taille = $t;
            $this->couleur = $c;
            $this->nombril = $n;
        }

}

class Legs{
    private $nombre;
    private $couleur;
    private $pieds;
    public function __construct($t,$c,$n){
        $this->nombre = $n;
        $this->couleur = $c;
        $this->pieds = $p;
    }
}

class Human {
    private $head;
    private $tronc;
    private $jambes;
    public function __construct(Head $head, Tronc $tronc, Legs $jambes){
        $this->head = $head;
        $this->tronc = $tronc;
        $this->jambes = $jambes;
    }
}

$tete = new Head(2,"bleus","cousue","crochu");
$corps = new Tronc("gros","blanc",1)
$bas = new Legs(2,"blanc",2)
$bob = new Human($tete,$corps,$bas);
var_dump($bob);


// 2ème exo
// construire maison

$maison1 = new House($kitchen,$bath,$mailbox);
$maison1->addRoom(Bedroom $bedroom);



?>