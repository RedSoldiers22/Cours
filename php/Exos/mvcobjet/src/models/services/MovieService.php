<?php
namespace mvcobjet\models\services;

use mvcobjet\models\daos\MovieDao;
use mvcobjet\models\daos\RealDao;
use mvcobjet\models\daos\GenreDao;
use mvcobjet\models\daos\ActorDao;

class MovieService {
    private $MovieDao;
    private $GenreDao;
    private $ActorDao;
    private $RealDao;
    public function __construct(){
        $this->MovieDao = new MovieDao();
        $this->GenreDao = new GenreDao();
        $this->ActorDao = new ActorDao();
        $this->RealDao = new RealDao();
    }

    public function getMovie($id){
        $movie = $this->MovieDao->getMovie($id);
        $actors = $this->ActorDao->findByMovie($id);
        foreach($actors as $actor){
            $movie->addActor($actor);
        }

        $genre = $this->GenreDao->findByMovie($id);
        $movie->setGenre($genre);
        $real = $this->RealDao->findByMovie($id);
        $movie->setReal($genre);

        //return $this->MovieDao->getMovie($id);
    }


    public function getAllMovie(){
        $movie = $this->MovieDao->findThem();
        return $movie;
    }

    public function create($movie){
        $this->MovieDao->create($movie);
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