<?php

// GESTION DES EXCEPTIONS (ERREURS) 

// classe

class CustomException extends Exception { 

  protected $title; 

  public function __construct($title, $message, $code = 0, Exception $previous = null) 
  { 
      $this->title = $title; 
      parent::__construct($message, $code, $previous); 
  } 

  public function getTitle() { 
      return $this->title; } 
  } 


class Consomme {
    
    public function calcul( $distance, $essence ) {
        if ( $essence <= 0 ) {
            throw new CustomException("Message erreur custom title","message derreur habituel");
        }
        return $distance / $essence ;       
    }
}

// -- main program

$datasVoitures = array(
    array(50,10),
    array(50,0),
    array(50,-3),
    array(30,5)
);


foreach($datasVoitures as $value) {
   try {
    $conso = new Consomme() ;
    echo "Résultat:".$conso->calcul($value[0],$value[1])."<br/>";
   } catch(CustomException $ce) {
       echo "<hr>" ;
       echo $ce->getTitle() ; // vient de CustomException
       echo "<hr>" ;
       echo $ce->getMessage();  // vient de Exception
       echo "<hr>" ;

    /*   echo $e->getFile();
       echo "<br>" ;
       echo "Thrown at:".$e->getLine()."<br>"; 
       echo "<hr>" ;*/
   }
}