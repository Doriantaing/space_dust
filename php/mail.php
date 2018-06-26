<?php

session_start();

require 'phpmailer/PHPMailerAutoload.php';


$name = $_SESSION['user']['name'];
$firstname = $_SESSION['user']['firstname'];
$email = $_SESSION['user']['mail'];

$mail = new PHPMailer(true);

$mail->IsHTML(true);

$mail->CharSet = "utf-8";

$mail->SetFrom('doriantaing77@hotmail.fr', 'Space Dust');

$mail->Subject = 'Objet de l\'email';

$mail->AddEmbeddedImage('../assets/img/Illustration-Logo.png','mon_logo', 'logo.png');

$mail->Body = '<head>
<style>
body{
   background : #49b6ce;
}

h1{
    font-size: 36px;
    text-align: center;
}
</style>
</head>

<img src="../assets/img/Illustration-Logo.png"a alt="Logo"/>
<h1>Hello Sir</h1>
<p>Yo '.$firstname.' '.$name.'</p>
<p> How is it to work at ' .$company.' ?</p>
<p></p>


'


;

$mail->AddAddress(''.$email.'');

$mail->send();
?>