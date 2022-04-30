<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <link rel="shortcut icon" href="../images/Logo_AUF.ico" type="image/x-icon">
    <title>Gestion des Abonnes</title>
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
</head>

<?php
include("./connection.php");



if (isset($_POST["submit"])) {

    $nom = $_POST["nom"];
    $password = $_POST["password"];
    $password_2 = $_POST["confirm"];
    $email = $_POST["email"];


    $query = " insert into `admin` (`nom`, `email` ,  `pwd` )
            VALUES( '$nom', '$email', md5('$password') ) ";
    $resultats = mysqli_query($connexion, $query);
    if ($resultats) {
        if ($password == $password_2) {
            header("Location: ../index.php");
            exit;
        } else {
            header("Location: admin_inscription.php?id=3");
            exit;
        }
    } else {
        header("Location: ../index.php?id=1");
        exit;
    }
}
?>

<script src="../assets/js/uikit.min.js"></script>
<script src="../assets/js/uikit-icons.min.js"></script>