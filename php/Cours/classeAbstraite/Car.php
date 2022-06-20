<?php

abstract class Car {
    private $model;
    private $color;
    private $maxSpeed;

    abstract public function gaz();
    abstract public function brake();
    

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel($model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getMaxSpeed(): string
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($speed): self
    {
        $this->maxSpeed = $speed;
        return $this;
    }
}

?>