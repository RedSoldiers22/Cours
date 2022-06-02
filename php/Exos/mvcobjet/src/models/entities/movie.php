<?php

namespace mvcobjet\Models\Entities;

use DateTime;
use mvcobjet\models\entities\Real;

class Movie
{
    private $id;
    private $title;
    private $description;
    private $duration;
    private $date;
    private $coverImage;
    private $genre;
    private $real;
    private $actors;
    
    public function getId(): int
    {
        return $this->id;
    }
    
    public function setId($id): Movie
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
   
    public function setTitle(string $title): Movie
    {
        $this->title = $title;
        return $this;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Movie
    {
        $this->description = $description;
        return $this;
    }

    public function getDuration(): string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): Movie
    {
        $this->duration = $duration;
        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): Movie
    {
        $this->date = $date;
        return $this;
    }

    public function getCoverImage(): string
    {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): Movie
    {
        $this->coverImage = $coverImage;
        return $this;
    }

    public function getGenre(): Genre
    {
        return $this->genre;
    }
 
    public function setGenre(Genre $genre): Movie
    {
        $this->genre = $genre;
        return $this;
    }


    public function getReal(): Real
    {
        return $this->real;
    }

    
    public function setReal(Real $real): Movie
    {
        $this->real = $real;
        return $this;
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function setActors($actors): Movie
    {
        $this->actors = $actors;
        return $this;
    }

    public function addActor(Actor $actor): void
    {
         if(is_array($this->actor)){
             foreach($this->actors as $a){
                 if ($a->getId() == $actor->getId()){
                     return;
                 }
             }
         }
        $this->actors[] = $actor;
    }

    public function deleteActor(Actor $actor):void{
        $this->actors = array_filter($this->actors, function(Actor $a) use ($actor){
            return $a->getId() !=$actor->getId();
        });
    }

}