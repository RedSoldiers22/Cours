<?php

class Professeur {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $specialities = array();

    public function __construct($id,$n,$p,$e){
        $this->id = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
    }

    public function addSpecialite($code,$libelle){
        $this->specialities[] = new Specialite($code,$libelle);
    }

    public function afficheSpecialites(){
        foreach($this->specialites as $s){
            $s->affiche();
        }
    }
}