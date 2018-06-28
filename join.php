<?php 
$empty = $_GET['empty'];

if (isset($empty)) {
?> <div class="errorContainer">
    <p class="errorText">Vous avez oublié de remplir des champs</p>
    </div>
<?php
}

include_once 'php/header.php';

?>


  <section class="joinOffers">
      <div class="joinOffers__container">
          <h1 class="joinOffers__title">Offres d'emplois</h1>

          <div class="joinOffers__box">
              <div class="joinOffers__boxContainer">
                 <h4 class="joinOffers__boxTitle">Technicien pilote</h4>

                 <div class="joinOffers__boxSummaryContainer">
                     <h4 class="joinOffers__boxSummaryTitle">Mission :</h4>
                     <p class="joinOffers__boxSummaryText">
                         - Piloter un space hoover et manipulation de l'aspitarateur  <br>
                         - Maintenance des outils test ecrit et physique <br>
                         Si votre candidature est retenue une formation vous sera dispensée par nos soins
                        </p>

                    <h4 class="joinOffers__boxSummaryAvailability">Disponibilité : ASAP</h4>

                    <button class="joinOffers__boxSummaryButton smBtn">Postuler</button>
                 </div>
              </div>
              <div class="joinOffers__boxContainer">
              <h4 class="joinOffers__boxTitle">Mécanicien de navette</h4>

             <div class="joinOffers__boxSummaryContainer">
               <h4 class="joinOffers__boxSummaryTitle">Mission :</h4>
               <p class="joinOffers__boxSummaryText">
               - Maintenance des navettes et des outils mécaniques   <br>
               - Entretiens des locaux <br>
               Si votre candidature est retenue une formation vous sera dispensée par nos soins
              </p>

             <h4 class="joinOffers__boxSummaryAvailability">Disponibilité : ASAP</h4>

             <button class="joinOffers__boxSummaryButton smBtn">Postuler</button>
            </div>
              </div>
          </div>
      </div>
  </section>


  <section class="joinForm">
      <button class="joinForm__return">Retour</button>
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
                <label class="joinForm__formLabel">Poste</label>
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

    
    <script src="assets/js/countUp.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="assets/js/input.js"></script>
    <script src="assets/js/join.js"></script>
</body>
</html>