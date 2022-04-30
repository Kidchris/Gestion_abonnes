<?php
include("./connection.php");
?>


<?php

if (isset($_POST["submit"])) {

    $password = $_POST["password"];
    $password = md5($password);
    $email = $_POST["email"];
    $query = "SELECT email, pwd FROM `admin` WHERE email = '$email' AND pwd='$password' ";

    $resultats = mysqli_query($connexion, $query);
    $row = mysqli_fetch_assoc($resultats);


    if (count($row) > 0) {
        // print("found an element");
        header("Location: ./home.php");
    } else {
        // print("not found");
        print_r($row);
        header("Location: ../index.php");
    }
    // else{
    //     header("Location: http://localhost/Gestion_abonnes/index.php?id=1");
    // }
}

?>