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

     public function getbyId($id)
     {     
         $movie = $this->movieDao->findById($id);  // recherche dans movieDao ( $id = id du movie )
         $actors = $this->actorDao->findByMovie($id); // recherche des acteurs pour 1 film 
         foreach ($actors as $actor) {
             // fonction dans la classe Movie dans Entities
             $movie->addActor($actor);  // fonction ajoute 1 acteur à l'objet movie (voire classe/entité Movie)
         }
 
         $genre = $this->genreDao->findByMovie($id); // recherche du genre 
         $movie->setGenre($genre);
         $director = $this->directorDao->findByMovie($id);
         $movie->setDirector($director);
 
        /* $comments = $this->commentDao->findByMovie($id);*/
         return $movie;
     }

}


?>