<?php

// chainage des méthodes
class User{
    private $nom;
    private $prenom;
    private $age;

    public function setNom($n){
        $this->nom = $n;
    }
    public function setPrenom($p){
        $this->nom = $p;
    }
    public function setAge($a){
        $this->nom = $a;
    }
    public function plusUn(){
        $this->age++;
        return $this;
    }
    public function moins2(){
        $this->age -= 2;
        return $this;
    }

}