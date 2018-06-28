<?php 

include_once 'php/header.php';

?>


  <section class="joinForm">
        <div class="joinForm__container">
        <h1 class="joinForm__title">Bienvenue</h1>
        <div class="joinForm__subTitle">
            <p class="joinForm__text"> Envie de devenir un Space Duster ?</p>
        </div>

        <form action="php/dojoin.php" method="post" class="joinForm__form">

            <div class="joinForm__formContainer">
               
                <div class="joinForm__formInputs">
                <input class="joinForm__formInput" type="text" name="name">
                <label class="joinForm__formLabel">Nom</label>
                </div>

                <div class="joinForm__formInputs">
                 <input class="joinForm__formInput" type="text" name="firstname">
                  <label class="joinForm__formLabel">Prénom</label>
                 </div>

                <div class="joinForm__formInputs">
                 <input class="joinForm__formInput" type="text" name="age">
                 <label class="joinForm__formLabel">Âge</label> 
                 </div>

                <div class="joinForm__formInputs">
                <input class="joinForm__formInput" type="text" name="mail">
                <label class="joinForm__formLabel">E-mail</label>
                 </div>

                <div class="joinForm__formInputs">
                <input class="joinForm__formInput" type="text" name="job">
                <label class="joinForm__formLabel">Poste Actuelle</label>
                  </div>

                <div class="joinForm__formInputs">
                <input class="joinForm__formInput" type="text" name="phone">
                <label class="joinForm__formLabel">Telephone</label>
                </div> 
            </div>

            <input type="submit" value="Postuler" class="joinForm__formInputSubmit">
        </form>
      </div>
    </section>

    
  
    <script src="assets/js/menu.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="assets/js/input.js"></script>
</body>
</html>