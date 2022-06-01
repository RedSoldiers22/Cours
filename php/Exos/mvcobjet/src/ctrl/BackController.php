<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\daos\ActorDao;
use mvcobjet\models\services\ActorService;
use mvcobjet\models\daos\RealDao;
use mvcobjet\models\services\RealService;

class BackController{

    function liste() {
        $actorDao = new ActorDao();
        $result = $actorDao->findAll();
        echo "<pre>";
        print_r($result);
    }

    
    private $actorService;
    private $realService;

    public function __construct() {
        $this->actorService = new ActorService();
        $this->realService = new RealService();
    }

    public function addActor($actor){
        $this->actorService->create($actor);
    }

    public function updateActor($actor){
        $this->actorService->update($actor);
    }

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
}
?>