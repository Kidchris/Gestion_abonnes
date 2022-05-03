<!DOCTYPE html>
<html lang="fr">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/uikit.min.css" />
    <link href="../css/add.css" rel="stylesheet">
</head>

<body>
    <br>
    <br>
    <br>

    <div class="uk-grid uk-align-center uk-width-1-3@m uk-card uk-card-default add-main ">

        <form action="./add_admin_process.php" method="post" 
        class="uk-background-muted uk-grid uk-align-center" uk-grid>
            <img src="../images/logo/logo-v3.jpg" alt="" width="200px" height="" 
            class="add-img  uk--center" height="200px">
            <div class="uk-grid uk-algin-center ">
                <?php
                if (isset($_GET["id"])) {
                    if ($_GET["id"] == 3) {
                        echo '
                <div class="uk-alert-danger " uk-alert uk-sticky="duration:5;" >
                    <a class="uk-alert-close" uk-close></a>
                    <p>Les mots de passes doivent etre identiques</p>
                </div> ';
                    }
                }
                ?>
                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text" placeholder="Nom Prenom" name="nom" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                        <input class="uk-input" type="text" placeholder="Email" name="email" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input class="uk-input" type="password" placeholder="Mot de passe" name="password" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input class="uk-input" type="text" placeholder="Confirmer le Mot de passe" name="confirm" required>
                    </div>
                </div>

                <div class="uk-margin uk-remove-margin-top">
                    <input type="submit" value="Enregistrer" name="submit" class="uk-button uk-button-default uk-align-center">
                </div>
                <br>
            </div>
        </form>

    </div>

    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js" "></script>
    </body>
</html>