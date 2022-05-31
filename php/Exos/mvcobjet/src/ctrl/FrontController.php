<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\services\ActorService;

class FrontController{
    private $actorService;

    public function __construct(){
        $this->actorService = new ActorService();
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

   


}

?>