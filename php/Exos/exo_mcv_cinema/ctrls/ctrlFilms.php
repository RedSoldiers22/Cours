<?php
session_start();
require_once ('mod/modFilms.php');

function affAcc(){
    require("views/viewAcc.php");
}

function affUpl(){
    require("views/viewUpload.php");
}

function viewFilms(){
    $result = modAllFilms();
    require("views/viewAllFilms.php");
}

function formAddFilms(){
    require("views/viewAddFilms.php");
}

function addFilm(){
    addUnFilm($_POST);
    header("../header.php");
}

function formModifFilms($id){
    $result=getUnFilm($id);
    require ("views/viewModifFilm.php");
}
function modifFilm($id){
    updateFilm($id,$_POST);
    header("../header.php");
}

function supprFilm($id){
    deleteFilm($id);
}

?>