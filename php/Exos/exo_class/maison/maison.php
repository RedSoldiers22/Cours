<?php
// 2ème exo
// construire maison

class Cuisine {
    //attributs
    private $frigo;
    private $table;
    private $chaise;
    // methodes
    public function __construct($f,$t,$c)
    {
        $this->frigo = $f ;
        $this->table = $t ;
        $this->chaises = $c ;

    }
}

class SDB {
    //attributs
    private $baignoire;
    private $douche;
    private $toilette;
    // methodes
    public function __construct($b,$d,$t)
    {
        $this->baignoire = $b ;
        $this->douche = $d;
        $this->toilette = $t;

    }
}

class Bedroom {
    //attributs
    private $lit;
    private $bureau;
    private $meubles;
    // methodes
    public function __construct($l,$b,$m)
    {
        $this->lit = $l;
        $this->bureau = $b;
        $this->meubles = $m;
    }
}

class House {
    private $cuisine;
    private $sdb;
    private $bedroom;
}

$cuisine = new Cuisine(2,1,5);
$sdb = new SDB(1,2,1);
$bedroom = new Bedroom(2,1,5);


$maison1 = new House($cuisine,$sdb,$bedroom);
var_dump($maison1);
//$maison1->addRoom(Bedroom $bedroom);



?>