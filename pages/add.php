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

        <form action="./add_process.php" method="post" class="uk-background-muted uk-grid uk-align-center" enctype="multipart/form-data" uk-grid>
            <img src="../images/logo/logo-v3.jpg" alt="" width="200px" height="200px" class="add-img  uk-align-center">
            <div class="uk-grid uk-algin-center ">
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
                        <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                        <input class="uk-input" type="text" placeholder="Telophone" name="telephone" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                        <input class="uk-input" type="text" onfocus="(this.type='date')" placeholder="Date de fin" name="date_fin" required>
                    </div>
                </div>
                <br />
                <div class="uk-margin">
                    <div uk-form-custom>
                        <input type="file" name="photo" accept="image/*" required>
                        <button class="uk-button" type="button" tabindex="-1">Choisir une photo</button>
                    </div>
                </div>

                <div class="uk-margin uk-remove-margin-top">
                    <input type="submit" value="Ajouter un Abonne" name="submit" class="uk-button uk-button-default uk-align-center">
                </div>
            </div>
        </form>

    </div>

    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
</body>

</html>