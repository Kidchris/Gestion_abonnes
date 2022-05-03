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

    if (!empty($_FILES["photo"]["name"])) {
        $img_folder = "../images";
        $img_file = $img_folder . basename($_FILES["photo"]["name"]);
        $img_type = strtolower(pathinfo($img_file, PATHINFO_EXTENSION));
        $img_types = array('jpg', 'png', 'jpeg');
        if (in_array($img_type, $img_types)) {
            $img = $_FILES["photo"]["tmp_name"];

            $nom = $_POST["nom"];
            $telephone = $_POST["telephone"];
            $email = $_POST["email"];
            $date_fin = $_POST["date_fin"];
            $imgContent = addslashes(file_get_contents($img));
            move_uploaded_file($img, $img_folder);


            $query = "insert into `abonne` (`nom`, `email`, `numeroTelephone`, `dateFinAbonnement`, `image`)
            VALUES('$nom', '$email', '$telephone',  '$date_fin', '$imgContent')";
            $resultats = mysqli_query($connexion, $query);
            if ($resultats) {
                header("Location:  ./home.php?id=2");
                exit;
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

                exit;
            }
        }
    } else {
        echo " <div class='uk-container'>
        <br> <div class='uk-alert-danger uk-text-center' uk-alert>
        <a class='uk-alert-close' uk-close></a>
        <br><br><br>
        Error while trying to Upload image<br> <br> <br> <br></div><br>
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

        exit;
    }
}
?>

<script src="../assets/js/uikit.min.js"></script>
<script src="../assets/js/uikit-icons.min.js"></script>