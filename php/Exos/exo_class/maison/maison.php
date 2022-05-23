<?php
// 2ème exo
// construire maison
require "room.php";
require "bedroom.php";
require "cuisine.php";
require "SDB.php";
require "mailbox.php";


class House {
    private $cuisine;
    private $sdb;
    private $bedrooms = array();

    public function __construct($c,$s)
    {
        $this->cuisine = $c;
        $this->sdb = $s;
    }
    public function addRoom($bedroom){
        array_push($this->bedrooms, $bedroom);
    }
}

$cuisine = new Cuisine("55m²","Sud",2,1,5);
$sdb = new SDB("20m²","Nord",1,2,1);
$boite = new Mailbox("1m","bois");
$bedroom = new Bedroom("24m²", "Est",2,1,5);

$bedroom1 = new Bedroom("27m²","Ouest",1,3,6);

$maison1 = new House($cuisine,$sdb,$boite);
$maison1->addRoom($bedroom);
$maison1->addRoom($bedroom1);
var_dump($maison1);


?>