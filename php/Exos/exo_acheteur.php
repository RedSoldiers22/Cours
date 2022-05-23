<?php 
  
interface Acheteurable {
   public function achete();
}
  
interface Vendeurable {
   public function vend();
}

class User {

    private $name;
   
    function __construct($n) 
    {
        $this->name = $n ;    
    }

    function who() {
        echo "\nI am ".$this->name;
    }
}

trait t_achete {
    function achete() { echo "une fonction longue et compliquée qui achète\n"; }
}

trait t_vend {
    function vend()   { echo "une fonction longue et compliquée qui vend\n"; }
}

Class Acheteur extends User implements Acheteurable {
   use t_achete;
}

Class Vendeur extends User implements Vendeurable {
   use t_vend;
}

Class les2 extends user implements VendeurAble, Acheteurable {
  use t_achete ;
  use t_vend ; 
}

$acheteur = new Acheteur("jean");
echo $acheteur->who() ;
echo ",";
$acheteur->achete() ;

$vendeur = new Vendeur("paul");
echo $vendeur->who() ;
echo ",";
$vendeur->vend() ;

$user = new les2("sartre");
echo $user->who() ;
echo ",";
$user->achete() ;
$user->vend() ;

?>