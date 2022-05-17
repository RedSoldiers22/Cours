<?php

class Room{
    protected $superficy;
    protected $orientation;
   
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