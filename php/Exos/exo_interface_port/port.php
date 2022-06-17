<?php
class Port {
    public $port;

    public function __construc($v){
        $this->port = $v;
        echo "Ici c'est le port de ".$v." !!!";
    }

    public function getPort(){
        return $this->port;
    }

    function accueilEngin(Amarable $amarable){
        echo " >> Le nombre de cordes nécessaire pour m'amarrer est de : ".$amarable->nbcordes()." ";
    }
}

?>