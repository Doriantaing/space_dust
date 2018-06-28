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




    <section class="devis">
        <div class="devis__container">
            <h4 class="devis__title">Devis</h4>

            <ul class="devis__navSteps">
                <li class="devis__navStep --currentStep">Étape 1</li>
                <li class="devis__navStep">Étape 2</li>
                <li class="devis__navStep">Étape 3</li>
            </ul>



            <!-- Slider Forms -->

            <section class="devis__stepsForm">

                <!-- First Step -->

                <div class="devis__firstStep --stepsActive">
                    <h4 class="devis__firstStepTitle">Créer votre devis</h4>


                    <form action="" method="POST" class="devis__firstStepForm">
                        <div class="devis__firstStepFormContainer">

                            <div class="devis__firstStepFlex">
                                <div class="devis__firstStepSelectContainer">
                                 <select class="devis__firstStepSelect" id="firstValue" required>
                                      <option value="default" selected disabled>Type d’infrastructure</option>
                                      <option value="planetes">Planètes</option>
                                      <option value="station">Station spatiale</option>
                                      <option value="satellite">Satellite</option> 
                                      <option value="autres">Autres</option> 
                                  </select>
                                </div>

                                <input type="text" id="firstValue" placeholder="Nom de l’infrastructure" class="devis__firstStepInput">
                            </div>

                            <div class="devis__firstStepCleaning">
                                <p class="devis__firstStepCleaningTitle">Définir un rayon de nettoyage</p>
                                <div class="devis__firstStepCleaningContainer">
                                    <input type="text" id="firstValue" placeholder="150km" class="devis__firstStepInput">
                                    <div class="devis__firstStepCleaningCircle"></div>
                                </div>
                            </div>

                            <div class="devis__firstStepFlex">
                                <div class="devis__firstStepCheckBox">
                                    <input type="checkbox">
                                    <label for="check">Recycler les déchets ramassés</label>
                                </div>


                                <input type="text" id="firstValue" placeholder="Pourcentage de déchets à recycler" class="devis__firstStepInputPercent" disabled>
                            </div>
                        </div>

                        
                            <input type="submit" value="Suivant" class="devis__stepNext --center btnHoverDark" data-submit="first">

                    </form>


                </div>

                <!-- Second Step -->

                <div class="devis__secondStep --steps">
                    <h4 class="devis__secondStepTitle">Inscrivez-vous</h4>
                    <div class="devis__secondStepLinks">
                        <a href="#" class="devis__secondStepText">Déjà inscrit?</a>
                        <a href="login.php" class="devis__secondStepLink">Connectez-vous.</a>
                    </div>

                    <form action="" method="POST" class="devis__secondStepForm">

                        <div class="devis__secondStepFormContainer">
                            <input id="secondValue" type="text" class="devis__secondStepInput" placeholder="Nom" required>
                            <input id="secondValue" type="text" class="devis__secondStepInput" placeholder="Prénom" required>
                            <input id="secondValue" type="text" class="devis__secondStepInput" placeholder="Nom de l’entreprise">
                            <input id="secondValue" type="email" class="devis__secondStepInput" placeholder="E-mail" required>
                            <input id="secondValue" type="text" class="devis__secondStepInput" placeholder="Adresse">
                            <input id="secondValue" type="password" class="devis__secondStepInput" placeholder="Mot de Passe" required>
                        </div>



                            <input type="submit" value="Suivant" class="devis__stepNext --center btnHoverDark" data-submit="second">
                    </form>
                </div>

                <!-- Third Step -->

                <div class="devis__thirdStep --steps">
                    <h4 class="devis__thirdStepTitle">On peut y aller ?</h4>

                    <div class="devis__thirdStepContainer">
                        <div class="devis__thirdStepInfo">
                            <div class="devis__thirdStepInfoContainer">
                                <div class="devis__thirdStepInfoHeader">
                                <h4 class="devis__thirdStepInfoTitle">Informations personnelles</h4>

                                <ul class="devis__thirdStepInfoList">
                                    <li>Nom : </li>
                                    <li>Prénom : </li>
                                    <li>Nom de l’entreprise : </li>
                                    <li>E-mail : </li>
                                    <li>Adresse : </li>
                                </ul>
                                </div>

                                <div class="devis__thirdStepInfoImg">
                                    <img src="assets/img/spaceDuster.png" alt="" class="devis__thirdStepInfoImg">
                                </div>
                            </div>
                        </div>

                        <div class="devis__thirdStepSummary">
                            <h4 class="devis__thirdStepSummaryTitle">Devis n°8342</h4>
                            <p class="devis__thirdStepSummarySubTitle">fait le 29/06/2018</p>

                            <ul class="devis__thirdStepSummaryList">
                                <li class="devis__thirdStepSummaryItems">Type d’infrastructure : </li>
                                <li class="devis__thirdStepSummaryItems">Nom de l’infrastructure : </li>
                                <li class="devis__thirdStepSummaryItems">Rayon de nettoyage : </li>
                                <li class="devis__thirdStepSummaryItems">Recyclage des déchets à : </li>
                            </ul>

                            <p class="devis__thirdStepSummaryPrice">Prix : 2 255 000 0000 ¥</p>

                            <div class="devis__thirdStepSummaryButtons">
                                <button class="devis__thirdStepSummaryButton btnHoverBorder">Modifier</button>
                                <input type="submit" class="devis__thirdStepSummaryButtonSend btnHoverBackground" value="Valider" form="send">
                            </div>


                            <form action="php/dodevis.php" id="send" method="POST">
                                <input type="text" name="structure" value="">
                                <input type="text" name="nameStructure" value="">
                                <input type="text" name="rayon" value="">
                                <input type="text" name="recyclable" value="">
                                <input type="text" name="name" value="">
                                <input type="text" name="firstname" value="">
                                <input type="text" name="company" value="">
                                <input type="text" name="mail" value="">
                                <input type="text" name="adress" value="">
                                <input type="text" name="password" value="">
                            </form>

                        </div>
                    </div>
                </div>

        </div>
        </section>
        </div>
    </section>

<div class="empty"></div>
    <footer class="footer">
        <h3 class="footer__title">Restons en contact</h3>
        <p class="footer__mail">contact@spacedust.com</p>
        <p class="footer__adress">27 bis rue du progrès, 93100 Montreuil</p>
        <div class="footer__logos-box">
            <img src="./assets/img/facebook.png" alt="footer logo 1" class="footer__logos">
            <img src="./assets/img/instagram.png" alt="footer logo 2" class="footer__logos">
            <img src="./assets/img/reddit.png" alt="footer logo 3" class="footer__logos">
            <img src="./assets/img/twitter.png" alt="footer logo 4" class="footer__logos">

        </div>
    </footer>


    <script src="assets/js/countUp.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="assets/js/devis.js"></script>
</body>

</html>