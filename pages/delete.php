<?php
include("./connection.php");



    $id = $_GET["id"];



    $query = "DELETE FROM `abonne` WHERE id=$id";
    $resultats = mysqli_query($connexion, $query);
    if ($resultats) {
        header("Location: ./home.php");
        exit;
    }


    ?>