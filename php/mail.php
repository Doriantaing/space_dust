<?php

session_start();

require 'phpmailer/PHPMailerAutoload.php';

$name = $_SESSION['user']['name'];
$firstname = $_SESSION['user']['firstname'];
$email = $_SESSION['user']['mail'];
$company = $_SESSION['user']['company'];
$adress = $_SESSION['user']['adress'];

$mail = new PHPMailer(true);

$mail->IsHTML(true);

$mail->CharSet = "utf-8";

$mail->SetFrom('doriantaing77@hotmail.fr', 'Space Dust');

$mail->Subject = 'Objet de l\'email';

 $mail->AddEmbeddedImage('../assets/img/Illustration-Logo.png','mon_logo', 'logo.png');

$mail->Body = ' 
<head>
<style>
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

li {
  list-style: none;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

body {
  font-family: "nunito";
  line-height: 1;
  color: #173456;
}

.header {
  height: 275px;
  width: 100vw;
  background: linear-gradient(to top right, rgba(78, 101, 135, 1) 0%, rgba(53, 73, 112, 1) 100%);
  margin: 0;
}

.headerImg {
  padding-top: 30px;
  margin: auto;
  width: 90px;
}

.header-imgContainer {
  width: 90px;
}

.header-imgContainer img {
  width: 100%;
}

.headerText {
  margin-top: 50px;
  text-align: center;
  font-size: 34px;
  color: #FFF;
}

.contentText {
  text-align: center;
  font-size: 16px;
  color: #183456;
  margin: 40px 0;
}

.informations {
  width: 400px;
  display: flex;
  justify-content: space-between;
  margin: auto;
  align-items: center;
}

.informationsImgContainer {
  width: 49%;
}

.informationsImgContainer img {
  width: 100%;
}

.informationsContent {
  background: #173456;
  width: 49%;
  padding: 10px;
  height: 100%;
  color: white;
}

.informationItem {
  margin: 15px;
}

.button {
  text-transform: uppercase;
  display: block;
  margin: 40px auto;
  width: 120px;
  height: 35px;
  text-align: center;
  background: #173456;
  ;
  color: #FFF;
  border-radius: 100px;
  border: 0;
  cursor: pointer;
}

.devis {
  width: 400px;
  margin: auto;
  box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.12);
  padding: 20px;
}

.devisNumber {
  font-weight: bold;
}

.devisOthers {
  margin-top: 20px;
}

.devisItems {
  margin-top: 10px;
  font-weight: lighter;
}

.devisPrice {
  margin-top: 20px;
  font-weight: bold;
}

.footerImgContainer {
  width: 35px;
  margin: 20px auto;
}

.footerImgContainer img {
  width: 100%;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
<header class="header">
<h1 class="headerText">Bienvenue <span class="username">'. $firstname .' </span>!</h1>
</header>
<section class="content">
<p class="contentText">Vous êtes maintenant membre de Space Dust !</p>
<div class="informations">
  <div class="informationsContent">
       <li class="informationItem">Nom : '. $name . '</li>
       <li class="informationItem">Prenom :  '. $firstname . '</li>
       <li class="informationItem">Entreprise : '. $company .'</li>
       <li class="informationItem">Email : '. $email .'</li>
       <li class="informationItem">Adresse : '. $adress .'</li>
  </div>
</div>
<button class="button">Visiter le site</button>
<p class="contentText">Votre Devis</p>
<div class="devis">
  <div class="devisNumber devisItems">Devis n°<span class="serial">876543</span></div>
  <div class="devisDate">fait le <span class="date">23/06/2018</span></div>
  <div class="devisOthers">
    <li class="devisItems">Type d’infrastructure</li>
    <li class="devisItems">Nom de l’infrastructure</li>
    <li class="devisItems">Rayon de nettoyage</li>
    <li class="devisItems">Recyclage des déchets à 70%</li>
  </div>
  <div class="devisPrice">Prix</div>
</div>
</section>
</body>

'

;

$mail->AddAddress(''.$email.'');

$mail->send();

