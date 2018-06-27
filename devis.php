<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/css/styles.css">
    <link rel="stylesheet" href="assets/styles/css/reset.css">
    <title>Devis</title>
</head>

<body>
    <!-- header -->
    <header class="header">
            <div class="header__inner">
                <a href="login.php" class="header__button lgButton">Espace membre</a>
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


    <section class="devis">
        <div class="devis__container">
            <h4 class="devis__title">Vous y êtes presque</h4>

            <ul class="devis__navSteps">
                <li class="devis__navStep --currentStep">Étape 1</li>
                <li class="devis__navStep">Étape 2</li>
                <li class="devis__navStep">Étape 3</li>
            </ul>



            <!-- Slider Forms -->

            <section class="devis__stepsForm">

                <!-- First Step -->

                <div class="devis__firstStep --stepsActive">
                    <h4 class="devis__firstStepTitle">Quelles sont les instructions, Arnaud ?</h4>


                    <form action="" method="POST" class="devis__firstStepForm">
                        <div class="devis__firstStepFormContainer">

                            <div class="devis__firstStepFlex">

                                <select class="devis__firstStepSelect" id="firstValue">
                                    <option value="volvo">Type d’infrastructure</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>

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

                        <div class="--center">
                            <input type="submit" value="Suivant" class="devis__stepNext" data-submit="first">
                        </div>

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



                        <div class="--center">
                            <input type="submit" value="Suivant" class="devis__stepNext" data-submit="second">
                        </div>
                    </form>
                </div>

                <!-- Third Step -->

                <div class="devis__thirdStep --steps">
                    <h4 class="devis__thirdStepTitle">On peut y aller ?</h4>

                    <div class="devis__thirdStepContainer">
                        <div class="devis__thirdStepInfo">
                            <div class="devis__thirdStepInfoContainer">

                                <h4 class="devis__thirdStepInfoTitle">Informations personnelles</h4>

                                <ul class="devis__thirdStepInfoList">
                                    <li>Nom : </li>
                                    <li>Prénom : </li>
                                    <li>Nom de l’entreprise : </li>
                                    <li>E-mail : </li>
                                    <li>Adresse : </li>
                                </ul>

                                <div class="devis__thirdStepInfoImg">
                                    <img src="assets/img/Illustration-Logo.png" alt="" class="devis__thirdStepInfoImg">
                                </div>
                            </div>
                        </div>

                        <div class="devis__thirdStepSummary">
                            <h4 class="devis__thirdStepSummaryTitle">Devis n°8342</h4>
                            <p class="devis__thirdStepSummarySubTitle">fait le 23/06/2018</p>

                            <ul class="devis__thirdStepSummaryList">
                                <li class="devis__thirdStepSummaryItems">Type d’infrastructure : </li>
                                <li class="devis__thirdStepSummaryItems">Nom de l’infrastructure : </li>
                                <li class="devis__thirdStepSummaryItems">Rayon de nettoyage : </li>
                                <li class="devis__thirdStepSummaryItems">Recyclage des déchets à : </li>
                            </ul>

                            <p class="devis__thirdStepSummaryPrice">Prix : 10000 ¥</p>

                            <div class="devis__thirdStepSummaryButtons">
                                <button class="devis__thirdStepSummaryButton">Modifier</button>
                                <input type="submit" class="devis__thirdStepSummaryButtonSend" value="Valider" form="send">
                            </div>

                            <form action="php/doregister.php" id="send" method="POST">
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