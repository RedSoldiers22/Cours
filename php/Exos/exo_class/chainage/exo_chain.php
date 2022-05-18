<?php

require "chainage.php";

$user = new User();
$user->setNom("Roger");
$user->setPrenom("Pol");
$user->setAge(22);
print_r($user);
$user->plusUn()->moins2();
print_r($user);

?>