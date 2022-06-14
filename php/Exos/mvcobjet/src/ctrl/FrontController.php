<?php

namespace mvcobjet\ctrl;

use mvcobjet\models\services\ActorService;
use mvcobjet\models\services\RealService;
use mvcobjet\models\services\MovieService;
use mvcobjet\models\services\GenreService;

class FrontController{
    private $actorService;
    private $realService;
    private $movieService;
    private $genreService;
    private $twig;

    public function __construct($t){
        $this->actorService = new ActorService();
        $this->realService = new RealService();
        $this->movieService = new MovieService();
        $this->genreService = new GenreService();
        $this->twig=$t;
    }

    public function index(){
        echo "<h1>Hello mvcobjet du frontController</h1>";
    }

    // -----------------------------Acteurs-----------------------------------

    public function listeActeurs(){
        $result = $this->actorService->getAllActors();
        //return $result;
        echo $this->twig->render('actor.html.twig',["acteurs"=>$result]); // remplace le return
    }

    public function getActor($id){
       return $this->actorService->getActor($id); // appel au service
    }

    public function viewAddAct(){
        echo $this->twig->render('addAct.html.twig');
    }

    public function updateActor($actid) {
        $act = $this->actorService->getActor($actid);
        echo $this->twig->render('updAct.html.twig',["acteur"=>$act]);
    }


    // -----------------------------Réalisateurs-----------------------------------

    public function listeReals(){
        $result = $this->realService->getAllReals();
        //return $result;
        echo $this->twig->render('real.html.twig',["reals"=>$result]);
    }

    public function getReal($id){
       return $this->realService->getReal($id); // appel au service
    }

    public function viewAddReal(){
        echo $this->twig->render('addReal.html.twig');
    }

    public function updateReal($realid) {
        $real = $this->realService->getReal($realid);
        echo $this->twig->render('updReal.html.twig',["real"=>$real]);
    }

    // -----------------------------Movies-----------------------------------

    public function getMovieById($id){
        $result = $this->movieService->getbyId($id);
   
        echo $this->twig->render('movie.html.twig',["movie"=>$result]);
    }

    public function getAllMovie(){
       $movies = $this->movieService->getAllMovie();
       echo $this->twig->render('allFilm.html.twig',["movies"=>$movies]); // appel au service
    }

    public function viewAddMovie(){
        echo $this->twig->render('addMovie.html.twig');
    }

    public function updateMovie($movieid) {
        $movie = $this->movieService->getById($movieid);
        echo $this->twig->render('updMovie.html.twig',["movie"=>$movie]);
    }

     // -----------------------------Genre-----------------------------------

     public function listeGenre(){
        $result = $this->genreService->getAllGenre();
        //return $result;
        echo $this->twig->render('genre.html.twig',["genres"=>$result]);
    }

    public function getGenre($id){
       return $this->genreService->getGenre($id); // appel au service
    }
    
    public function viewAddGenre(){
        echo $this->twig->render('addGenre.html.twig');
    }

    public function updateGenre($genreid) {
        $genre = $this->genreService->getGenre($genreid);
        echo $this->twig->render('updGenre.html.twig',["genre"=>$genre]);
    }
}



?>