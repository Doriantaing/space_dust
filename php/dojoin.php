<?php
session_start();


$_SESSION['user']['name'] = $_POST['name'];
$_SESSION['user']['firstname'] = $_POST['firstname'];
$_SESSION['user']['age'] = $_POST['age'];
$_SESSION['user']['mail'] = $_POST['mail'];
$_SESSION['user']['job'] = $_POST['job'];
$_SESSION['user']['phone'] = $_POST['phone'];


// Check if values are not empty


if (!isset($_POST['name']) ||
    !isset($_POST['firstname'])||
    !isset($_POST['age']) ||
    !isset($_POST['job']) ||
    !isset($_POST['phone'])) {
     header('Location: ../join.php');
    exit;
}


require_once "connect.php";
require_once "mail.php";

// SQL Request

$requete = "INSERT INTO `space_dust` . `join` 
(`join_id` , `join_name` , `join_firstname` , `join_mail` , `join_age` , `join_job` , `join_phone`) 
VALUES 
(NULL , :name , :firstname  , :mail , :age , :job , :phone)
;";



$stmt = $con->prepare($requete);
$stmt -> bindValue(':name' , $_POST['name']);
$stmt -> bindValue(':firstname' , $_POST['firstname']);
$stmt -> bindValue(':mail' , $_POST['mail']);
$stmt -> bindValue(':age' , $_POST['age']);
$stmt -> bindValue(':job' , $_POST['job']);
$stmt -> bindValue(':phone' , $_POST['phone']);
$stmt->execute();


header('Location: ../checkJoin.php');



  