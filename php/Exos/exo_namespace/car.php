<?php 
require "src/Car/CarIntro.php"  ;
use openlab\Car\CarIntro;  // use comme les traits
$cari = new CarIntro();
echo $cari->sayHello();
?>