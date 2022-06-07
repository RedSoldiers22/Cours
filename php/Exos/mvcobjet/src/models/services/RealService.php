<?php
namespace mvcobjet\models\services;

use mvcobjet\models\daos\RealDao;

class RealService {
    private $RealDao;
    public function __construct(){
        $this->RealDao = new RealDao();
    }

    public function getAllReals(){
        $reals = $this->RealDao->findTous();
        return $reals;
    }

    public function create($real){
        $this->RealDao->create($real);
    }

    public function getReal($id){
        return $this->RealDao->getReal($id);
    }

    public function update($real){
        return $this->RealDao->update($real);
    }

}


?>