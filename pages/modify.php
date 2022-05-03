<?php
include("./connection.php");


$id = $_GET["id"];

$query = "SELECT * FROM `abonne` WHERE id=$id";
$resultats = mysqli_query($connexion, $query);
$row = mysqli_fetch_assoc($resultats);

$nom = $row["nom"];
$telephone = $row["numeroTelephone"];
$email = $row["email"];
$date_fin = $row["dateFinAbonnement"];

?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <link rel="shortcut icon" href="../images/Logo_AUF.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/add.css">
    <title>Gestion des Abonnes</title>
</head>

<body>


    <div class="uk-grid uk-align-center uk-width-1-3 uk-card uk-card-default add-main ">

        <form method="post" class="uk-background-muted"  enctype="multipart/form-data">
            <img src="../images/logo/logo-v3.jpg" alt="" width="200px" height="200px" class="add-img  uk-align-center">
            <div class="uk-grid uk-algin-center ">
                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text" name="nom" value="<?php echo $nom ?>">
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                        <input class="uk-input" type="text" name="email" value="<?php echo $email ?>">
                    </div>
                </div>

                <div class=" uk-margin-small">
                        <div class="uk-inline">
                            <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                            <input class="uk-input" type="text" name="telephone" v value="<?php echo $telephone ?>">
                    </div>
                </div>

                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                                <input class="uk-input" type="text" onfocus="(this.type='date')" name="date_fin"
                                value="<?php echo $date_fin ?>"
                                >
                            </div>
                        </div>
                        <br />
                        <div class="uk-margin">
                            <div uk-form-custom>
                                <input type="file" name="photo">
                                <button class="uk-button" type="button" tabindex="-1">Choisir une photo</button>
                            </div>
                        </div>

                        <div class="uk-margin uk-remove-margin-top">
                            <input type="submit" value="Mettre a Jour" name="submit" class="uk-button uk-button-default uk-align-center">
                        </div>
                    </div>
        </form>

    </div>



    <?php

    if (isset($_POST["submit"])) {

        $nom = $_POST["nom"];
        $telephone = $_POST["telephone"];
        $email = $_POST["email"];
        $date_fin = $_POST["date_fin"];

        $query = "UPDATE `abonne` SET id=$id,
        nom='$nom', numeroTelephone='$telephone',
        dateFinAbonnement='$date_fin' WHERE id=$id
         ";


        $resultats = mysqli_query($connexion, $query);
        if ($resultats){
        header("Location: ./home.php");

        }
    }
    ?>

    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
</body>

</html>