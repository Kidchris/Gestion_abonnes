<?php

$connexion = new mysqli("localhost", "root", "", "simplonAdmin");

if ($connexion->connect_error) {
    echo "error while trying to connect to the database! $connexion->connect_error";
    // die( $connexion);
}


?>