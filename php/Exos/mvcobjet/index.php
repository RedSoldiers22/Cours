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
    /*echo "<pre>";
    print_r($res);die;
    require 'src/views/viewListeActeur.php';*/
    
});

$klein->respond('GET','/getActeur/[:id]',function($request) use($fc){
    $result = $fc->getActor($request->id);
    print_r($result);
});


$klein->respond('GET','/addActor', function(){
    require ('src/views/viewAddActor.php');
});

$klein->respond('GET','/updateActeur/[:id]',function($request) use($fc){
    $result = $fc->getActor($request->id);
    require ('src/views/viewUpdateActor.php');
});

// ------------------------------ REAL -------------------------------

$klein->respond('GET','/listeReal', function() use($fc){
    $res = $fc->listeReals();
    require 'src/views/viewListeReal.php';
});

$klein->respond('GET','/getReal/[:id]',function($request) use($fc){
    $result = $fc->getReal($request->id);
    print_r($result);
});


$klein->respond('GET','/addReal', function(){
    require ('src/views/viewAddReal.php');
});

$klein->respond('GET','/updateReal/[:id]',function($request) use($fc){
    $result = $fc->getReal($request->id);
    require ('src/views/viewUpdateReal.php');
});

//---------------------------------MOVIE---------------------------------

$klein->respond('GET','/listeMovie', function() use($fc){
    $res = $fc->listeMovie();
    require 'src/views/viewListeMovie.php';
});

$klein->respond('GET','/getMovie/[:id]',function($request) use($fc){
    $result = $fc->getMovie($request->id);
    print_r($result);
});


$klein->respond('GET','/addMovie', function(){
    require ('src/views/viewAddMovie.php');
});

$klein->respond('GET','/updateMovie/[:id]',function($request) use($fc){
    $result = $fc->getMovie($request->id);
    require ('src/views/viewUpdateMovie.php');
});

//---------------------------------GENRE---------------------------------

$klein->respond('GET','/listeGenre', function() use($fc){
    $res = $fc->listeGenre();
    require 'src/views/viewListeGenre.php';
});

$klein->respond('GET','/getGenre/[:id]',function($request) use($fc){
    $result = $fc->getGenre($request->id);
    print_r($result);
});


$klein->respond('GET','/addGenre', function(){
    require ('src/views/viewAddGenre.php');
});

$klein->respond('GET','/updateGenre/[:id]',function($request) use($fc){
    $result = $fc->getGenre($request->id);
    require ('src/views/viewUpdateGenre.php');
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