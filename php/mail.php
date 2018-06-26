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
h1 {color:red;}
p {color:blue;}
</style>
</head>

<img src="../assets/img/Illustration-Logo.png"a alt="Logo"/>
<h1>Hello Sir</h1>
<p>Yo '.$firstname.'</p>
<p> How is it to work at ' .$company.' ?</p>
<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>


'


;

$mail->AddAddress(''.$email.'');


// if (!$mail->send()){
//     echo "Something wrong happened!";
// }
// else{
//     echo 'OKKKKKK';
// }
?>