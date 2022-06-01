<?php
namespace mvcobjet\models\services;

use mvcobjet\models\daos\GenreDao;

class GenreService {
    private $GenreDao;
    public function __construct(){
        $this->GenreDao = new GenreDao();
    }

    public function getAllGenre(){
        $genre = $this->genreDao->findTodo();
        return $genre;
    }

    public function create($genre){
        $this->GenreDao->create($genre);
    }

    public function getGenre($id){
        return $this->GenreDao->getGenre($id);
    }

    public function update($genre){
        return $this->GenreDao->update($genre);
    }

}


?>