<?php

namespace mcvobjet\ctrl;

use mvcobjet\models\daos\ActorDao;

class BackController{

    function liste() {
        $actorDao = new ActorDao();
        $result = $actorDao->findAll();
        print_r($result);
   
}
}
?>