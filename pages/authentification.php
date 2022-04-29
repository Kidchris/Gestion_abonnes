<?php

include("./connection.php");

$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT email, password FROM `admin` WHERE email = '$username' AND pwd = md5('$password')";
$result = mysqli_query($connexion, $sql);

if($result == false) {
  header("Location: ./home.php?id=1");
  exit;
}
else{
    header("Location: ../index.php?id=1");
}
?>