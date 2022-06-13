<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\daos\ActorDao;

class BackController{

    function liste() {
        $actorDao = new ActorDao();
        $result = $actorDao->findAll();
        echo "<pre>";
        print_r($result);
    }

    function getActor($id){
        $actorDao = new ActorDao();
        $actor = $actorDao->findById($id);
        echo "<pre>";
        print_r($actor);
    }
}
?>