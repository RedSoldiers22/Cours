<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\daos\ActorDao;
use mvcobjet\models\services\ActorService;
use mvcobjet\models\daos\RealDao;
use mvcobjet\models\services\RealService;
use mvcobjet\models\daos\MovieDao;
use mvcobjet\models\services\MovieService;

class BackController{
 
    private $actorService;
    private $realService;
    private $movieService;

    public function __construct() {
        $this->actorService = new ActorService();
        $this->realService = new RealService();
        $this->movieService = new MovieService();
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
}
?>