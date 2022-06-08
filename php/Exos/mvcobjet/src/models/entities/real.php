<?php

namespace mvcobjet\models\entities;

class Real {
    private $id ;
    private $first_name ;
    private $last_name ;

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id=null){
        $this->id = $id;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function setFirstName(string $f)
    {
        $this->first_name = $f;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function setLastName(string $l)
    {
        $this->last_name = $l;

        return $this;
    }
}