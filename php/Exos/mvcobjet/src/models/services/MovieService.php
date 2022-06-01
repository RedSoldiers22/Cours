<?php
namespace mvcobjet\models\services;

use mvcobjet\models\daos\MovieDao;

class MovieService {
    private $MovieDao;
    public function __construct(){
        $this->MovieDao = new MovieDao();
    }

    public function getAllMovie(){
        $movie = $this->MovieDao->findThem();
        return $movie;
    }

    public function create($movie){
        $this->MovieDao->create($movie);
    }

    public function getMovie($id){
        return $this->RealDao->getMovie($id);
    }

    public function update($movie){
        return $this->MovieDao->update($movie);
    }

}


?>