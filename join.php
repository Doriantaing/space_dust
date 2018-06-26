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
                                
                <input type="text" placeholder="Un petit message à nous adresser ?" class="joinForm__formInput --message">
            </div>

            <input type="submit" value="Postuler" class="joinForm__formInputSubmit">
        </form>
      </div>
    </section>

    
</body>
</html>