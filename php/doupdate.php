<?php

session_start();


if (!isset($_POST['name']) || !isset($_POST['firstname']) || !isset($_POST['password']) || !isset($_POST['company']) || !isset($_POST['mail']) || !isset($_POST['adress'])) {
    header("Location: ../index.php?error=GETOUT");
    exit;
}
require_once "../php/connect.php";

$req = "UPDATE 
  `romainmecvromain` . `user` 
SET 
  `user_name` = :name,
  `user_firstname` = :firstname,
  `user_password`= :password,
  `company` = :company,
  `user_mail` = :mail,
  `adress` = :adress
WHERE 
 `user_id` = :id
;";
$stmt = $con->prepare($req);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':firstname', $_POST['firstname']);
$stmt->bindValue(':password', $_POST['password']);
$stmt->bindValue(':company', $_POST['company']);
$stmt->bindValue(':mail', $_POST['mail']);
$stmt->bindValue(':adress', $_POST['adress']);
$stmt->bindValue(':id', $_SESSION['user']['id']);
$stmt->execute();

header('Location: ../user/index.php?id='.$_SESSION['user']['id']);