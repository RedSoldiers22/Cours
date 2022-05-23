<?php

class Bedroom extends Room {
    //attributs
    private $lit;
    private $bureau;
    private $meubles;
    // methodes
    public function __construct($superficy,$orientation,$l,$b,$m)
    {
        parent::__construct($superficy,$orientation);
        $this->lit = $l;
        $this->bureau = $b;
        $this->meubles = $m;
    }

    public function calculTVA(){
        echo parent::TVA;
    }

    public function getLit()
    {
        return $this->lit;
    }

    public function setLit($lit)
    {
        $this->lit = $lit;

        return $this;
    }

    public function getBureau()
    {
        return $this->bureau;
    }

    public function setBureau($bureau)
    {
        $this->bureau = $bureau;

        return $this;
    }

    public function getMeubles()
    {
        return $this->meubles;
    }

    public function setMeubles($meubles)
    {
        $this->meubles = $meubles;

        return $this;
    }
}


?>