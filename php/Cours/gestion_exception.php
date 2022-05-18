<?php

// GESTION DES EXCEPTIONS (ERREURS) 

// classe

class Consomme {
    
    public function calcul( $distance, $essence ) {
        if ( $essence <= 0 ) {
            throw new Exception("la qte de carburant ne peut être inférieure ou égale à 0");
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
   } catch(Exception $e) {
       echo "<hr>" ;
       echo $e->getMessage() ;
       echo "<hr>" ;
    /*   echo $e->getFile();
       echo "<br>" ;
       echo "Thrown at:".$e->getLine()."<br>"; 
       echo "<hr>" ;*/
   }
}

?>