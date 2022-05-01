<?php
include("./connection.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/Logo_AUF.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/uikit.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Gestion des Abonnes</title>
</head>

<body>
    <nav class="uk-navbar-container uk-margin" uk-navbar>
        <div class="uk-navbar">

            <a class="uk-navbar-item uk-logo" href="../index.php"><img src="../images/logo/logo-v3.jpg" alt=""></a>
        </div>
        <div class="uk-navbar uk-navbar-right right">
            <form action="javascript:void(0)">
                <!-- <input class="uk-input uk-form-width-small" type="text" placeholder="entrez un nom" name="nom">
                <button class="uk-button uk-button-default" name="search"><span uk-icon="search"></span></button> -->
                <a href="../index.php">
                    <div class="uk-button uk-button-default"><span uk-icon="sign-out"></span>Quitter</div>
                </a>
            </form>
        </div>

        </div>
    </nav>

    <?php
    if (isset($_GET["id"])) {

        if ($_GET["id"] == 2) {

            echo '
                    <div class="uk-alert-success uk-width-1-3 uk-position-top-right
                     " uk-alert role="alert">
                    <a class="uk-alert-close" uk-close></a>
                    <p>Utilisateur ajoute avec success!</p>
                    </div> ';
        }
    }
    ?>


    <?php
    $query = "SELECT * FROM `abonne` order by dateDebutAbonnement DESC";
    $resultats = mysqli_query($connexion, $query);
    ?>

    <div class="uk-child-width-1-2@s  uk uk-text-center uk-flex-center uk-margin-large" uk-grid>
        <div class="uk-child-width-1-2@s" uk-grid>

            <?php

            while ($row = mysqli_fetch_assoc($resultats)) : ?>

                <div>

                    <div class="uk-card uk-background-muted uk-card-small uk-card-body uk-card-hover">
                        <div class="uk-flex">
                            <img class="uk-border-circle uk-align-center" 
                            width="190" height="190" 
                            src='data:image/jpeg;base64,<?php echo base64_encode($row["image"]); ?>' 
                            style="border: 3px solid #aa0a30; height: 190px !important;">
                            <button class="uk-button uk-badge" type="button">Options</button>
                            <div uk-dropdown="mode: click">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li>
                                        <a href='./modify.php?id=<?php echo $row["id"]; ?>'>Modifier</a>

                                    </li>
                                    <hr class="uk-divider-small">
                                    <li>
                                        <a href='./delete.php?id=<?php echo $row["id"]; ?>'>Supprimer</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div>
                            <p class> <span class="nom"><?php echo $row["nom"]; ?></span><br>
                                <?php echo $row["email"]; ?><br>
                                <?php echo  $row["numeroTelephone"]; ?><br>
                                <span class="date">
                                    <?php echo $row["dateDebutAbonnement"] . ' / '; ?>
                                    <?php echo $row["dateFinAbonnement"] . ''; ?></span>
                            </p>
                        </div>
                    </div>
                </div>

            <?php
            endwhile;
            ?>


        </div>
        <div class="uk-padding-small uk-child-width-1-2@s">
            <div>
                <a href="./add.php">
                    <div class="uk-card ik-card-large uk-background-muted uk-card-body uk-card-hover">
                        <br>
                        <br>
                        <br>
                        <small class="uk-text-muted">Ajouter un abonne</small>
                        <br>
                        <span uk-icon="plus"></span>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                </a>
            </div>
        </div>
    </div>

    <a class="uk-button uk-button-large uk-position-small uk-position-bottom-right" href="#target" uk-scroll style="position:fixed !important;" uk-icon="triangle-up">Haut</a>
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
</body>

</html>