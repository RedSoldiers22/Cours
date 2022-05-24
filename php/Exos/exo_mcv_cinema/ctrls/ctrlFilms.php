<?php
session_start();
require_once ('mod/modCo.php');

function viewFilms(){
    require("views/viewAllFilms.php");
}

?>