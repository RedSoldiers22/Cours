<?php
$url = "http://localhost/afpa/php/Exos/mvcobjet/";
define ('_URL', $url);

require_once "vendor/autoload.php";
use mvcobjet\ctrl\FrontController;
use mvcobjet\ctrl\BackController;

use Twig\Environment;
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/src/views');
$twig = new Environment($loader, ['cache'=> false, 'debug'=> true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());


require ('accueil.php');

$fc = new FrontController($twig);
$bc = new BackController();
//$fc->index();

$base  = dirname($_SERVER['PHP_SELF']);
if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

// instanciation d'un objet klein
$klein = new \Klein\Klein(); // toujours mettre le \ pour créer

/*$klein->respond('GET','/helloworld', function(){
    return 'hello World';
});*/

// je créé une closure avec l'objet $fc qui sera utilisé plus tard
// quand la fonction de callback sera executée, elle le sera quand
// ontapera dans l'URL le chemin jusqu'à la racine
$klein->respond('GET','/', function() use($fc){
    // $fc->index();
});

// ---------------------------- ACTEUR -----------------------------

$klein->respond('GET','/listeActeurs', function() use($fc){
    $fc->listeActeurs();   
});

$klein->respond('GET','/getActeur/[:id]',function($request) use($fc){
    $result = $fc->getActor($request->id);
    print_r($result);
});

$klein->respond('GET','/addActor', function() use ($fc){
    $fc->viewAddAct();
});

$klein->respond('GET','/updateActeur/[:id]',function($request) use($fc){
     $fc->updateActor($request->id); 
});

// ------------------------------ REAL -------------------------------

$klein->respond('GET','/listeReal', function() use($fc){
    $fc->listeReals();
});

$klein->respond('GET','/getReal/[:id]',function($request) use($fc){
    $result = $fc->getReal($request->id);
    print_r($result);
});


$klein->respond('GET','/addReal', function() use ($fc){
    $fc->viewAddReal();
});

$klein->respond('GET','/updateReal/[:id]',function($request) use($fc){
    $fc->updateReal($request->id);
});

//---------------------------------MOVIE---------------------------------

$klein->respond('GET','/listeMovie', function($request) use($fc){
    $fc->getAllMovie();
});

$klein->respond('GET','/getMovie/[:id]',function($request) use($fc){
    $fc->getMovieById($request->id);
   
});


$klein->respond('GET','/addMovie', function(){
    //require ('src/views/viewAddMovie.php');
});

$klein->respond('GET','/updateMovie/[:id]',function($request) use($fc){
    $result = $fc->getMovieById($request->id);
    //require ('src/views/viewUpdateMovie.php');
});

//---------------------------------GENRE---------------------------------

$klein->respond('GET','/listeGenre', function() use($fc){
    $fc->listeGenre();
});

$klein->respond('GET','/getGenre/[:id]',function($request) use($fc){
    $result = $fc->getGenre($request->id);
    print_r($result);
});

$klein->respond('GET','/addGenre', function() use($fc){
    $fc->viewAddGenre();
});

$klein->respond('GET','/updateGenre/[:id]',function($request) use($fc){
    $fc->updateGenre($request->id);
});


//-----------------------------------BACK-------------------------------
//----------------------------------------------------------------------


//---------------------------------ACTEUR---------------------------------

$klein->respond('POST', '/addActeur', function($post) use ($bc){
    $bc->addActor($post->paramsPost());
});

$klein->respond('POST', '/updateActeur', function($request) use ($bc){
    $bc->updateActor($request->paramsPost());
});

//----------------------------------REAL-------------------------------

$klein->respond('POST', '/addReal', function($post) use ($bc){
    $bc->addReal($post->paramsPost());
});

$klein->respond('POST', '/updateReal', function($request) use ($bc){
    $bc->updateReal($request->paramsPost());
});

//----------------------------------MOVIE-------------------------------

$klein->respond('POST', '/addMovie', function($post) use ($bc){
    $bc->addMovie($post->paramsPost());
});

$klein->respond('POST', '/updateMovie', function($request) use ($bc){
    $bc->updateMovie($request->paramsPost());
});

//----------------------------------GENRE-------------------------------

$klein->respond('POST', '/addGenre', function($post) use ($bc){
    $bc->addGenre($post->paramsPost());
});

$klein->respond('POST', '/updateGenre', function($request) use ($bc){
    $bc->updateGenre($request->paramsPost());
});



$klein->dispatch();
?>