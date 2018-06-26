<?php
session_start();


$_SESSION['user']['name'] = $_POST['name'];
$_SESSION['user']['firstname'] = $_POST['firstname'];
$_SESSION['user']['age'] = $_POST['age'];
$_SESSION['user']['mail'] = $_POST['mail'];


// Check if values are not empty


if (!isset($_POST['name']) ||
    !isset($_POST['firstname'])||
    !isset($_POST['age']) ||
    !isset($_POST['mail'])) {
    exit;
}


require_once "connect.php";
require_once "mail.php";

// SQL Request

$requete = "INSERT INTO `space_dust` . `join` 
(`join_id` , `join_name` , `join_firstname` , `join_mail` , `join_age`) 
VALUES 
(NULL , :name , :firstname  , :mail , :age)
;";



$stmt = $con->prepare($requete);
$stmt -> bindValue(':name' , $_POST['name']);
$stmt -> bindValue(':firstname' , $_POST['firstname']);
$stmt -> bindValue(':mail' , $_POST['mail']);
$stmt -> bindValue(':age' , $_POST['age']);
$stmt->execute();


header('Location: ../checkJoin.php');

