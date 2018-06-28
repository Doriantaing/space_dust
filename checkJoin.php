<?php 



require_once 'php/mail.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/css/styles.css">
    <link rel="stylesheet" href="assets/styles/css/reset.css">
    <title>Thank you</title>
</head>

<body>

<header class="header">
            <div class="header__inner">
                <a href="login.php" class="header__button lgButton">Retour a l'accueil</a>
                <div class="header__burger">
                    <div class="header__burger-round round1"></div>
                    <div class="header__burger-round round2"></div>
                    <div class="header__burger-round round3"></div>
                    <div class="header__burger-round round4"></div>
                </div>
            </div>
            <div class="menu">
                <div class="menu__containerItem">
                    <div class="menu__item">Accueil</div>
                    <div class="menu__item">Devis</div>
                    <div class="menu__item">Recrutement</div>
                    <div class="menu__imgContainer">
                        <img src="assets/img/SpaceDuster-rond.png.png" alt="logo" title="logo">
                    </div>
                </div>

            </div>
        </header>


    <section class="sendMail">
        <div class="sendMail__container">
            <h1 class="sendMail__title">Merci pour votre candidature !</h1>
            <p class="sendMail__subTitle">Nous avons bien reçu votre candidature, nous vous contacterons très prochainement peu importe notre décision !</p>


            <div class="sendMail__imgContainer">
                <img src="assets/img/SpaceDuster-rond.png" alt="" class="sendMail__img">
            </div>
        </div>
    </section>


    
    <script src="assets/js/countUp.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="./assets/js/index.js"></script>
</body>

</html>