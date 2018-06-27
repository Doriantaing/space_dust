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
                    <a href="join.php" class="menu__item">Recrutement</a>
                    <div class="menu__imgContainer">
                        <img src="assets/img/Illustration-Logo.png" alt="logo" title="logo">
                    </div>
                </div>

            </div>
        </header>


    <section class="login">

    <div class="login__container">
        <h1 class="login__title">Connectez-vous</h1>

        <div class="login__subTitle">
            <p class="login__text">Pas encore inscrit ?</p>
            <p class="login__link">Inscrivez-vous.</p>
        </div>

        <form action="php/dologin.php" method="post" class="login__form">

            <div class="login__formContainer">
               
            
                <div class="login__formInputs">
                <input class="login__formInput" type="text" name="mail">
                <label class="login__formLabel">E-mail</label>
                </div>

                <div class="login__formInputs">
                <input class="login__formInput" type="password" name="password">
                <label class="login__formLabel">Mot de passe</label>
                </div>
                <input type="submit" value="Connexion" class="login__formInputSubmit">
            </div>
         </form>
        </div>
    </section>


    <section class="register">
        <div class="register__container">
        <h1 class="register__title">Inscrivez-vous</h1>
        <div class="register__subTitle">
            <p class="register__text"> Déjà inscrit?</p>
            <p class="register__link">Connectez-vous.</p>
        </div>

        <form action="php/doregister.php" method="post" class="register__form">

            <div class="register__formContainer">
                
                

                <div class="register__formInputs">
                <input class="register__formInput" type="text" name="name">
                <label class="register__formLabel">Nom</label>
                </div>


                <div class="register__formInputs">
                <input class="register__formInput" type="text" name="firstname">
                <label class="register__formLabel">Prénom</label>
                </div>

                <div class="register__formInputs">
                <input class="register__formInput" type="password" name="password">
                <label class="register__formLabel">Mot de passe</label>
                </div>

               
                <div class="register__formInputs">
                <input class="register__formInput" type="text" name="company">
                <label class="register__formLabel">Nom de l'entreprise</label>
                </div>
                <div class="register__formInputs">
                <input class="register__formInput" type="text" name="mail">
                <label class="register__formLabel">E-mail</label>
                </div>

                 <div class="register__formInputs">
                <input class="register__formInput" type="text" name="adress">
                <label class="register__formLabel">Adresse</label>
                </div>
                
            </div>

            <input type="submit" value="S'inscrire" class="register__formInputSubmit">
        </form>
      </div>
    </section>




  <script src="assets/js/countUp.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="assets/js/input.js"></script>
<script>

// When you click on Inscrivez vous change to Register Page

var login = document.querySelector('.login');
var loginText = document.querySelector('.login__link');
var register = document.querySelector('.register');
var registerText = document.querySelector('.register__link');

loginText.addEventListener('click',function(){
    login.style.display = 'none';
    register.style.display = 'block';
});

registerText.addEventListener('click',function(){
    login.style.display = 'block';
    register.style.display = 'none';
});

</script>
</body>

</html>