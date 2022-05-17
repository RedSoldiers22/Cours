<?php

// les interfaces ne peuvent pas être extend
interface Animal {
    public function makeSound();
    public function mange();
}

interface Trajet{
    public function parcours();
}

class Chat implements Animal, Trajet {
    public function makeSound(){
        echo "miaou";
    }
    public function mange(){
        echo "chat mange";
    }

    public function parcours(){
        echo "100km";
    }
}

?>