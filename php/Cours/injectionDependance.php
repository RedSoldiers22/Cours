<?php

Class Adresse{
    private $no;
    private $rue;
    private $cp;
    private $ville;

    public function __construct($n,$r,$cp,$v){
        $this->no = $n;
        $this->rue = $r;
        $this->cp = $cp;
        $this->ville = $v;
    }
    public function getVille(): string {
        return $this->ville;
    }
    public function getNum(): string {
        return $this->no;
    }
    public function getRue(): string {
        return $this->rue;
    }
    public function getCP(): string {
        return $this->cp;
    }
}

Class Personne{
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($n,$p,Adresse $adresse){
       $this->nom = $n;
       $this->prenom = $p;
       $this->adresse = $adresse;
    }

    public function carteVisite(){
        echo $this->nom . "<br>";
        echo $this->prenom . "<br>";
        echo $this->adresse->getVille() . "<br>";
        echo $this->adresse->getNum() . "<br>";
        echo $this->adresse->getRue() . "<br>";
        echo $this->adresse->getCP() . "<br>";
    }
}

// ici je crée une injection de dépendance
// ma classe adresse est découplée de la classe personne

$adr = new Adresse(9,"Armand Rousseau",29200,"Brest");
$p = new Personne("Jam","Cavarec", $adr);
$p->carteVisite();

?>