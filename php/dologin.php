<?php

session_start();

$_SESSION['user']['mail'] = $_POST['mail'];
$_SESSION['user']['password'] = $_POST['password'];

// var_dump($_POST);

if (empty($_POST['mail']) || empty($_POST['password'])) {
    header('Location: ../index.php');
    exit;
}

require_once 'connect.php';


$check = "SELECT 
     `user_id`,
     `user_mail`,
     `user_password`
     FROM
     `space_dust` . `user`
     WHERE
     user_mail = :mail
     LIMIT 1
     ;";
$stmt = $con->prepare($check);
$stmt->bindValue('mail', $_POST['mail'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);


if($row === [] && password_verify($_POST['password'], $row['user_password'])){
    header('Location: ../index.php?error=nodata');
    exit;
}


header('Location: ../user/index.php?id='.$row[0]['user_id']);

?>