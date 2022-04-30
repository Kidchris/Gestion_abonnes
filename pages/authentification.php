<?php
include("./connection.php");
?>


<?php

if (isset($_POST["submit"])) {
    // $nom = $_POST["nom"];
    $password = $_POST["password"];
    $password = md5('$password');
    $email = $_POST["email"];
    $query = "SELECT email, pw FROM `admin` WHERE email = '$email' AND pwd='$password' ";
    //  printf($query);
    $resultats = mysqli_query($connexion, $query);
    $row = mysqli_fetch_assoc($resultats);
    print_r($row);
}

?>