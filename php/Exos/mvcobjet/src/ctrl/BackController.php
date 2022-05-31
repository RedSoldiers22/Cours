<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\daos\ActorDao;
use mvcobjet\models\services\ActorService;

class BackController{

    function liste() {
        $actorDao = new ActorDao();
        $result = $actorDao->findAll();
        echo "<pre>";
        print_r($result);
    }

    
    private $actorService;

    public function __construct() {
        $this->actorService = new ActorService();
    }

    public function addActor($actor){
        $this->actorService->create($actor);
    }

    public function updateActor($actor){
        $this->actorService->update($actor);
    }
}
?>