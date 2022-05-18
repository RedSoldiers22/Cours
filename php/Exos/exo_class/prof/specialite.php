<?php

class Specialite{
    //datas
    private $code;
    private $libelle;
    //methods
    public function __construct($code,$libelle){
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function affiche(){
        echo $this->code.":".$this->libelle."<br>";
    }
    
 }
 