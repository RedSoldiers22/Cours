<?php

interface Movable{
    public function accelere();
    public function decelere();
}

interface Drivable{
    public function drive();
}

class Car2 implements Movable, Drivable {
    public function accelere()
    {
        echo 'vroum';
    }
    public function decelere()
    {
        echo 'hiiiiiii';
    }
    public function drive()
    {
        echo 'Iwigooooo!!!!!';
    }
}

$v = new Car2();
$v->accelere();

?>
