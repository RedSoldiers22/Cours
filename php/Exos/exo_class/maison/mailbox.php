<?php

class Mailbox{
    private $taille;
    private $materiaux;
    // methodes
    public function __construct($t,$m)
    {
        $this->taille = $t;
        $this->materiaux = $m;
    }


    /**
     * Get the value of taille
     */ 
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of taille
     *
     * @return  self
     */ 
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get the value of materiaux
     */ 
    public function getMateriaux()
    {
        return $this->materiaux;
    }

    /**
     * Set the value of materiaux
     *
     * @return  self
     */ 
    public function setMateriaux($materiaux)
    {
        $this->materiaux = $materiaux;

        return $this;
    }
}


  ?>