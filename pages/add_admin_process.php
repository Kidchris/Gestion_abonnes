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
        if ( $password == $password_2){

            header("Location: ../index.php?id=1");
            exit;
        }
        else{
            header("Location: ./admin_inscription.php");
            
        }
    } else {
        echo " <div class='uk-container'>
                <br> <div class='uk-alert-danger uk-text-center' uk-alert>
                <a class='uk-alert-close' uk-close></a>
                <br><br><br>
                Error while trying to insert data Into Database<br> <br> <br> <br></div><br>
                <br>
                <br>
                <br>
                    <a href='./home.php'>
                    <button class='uk-button uk-button'> Retour</button>
                    </a>
                    <br>
                    <br>
                    <br>
        
                    <a href='./add.php'>
                    <button class='uk-button uk-button'>Ajouter</button>
                    </a>
                    </div>
                ";
        // header("Location: ./add.php");

        exit;
    }
}
?>

<script src="../assets/js/uikit.min.js"></script>
<script src="../assets/js/uikit-icons.min.js"></script>