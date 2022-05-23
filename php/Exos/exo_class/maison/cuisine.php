<?php

class Cuisine extends Room{
    //attributs
    private $frigo;
    private $table;
    private $chaise;
    // methodes
    public function __construct($superficy,$orientation,$f,$t,$c)
    {
        parent::__construct($superficy,$orientation);
        $this->frigo = $f ;
        $this->table = $t ;
        $this->chaise = $c ;

     
    }

    public function getFrigo()
    {
        return $this->frigo;
    }

    public function setFrigo($frigo)
    {
        $this->frigo = $frigo;

        return $this;
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }


    public function getChaise()
    {
        return $this->chaise;
    }

   
    public function setChaise($chaise)
    {
        $this->chaise = $chaise;

        return $this;
    }
}