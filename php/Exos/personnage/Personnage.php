<?php


// classe abstraite qui a une fonction abstraite

abstract class Personnage {
    private $nom;

    public function getNom() {
        return $this->nom;
    }

abstract function combattre(); //classe déclarée et non définie, toute classe qui héritera devra définir cette fonction combattre

}

// héritons d'autres classes qui vont créer les personnages pour le jeu

class Nain extends Personnage {
    public function combattre(){
        echo "moi le nain je tape avec une masse";
    }    
}

class Guerrier extends Personnage {
    public function combattre(){
        echo "moi le guerrier je tape avec une hache";
    }   
}

class Archer extends Personnage {
    public function combattre(){
        echo "moi l'archer je cible avec mes flèches";
    }   
}

$personnages = [new Nain(), new Guerrier(), new Archer()];

print_r($personnages);

foreach($personnages as $p){ // la boucle permet de faire combattre tout le monde
    $p->combattre();
}


?>