<?php

class Employe extends Personnage{
    private $emploi;
    private $salaire;

    /**
     * Get the value of emploi
     */ 
    public function getEmploi()
    {
        return $this->emploi;
    }

    public function setEmploi($emp)
    {
        $this->emploi = "soudeur";
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($montant)
    {
        $this->salaire = 2000;
    }
}