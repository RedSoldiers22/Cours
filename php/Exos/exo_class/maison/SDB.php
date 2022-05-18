<?php
require "room.php";

class SDB extends Room{
    //attributs
    private $baignoire;
    private $douche;
    private $toilette;
    // methodes
    public function __construct($superficy,$orientation,$b,$d,$t)
    {
        parent::__construct($superficy,$orientation);
        $this->baignoire = $b ;
        $this->douche = $d;
        $this->toilette = $t;

    }

    public function getBaignoire()
    {
        return $this->baignoire;
    }
   
    public function setBaignoire($baignoire)
    {
        $this->baignoire = $baignoire;

        return $this;
    }

    public function getDouche()
    {
        return $this->douche;
    }

    public function setDouche($douche)
    {
        $this->douche = $douche;

        return $this;
    }
  
    public function getToilette()
    {
        return $this->toilette;
    }

    public function setToilette($toilette)
    {
        $this->toilette = $toilette;

        return $this;
    }
}

?>