<?php
require "flottable.php"; // Interface
require "inflammable.php"; // Interface
require "bois.php";
require "dancefloor.php";

$tab=array();

$b = new Bois();
$d = new Dancefloor();
array_push($tab,$b);
array_push($tab,$d);
print_r($tab);

foreach($tab as $val) {
    $val->enflammer();
    echo "<br>";
}

?>