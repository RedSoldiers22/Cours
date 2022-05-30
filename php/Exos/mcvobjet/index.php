<?php

require_once "vendor/autoload.php";
use mcvobjet\ctrl\FrontController;

$fc = new FrontController();
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
    $fc->index();
});

$klein->dispatch();
?>