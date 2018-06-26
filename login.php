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

    <section class="login">
        <h1 class="login__title">Connectez-vous</h1>

        <div class="login__subTitle">
            <p class="login__text">Pas encore inscrit ?</p>
            <p class="login__link">Inscrivez-vous.</p>
        </div>

        <form action="php/dologin.php" method="post" class="login__form">

            <div class="login__formContainer">
                <!-- <label for="name">E-mail</label> -->
                <input type="text" name="mail" placeholder="E-mail" class="login__formInput">

                <!-- <label for="password">Mot de Passe</label> -->
                <input type="password" name="password" placeholder="Mot de Passe" class="login__formInput">

                <input type="submit" value="Connexion" class="login__formInputSubmit">
            </div>
        </form>
    </section>


    <section class="register">
        <h1 class="register__title">Inscrivez-vous</h1>
        <div class="register__subTitle">
            <p class="register__text"> Déjà inscrit?</p>
            <p class="register__link">Connectez-vous.</p>
        </div>

        <form action="php/doregister.php" method="post" class="register__form">

            <div class="register__formContainer">
                <!-- <label for="name">E-mail</label> -->
                <input type="text" name="name" placeholder="Nom" class="register__formInput">

                <input type="text" name="firstname" placeholder="Prenom" class="register__formInput">

                <!-- <label for="password">Mot de Passe</label> -->
                <input type="password" name="password" placeholder="Mot de Passe" class="register__formInput">

                <input type="text" name="company" placeholder="Nom de l'entreprise" class="register__formInput">

                <input type="text" name="mail" placeholder="E-mail" class="register__formInput">
                
                <input type="text" name="adress" placeholder="Adresse" class="register__formInput">

                <input type="submit" value="S'inscrire" class="register__formInputSubmit">
            </div>
        </form>
    </section>


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