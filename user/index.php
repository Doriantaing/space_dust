<?php
session_start();

 $_SESSION['user']['id'] = $_GET['id'];
require_once '../php/connect.php';

  if (!isset($_SESSION['user']['mail']) || !isset($_GET['id'])){
    header('Location: ../index.php?error=nodata');
    exit;
  }

  $req = "SELECT 
  `user_id`, 
  `user_name`, 
  `user_firstname`,
  `company`,
  `user_mail`,
  `user_password`,
  `adress`
   FROM
   `space_dust` . `user`
  WHERE 
   `user_mail` = :mail AND
   `user_id` = :id
   LIMIT 1
   ;";

$stmt = $con->prepare($req);
$stmt->bindValue(':mail', $_SESSION['user']['mail']);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($row);
if ($row === false) {
    header("Location: ../index.php?error=nodatatodetails");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/styles/css/styles.css">
  <link rel="stylesheet" href="../assets/styles/css/reset.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <title>ESPACE CLIENT</title>
</head>

<body>

  <header class="headeruser">
    <div class="headeruser__inner">
      <div class="headeruser__menu">
         <div class="headeruser__username"><?= $row[0]['user_name'] . ' ' . $row[0]['user_firstname']?></div>
        <a href="../php/logout.php" class="headeruser__logout">Déconnexion</a>
      </div>
      <div class="headeruser__logo-imgContainer">
        <h1><img class="headeruser__img" src="../assets/img/Illustration-Logo.png" alt="logo" title="Space Dust"></h1>
      </div>
      <div class="headeruser__companyName-imgContainer">
        <img class="headeruser__img" src="../assets/img/SPACE-DUST-W.png" alt="logo" title="Space Dust">
      </div>
      <div class="headeruser__nav">
        <div class="headeruser__line">
          <div class="headeruser__line-inner line1"></div>
        </div>
        <div class="headeruser__tabs">
          <div class="headeruser__tabs-item 0 activeHeaderUser" onclick="clickTabs(event)">Suivi</div>
          <div class="headeruser__tabs-item 1" onclick="clickTabs(event)">Devis</div>
          <div class="headeruser__tabs-item 2" onclick="clickTabs(event)">Profil</div>
        </div>
      </div>
    </div>
  </header>
  <div class="contentClient">
    <section id="client1" ontouchstart="p1start(event)" ontouchmove="p1move(event)" ontouchend="p1end(event)" class="page suivi active">
      <div class="suivi__inner">

        <div class="suivi__percentage">
          <div class="suivi__percentage-inner"><span class="suivi__percentage-text">30%</span></div>
        </div>

        <h3 class="suivi__title userTitle">Temps estimé</h3>

        <div class="suivi__desktop-flex">
          <div class="suivi__desktop-leftContent">
            <div class="suivi__estimatedTime">
              <span class="suivi__estimatedTime-day"></span>
              <span class="suivi__estimatedTime-separed">j</span>
              <span class="suivi__estimatedTime-hour"></span>
              <span class="suivi__estimatedTime-separed">h</span>
              <span class="suivi__estimatedTime-minute"></span>
              <span class="suivi__estimatedTime-separed">m</span>
              <span class="suivi__estimatedTime-second"></span>
              <span class="suivi__estimatedTime-separed">s</span>
            </div>
            <h3 class="suivi__title userTitle">Les déchets collectés</h3>
            <div class="suivi__stats">
              <canvas id="lineCharts"></canvas>
            </div>
          </div>
          <div class="suivi__desktop-waste">
            <div class="suivi__waste">
              <div class="suivi__stats-circle">
                <canvas id="circleCharts"></canvas>
              </div>
              <div class="suivi__legends">
                <div class="suivi__legends-items">
                  <div class="suivi__legends-round outer-yellow">
                    <div class="suivi__legends-roundInner inner-yellow"></div>
                  </div>
                  <p class="suivi__legends-text">Déchets collectés</p>
                </div>
                <div class="suivi__legends-items">
                  <div class="suivi__legends-round outer-red">
                    <div class="suivi__legends-roundInner inner-red"></div>
                  </div>
                  <p class="suivi__legends-text">Déchets non-collectés</p>
                </div>
                <div class="suivi__legends-items">
                  <div class="suivi__legends-round outer-blue">
                    <div class="suivi__legends-roundInner inner-blue"></div>
                  </div>
                  <p class="suivi__legends-text">Déchets recyclés</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>

    <section id="client2" class="page userDevis">
      <div class="userDevis__inner">
        <h3 class="userDevis__title userTitle">Tous les devis</h3>
        <div class="userDevis__cards">
          <div class="userDevis__cards-inner">
            <div class="userDevis__mission__principal">
              <h4 class="userDevis__mission-title">Mission 1</h4>
              <p class="userDevis__mission-date">fait le <span class="userDevis__mission-date-replaced">00/00/0000</span></p>
            </div>
            <div class="userDevis__mission__details">
              <div class="userDevis__mission-waste">
                <p class="userDevis__details-item">Déchets ramassés : <span class="userDevis__mission-pickedup">12 333</span></p>
                <p class="userDevis__details-item">Déchets recyclés : <span class="userDevis__mission-recycled">15 987</span></p>
              </div>
              <p class="userDevis__mission-price">21M</p>
            </div>
          </div>
        </div>
        <div class="userDevis__cards">
          <div class="userDevis__cards-inner">
            <div class="userDevis__mission__principal">
              <h4 class="userDevis__mission-title">Mission 2</h4>
              <p class="userDevis__mission-date">fait le <span class="userDevis__mission-date-replaced">00/00/0000</span></p>
            </div>
            <div class="userDevis__mission__details">
              <div class="userDevis__mission-waste">
                <p class="userDevis__details-item">Déchets ramassés : <span class="userDevis__mission-pickedup">12 333</span></p>
                <p class="userDevis__details-item">Déchets recyclés : <span class="userDevis__mission-recycled">15 987</span></p>
              </div>
              <p class="userDevis__mission-price">21M</p>
            </div>
          </div>
        </div>
        <div class="userDevis__cards">
          <div class="userDevis__cards-inner">
            <div class="userDevis__mission__principal">
              <h4 class="userDevis__mission-title">Mission 2</h4>
              <p class="userDevis__mission-date">fait le <span class="userDevis__mission-date-replaced">00/00/0000</span></p>
            </div>
            <div class="userDevis__mission__details">
              <div class="userDevis__mission-waste">
                <p class="userDevis__details-item">Déchets ramassés : <span class="userDevis__mission-pickedup">12 333</span></p>
                <p class="userDevis__details-item">Déchets recyclés : <span class="userDevis__mission-recycled">15 987</span></p>
              </div>
              <p class="userDevis__mission-price">21M</p>
            </div>
          </div>
        </div>
      </div>
      <div class="smBtn --userDevis">Faire un devis</div>
    </section>

      <div class="modal">
        <div class="modal__overlay"></div>
          <div class="modal__content">
            <form action="">
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
              <input type="submit" value="envoyer" class="smBtn submit_user">          
            </form>
          
        </div>
      </div>

    <section id="client3" ontouchstart="p3start(event)" ontouchmove="p3move(event)" ontouchend="p3end(event)" class="page profil">
      <div class="profil__inner">
        <h1 class="profil__username">Modifier votre profil</h1>
        <form action="../php/doupdate.php" method="POST" class="profil__form">
          <div class="profil__form-flex">
            <div class="profil__form-items">
              <div class="profil__form-text">
                NOM :
              </div>
              <div class="profil__inputContainer">
                <input type="text" name="name" value="<?=$row[0]['user_name']?>">
              </div>
            </div>
            <div class="profil__form-items">
              <div class="profil__form-text">
                PRENOM :
              </div>
              <div class="profil__inputContainer">
                <input type="text" name="firstname" value="<?=$row[0]['user_firstname']?>">
              </div>
            </div>
            <div class="profil__form-items">
              <div class="profil__form-text">
                MOT DE PASSE :
              </div>
              <div class="profil__inputContainer">
                <input type="password" name="password" value="<?=$_SESSION['user']['password']?>">
              </div>
            </div>
          </div>
          <div class="profil__form-flex">
            <div class="profil__form-items">
              <div class="profil__form-text">
                NOM DE L'ENTREPRISE
              </div>
              <div class="profil__inputContainer">
                <input type="text" name="company" value="<?=$row[0]['company']?>" >
              </div>
            </div>
            <div class="profil__form-items">
              <div class="profil__form-text">
                E-MAIL:
              </div>
              <div class="profil__inputContainer">
                <input type="mail" name="mail" value="<?=$row[0]['user_mail']?>">
              </div>
            </div>
            <div class="profil__form-items">
              <div class="profil__form-text">
                ADRESSE :
              </div>
              <div class="profil__inputContainer">
                <input type="text" name="adress" value="<?= $row[0]['adress']?>">
              </div>
            </div>
            <input type="submit" name="submit" value="Valider">
          </div>
        </form>
      </div>
    </section>

  </div>
  <script src="../assets/js/countdown.js"></script>
  <script src="../assets/js/charts.js"></script>
  <script src="../assets/js/swipe.js"></script>
  <script src="../assets/js/devis.js"></script>
  <script src="../assets/js/index.js"></script>

</body>

</html>