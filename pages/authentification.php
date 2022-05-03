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

    if ($row) {
        header("Location: ./home.php");
        exit;
    }
    else {
        header("Location: ../index.php?id=1");
        exit;
    }
}

?>