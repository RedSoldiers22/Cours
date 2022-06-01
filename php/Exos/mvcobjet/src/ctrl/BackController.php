<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\daos\ActorDao;
use mvcobjet\models\services\ActorService;
use mvcobjet\models\daos\RealDao;
use mvcobjet\models\services\RealService;
use mvcobjet\models\daos\MovieDao;
use mvcobjet\models\services\MovieService;
use mvcobjet\models\daos\GenreDao;
use mvcobjet\models\services\GenreService;

class BackController{
 
    private $actorService;
    private $realService;
    private $movieService;
    private $genreService;

    public function __construct() {
        $this->actorService = new ActorService();
        $this->realService = new RealService();
        $this->movieService = new MovieService();
        $this->genreService = new GenreService();
    }

    // -----------------------------Acteurs-----------------------------------
    
    function liste() {
        $actorDao = new ActorDao();
        $result = $actorDao->findAll();
        echo "<pre>";
        print_r($result);
    }

    public function addActor($actor){
        $this->actorService->create($actor);
    }

    public function updateActor($actor){
        $this->actorService->update($actor);
    }

    // -----------------------------Réalisateurs-----------------------------------

    function listeR() {
        $realDao = new RealDao();
        $result = $realDao->findTous();
        echo "<pre>";
        print_r($result);
    }

    public function addReal($real){
        $this->realService->create($real);
    }

    public function updateReal($real){
        $this->realService->update($real);
    }

    // -----------------------------Movies-----------------------------------

    function listeM() {
        $realDao = new MovieDao();
        $result = $realDao->findThem();
        echo "<pre>";
        print_r($result);
    }

    public function addMovie($movie){
        $this->movieService->create($movie);
    }

    public function updateMovie($movie){
        $this->movieService->update($movie);
    }

    // -----------------------------Genre-----------------------------------

    function listeG() {
        $genreDao = new GenreDao();
        $result = $genreDao->findTodo();
        echo "<pre>";
        print_r($result);
    }

    public function addGenre($genre){
        $this->genreService->create($genre);
    }

    public function updateGenre($genre){
        $this->genreService->update($genre);
    }

}
?>