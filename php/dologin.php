<?php

session_start();



// var_dump($_SESSION);
// echo $_SESSION;
$_SESSION['user']['mail'] = $_POST['mail'];





if (empty($_POST['mail']) || empty($_POST['password'])) {
    header('Location: ../login.php?empty=noData');
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
$stmt->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);


if(password_verify($_POST['password'], $row[0]['user_password'])){
  header('Location: ../user/index.php?id='.$row[0]['user_id']);
  echo 'ouiiii';
} else{
  header('Location: ../login.php?error=wrongData');
  echo 'nonnn';
  exit;
}

?>