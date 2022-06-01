<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\services\ActorService;
use mvcobjet\models\services\RealService;
use mvcobjet\models\services\MovieService;
use mvcobjet\models\services\GenreService;

class FrontController{
    private $actorService;
    private $realService;
    private $movieService;
    private $genreService;
    private $twig;

    public function __construct($t){
        $this->actorService = new ActorService();
        $this->realService = new RealService();
        $this->movieService = new MovieService();
        $this->genreService = new GenreService();
        $this->twig=$t;
    }

    public function index(){
        echo "<h1>Hello mvcobjet du frontController</h1>";
    }

    // -----------------------------Acteurs-----------------------------------

    public function listeActeurs(){
        $result = $this->actorService->getAllActors();
        //return $result;
        echo $this->twig->render('actor.html.twig',["acteurs"=>$result]); // remplace le return
    }

    public function getActor($id){
       return $this->actorService->getActor($id); // appel au service
    }

    // -----------------------------Réalisateurs-----------------------------------

    public function listeReals(){
        $result = $this->realService->getAllReals();
        return $result;
    }

    public function getReal($id){
       return $this->realService->getReal($id); // appel au service
    }

    // -----------------------------Movies-----------------------------------

    public function listeMovie(){
        $result = $this->movieService->getAllMovie();
        return $result;
    }

    public function getMovie($id){
       return $this->movieService->getMovie($id); // appel au service
    }

     // -----------------------------Genre-----------------------------------

     public function listeGenre(){
        $result = $this->genreService->getAllGenre();
        return $result;
    }

    public function getGenre($id){
       return $this->genreService->getGenre($id); // appel au service
    }
  
}



?>