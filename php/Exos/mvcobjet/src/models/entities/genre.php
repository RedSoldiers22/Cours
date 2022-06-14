<?php

namespace mvcobjet\models\entities;

class Genre {
    private $id ;
    private $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id=null)
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}