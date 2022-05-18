<?php

class Hydravion implements Amarable{
    public $masse;
    public function affiche(){
        echo "Je suis une instance de classe ".__CLASS__."";
    }
    public function setMasse($m){
        $this->masse = $m;
    }
    public function nbcordes(){
        return ($this->masse) / 10;
    }


}

?>