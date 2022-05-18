<?php

class Room{
    protected $superficy;
    protected $orientation;
    public const TVA = 0.20;

    public function __construct($s,$o){
        $this->superficy = $s;
        $this->orientation = $o;
    }

    final public function afficheSuperficie(){
        echo $this->superficy;
    }

    public function afficheTVA(){
        echo self::TVA;
    }
    
   
    public function getSuperficy()
    {
        return $this->superficy;
    }
     
    public function setSuperficy($superficy)
    {
        $this->superficy = $superficy;

        return $this;
    }

    
    public function getOrientation()
    {
        return $this->orientation;
    }

    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }
}