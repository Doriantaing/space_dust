<?php

session_start();

require 'phpmailer/PHPMailerAutoload.php';

$name = $_SESSION['user']['name'];
$firstname = $_SESSION['user']['firstname'];
$email = $_SESSION['user']['mail'];
$company = $_SESSION['user']['company'];
$adress = $_SESSION['user']['adress'];
$structure = $_SESSION['user']['structure'];
$nameStructure = $_SESSION['user']['nameStructure'];
$rayon = $_SESSION['user']['rayon'];
$recyclable = $_SESSION['user']['recyclable'];
$date = date("d.m.y");

$mail = new PHPMailer(true);

$mail->IsHTML(true);

$mail->CharSet = "utf-8";

$mail->SetFrom('doriantaing77@hotmail.fr', 'Space Dust');

$mail->Subject = 'Nouvel adhérent';


// Depending on where the user is , send him the appropriate mail


if ($_GET['page'] === 'devis') {
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
a{
text-decoration: none;
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

@import url(\'https://fonts.googleapis.com/css?family=Nunito\');

body {
  font-family: \'Nunito\', sans-serif;
  line-height: 1;
  color: #173456;
}
.container{
width: 100%;
margin: auto;
}
.header {
  height: 275px;
  width: 100%;
  background: linear-gradient(to top right, rgba(78, 101, 135, 1) 0%, rgba(53, 73, 112, 1) 100%);
  margin: 0;
}
    

.headerText {
  text-align: center;
  font-size: 34px;
  color: #FFF;
}

.imgContainer{
    width: 100px;
  margin: 0 auto 50px auto;

    padding-top: 20px;
}
img{
width: 100%;
}

.contentText {
  text-align: center;
  font-size: 16px;
  color: #183456;
  margin: 40px 0;
}
.informations {
  display: block;
  width: 100%;
}

.informationsContent {
  background: #173456;
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
  width: 200px;
  height: 50px;
  text-align: center;
  background: #173456;
  color: #FFF;
  border-radius: 100px;
  border: 0;
  cursor: pointer;
}

.devis {
  width: 100%;
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


</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
<div class="container">
    <header class="header">
    <div class="imgContainer">
        <img src="https://image.noelshack.com/fichiers/2018/26/4/1530191870-logocomplet.png" alt="Logo"/>
    </div>
    <h1 class="headerText">Bienvenue <span class="username">'. $firstname .' </span>!</h1>
    </header>
    <p class="contentText">Vous êtes maintenant membre de Space Dust !</p>
    <div class="imgContainer">
        <img src="https://image.noelshack.com/fichiers/2018/26/4/1530191875-spaceduster-rond.png" alt="Logo"/>
    </div>
    <div class="informations">
      <div class="informationsContent">
           <li class="informationItem">Nom : '. $name . '</li>
           <li class="informationItem">Prenom :  '. $firstname . '</li>
           <li class="informationItem">Entreprise : '. $company .'</li>
           <li class="informationItem">Email : '. $email .'</li>
           <li class="informationItem">Adresse : '. $adress .'</li>
      </div>
    </div>
    <a href="https://spacedust.romainmetayer.com"><button class="button">Le site</button></a>
    <p class="contentText">Votre Devis</p>
    <div class="devis">
      <div class="devisNumber devisItems">Devis n°<span class="serial">876543</span></div>
      <div class="devisDate">fait le <span class="date">' . $date .  '</span></div>
      <div class="devisOthers">
        <li class="devisItems">Type d’infrastructure : '. $structure .'</li>
        <li class="devisItems">Nom de l’infrastructure : '. $nameStructure .'</li>
        <li class="devisItems">Rayon de nettoyage : '. $rayon .' km</li>
        <li class="devisItems">Recyclage des déchets à '. $recyclable .' %</li>
      </div>
      <div class="devisPrice">Prix</div>
    </div>
</div>

</body>';

} else if($_GET['page'] === 'recrutement'){
  $mail->Body = '
<head>
<style>
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
a{
text-decoration: none;
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

@import url(\'https://fonts.googleapis.com/css?family=Nunito\');

body {
  font-family: \'Nunito\', sans-serif;
  line-height: 1;
  color: #173456;
}
.container{
width: 100%;
margin: auto;
}
.header {
  height: 275px;
  width: 100%;
  background: linear-gradient(to top right, rgba(78, 101, 135, 1) 0%, rgba(53, 73, 112, 1) 100%);
  margin: 0;
}
    

.headerText {
  text-align: center;
  font-size: 34px;
  color: #FFF;
}

.imgContainer{
    width: 100px;
  margin: 0 auto 50px auto;

    padding-top: 20px;
}
img{
width: 100%;
}

.contentText {
  text-align: center;
  font-size: 16px;
  color: #183456;
  margin: 40px 0;
}
.informations {
  display: block;
  width: 100%;
}

.informationsContent {
  background: #173456;
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
  width: 200px;
  height: 50px;
  text-align: center;
  background: #173456;
  color: #FFF;
  border-radius: 100px;
  border: 0;
  cursor: pointer;
}

.devis {
  width: 100%;
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

</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
<div class="container">
    <header class="header">
    <div class="imgContainer">
        <img src="https://image.noelshack.com/fichiers/2018/26/4/1530191870-logocomplet.png" alt="Logo"/>
    </div>
    <h1 class="headerText">Merci pour votre candidature, <span class="username">'. $name . ' ' .$firstname .' </span>!</h1>
    </header>
    <p class="contentText">Nous allons étudier votre dossier</p>
    <div class="imgContainer">
        <img src="https://image.noelshack.com/fichiers/2018/26/4/1530191875-spaceduster-rond.png" alt="Logo"/>
    </div>
    <a href="https://spacedust.romainmetayer.com"><button class="button">Retourner sur le site</button></a>
</div>
</body>

'

;
} else if($_GET['page'] === 'register'){
  $mail->Body = '
<head>
<style>
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
a{
text-decoration: none;
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

@import url(\'https://fonts.googleapis.com/css?family=Nunito\');

body {
  font-family: \'Nunito\', sans-serif;
  line-height: 1;
  color: #173456;
}
.container{
width: 100%;
margin: auto;
}
.header {
  height: 275px;
  width: 100%;
  background: linear-gradient(to top right, rgba(78, 101, 135, 1) 0%, rgba(53, 73, 112, 1) 100%);
  margin: 0;
}
    

.headerText {
  text-align: center;
  font-size: 34px;
  color: #FFF;
}

.imgContainer{
    width: 100px;
  margin: 0 auto 50px auto;

    padding-top: 20px;
}
img{
width: 100%;
}

.contentText {
  text-align: center;
  font-size: 16px;
  color: #183456;
  margin: 40px 0;
}
.informations {
  display: block;
  width: 100%;
}

.informationsContent {
  background: #173456;
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
  width: 200px;
  height: 50px;
  text-align: center;
  background: #173456;
  color: #FFF;
  border-radius: 100px;
  border: 0;
  cursor: pointer;
}

.devis {
  width: 100%;
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

</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
<div class="container">
    <header class="header">
    <div class="imgContainer">
        <img src="https://image.noelshack.com/fichiers/2018/26/4/1530191870-logocomplet.png" alt="Logo"/>
    </div>
    <h1 class="headerText">Merci de t"etre inscrit avec nous, <span class="username">'. $name . ' ' .$firstname .' </span>!</h1>
    </header>
    <p class="contentText">N"hesite pas à venir nous voir</p>
    <div class="imgContainer">
        <img src="https://image.noelshack.com/fichiers/2018/26/4/1530191875-spaceduster-rond.png" alt="Logo"/>
    </div>
    <a href="https://spacedust.romainmetayer.com"><button class="button">Retourner sur le site</button></a>
</div>
</body>

'

;
}
$mail->AddAddress(''.$email.'');

$mail->send();

;
