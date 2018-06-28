<?php
session_start();


$_SESSION['user']['name'] = $_POST['name'];
$_SESSION['user']['firstname'] = $_POST['firstname'];
$_SESSION['user']['company'] = $_POST['company'];
$_SESSION['user']['mail'] = $_POST['mail'];
$_SESSION['user']['adress'] = $_POST['adress'];
$_SESSION['user']['password'] = password_hash($_POST['password'] , PASSWORD_DEFAULT);


// Check if values are not empty


if (!isset($_POST['name']) ||
    !isset($_POST['firstname'])||
    !isset($_POST['company']) ||
    !isset($_POST['mail']) ||
    !isset($_POST['adress']) ||
    !isset($_POST['password'])) {
    exit;
}


require_once "connect.php";
require_once "mail.php";

// SQL Request

$requete = "INSERT INTO `space_dust` . `user` 
(`user_id` , `user_name` , `user_firstname` , `company` , `user_mail` , `user_password` , `adress`) 
VALUES 
(NULL , :login , :firstname , :company , :mail , :password , :adress)
;";



$stmt = $con->prepare($requete);
$stmt -> bindValue(':login' , $_POST['name']);
$stmt -> bindValue(':firstname' , $_POST['firstname']);
$stmt -> bindValue(':company' , $_POST['company']);
$stmt -> bindValue(':mail' , $_POST['mail']);
$stmt -> bindValue(':password' , $_SESSION['user']['password']);
$stmt -> bindValue(':adress' , $_POST['adress']);
$stmt->execute();


//var_dump ($requete);
header('Location: ../checkDevis.php');

