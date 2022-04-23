<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uikit.min.css">
    <link rel="shortcut icon" href="./images/Logo_AUF.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Gestion des Abonnes</title>
</head>

<body>
    <div class="uk-flex uk-align-center uk-flex-column@m uk-flex-column@s 
     uk-container uk-text-center uk-padding-small main" uk-grid>
        <div class="uk-width-2-3 welcome-party  uk-form-danger">
            <h3 class="auf">AUF</h3>
            <h5 class="uk-padding-small">Agence Universitaire de la <br>Francophonie</h5>
            <h6 class="">Gestion des abonnes Inscrit a la biblioteque
                Numerique<br> et logant dans les locaux de l'AUF</h6>
                <div class="uk-padding-small"></div>
            <img src="./images/logo/logo-v3.jpg" alt="" class="uk-padding-small">
        </div>
        <div class="uk-width-auto uk-card uk-card-hover uk-card-body uk-align-center
         form-inputs uk-animation-toggle" tabindex="0">
            <p class="connect">Se connecter maintenant</p>
            <form action="./pages/home.php" method="post" class="uk-align-center">
                <div class="uk-inline uk-animation-scale-up  uk-align-right">
                    <span class="uk-form-icon" uk-icon="user"></span>
                    <input type="email" name="email" id="email" class="uk-input uk-form-width-1-1 uk-margin" required>
                </div> <br>
                <div class="uk-inline uk-animation-scale-up  uk-align-right">
                    <span class="uk-form-icon" uk-icon="lock"></span>
                    <input type="password" name="password" id="password" class="uk-input uk-form-width-1-1 " required>
                </div>
                <br>
                <input type="submit" value="Se connecter" class="uk-margin uk-button
                   uk-button-default uk-align-right">
            </form>
        </div>
    </div>


    <script src="./assets/js/uikit.min.js"></script>
    <script src="./assets/js/uikit-icons.min.js"></script>
</body>

</html>