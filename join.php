<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/css/styles.css">
    <link rel="stylesheet" href="assets/styles/css/reset.css">
    <title>Space Dust</title>
</head>
<body>

<header class="header">
            <div class="header__inner">
                <a href="index.php" class="header__button lgButton">Retour à l'accueil</a>
                <div class="header__burger">
                    <div class="header__burger-round round1"></div>
                    <div class="header__burger-round round2"></div>
                    <div class="header__burger-round round3"></div>
                    <div class="header__burger-round round4"></div>
                </div>
            </div>
            <div class="menu">
                <div class="menu__containerItem">
                <a href="index.php" class="menu__item">Accueil</a>
                    <a href="devis.php" class="menu__item">Devis</a>
                    <a href="join.php" class="menu__item">Jobs</a>
                    <a href="#" class="menu__item">Ma bite</a>
                    <div class="menu__imgContainer">
                        <img src="assets/img/Illustration-Logo.png" alt="logo" title="logo">
                    </div>
                </div>

            </div>
        </header>


  <section class="joinForm">
        <div class="joinForm__container">
        <h1 class="joinForm__title">Bienvenue, soldat !</h1>
        <div class="joinForm__subTitle">
            <p class="joinForm__text"> Envie de devenir un Space Duster ?</p>
        </div>

        <form action="php/dojoin.php" method="post" class="joinForm__form">

            <div class="joinForm__formContainer">
               
                <input type="text" name="name" placeholder="Nom" class="joinForm__formInput">

                <input type="text" name="firstname" placeholder="Prènom" class="joinForm__formInput">

                <input type="text" name="age" placeholder="Âge" class="joinForm__formInput">
                
                <input type="text" name="mail" placeholder="E-mail" class="joinForm__formInput">
                                
                <input type="text" name="job" placeholder="Poste Actuelle" class="joinForm__formInput">

                <input type="text" name="phone" placeholder="Telephone" class="joinForm__formInput">
            </div>

            <input type="submit" value="Postuler" class="joinForm__formInputSubmit">
        </form>
      </div>
    </section>

    
    <script src="assets/js/countUp.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>