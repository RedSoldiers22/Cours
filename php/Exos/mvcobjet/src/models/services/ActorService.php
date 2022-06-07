<?php
namespace mvcobjet\models\services;

use mvcobjet\models\daos\ActorDao;

class ActorService {
    private $ActorDao;
    public function __construct(){
        $this->ActorDao = new ActorDao();
    }

    public function getAllActors(){
            $acteurs = $this->ActorDao->findAll();   
        return $acteurs;
    }

    public function create($actor){
        $this->ActorDao->create($actor);
    }

    public function getActor($id){
        return $this->ActorDao->getActor($id);
    }

    public function update($actor){
        return $this->ActorDao->update($actor);
    }

}


?>