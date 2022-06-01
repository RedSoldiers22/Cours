<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\services\ActorService;
use mvcobjet\models\services\RealService;

class FrontController{
    private $actorService;
    private $realService;

    public function __construct(){
        $this->actorService = new ActorService();
        $this->realService = new RealService();
    }

    public function listeActeurs(){
        $result = $this->actorService->getAllActors();
        return $result;
    }

    public function index(){
        echo "<h1>Hello mvcobjet du frontController</h1>";
    }

    public function getActor($id){
       return $this->actorService->getActor($id); // appel au service
    }

    public function listeReals(){
        $result = $this->realService->getAllReals();
        return $result;
    }

    public function getReal($id){
       return $this->realService->getReal($id); // appel au service
    }
  
}



?>