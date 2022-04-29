<?php
session_start();
// se déconnecter du client

session_unset();
session_destroy();

?>