<?php

session_start();

$_SESSION['user']['name'] = $_POST['name'];
$_SESSION['user']['password'] = $_POST['password'];


if (!isset($_POST['name']) || !isset($_POST['password'])) {
    header('Location: ./index.php');
    exit;
}

require_once 'connect.php';


$check = "SELECT 
     `user_id`,
     `user_name`,
     `user_password`
     FROM
     `space_dust` . `user`
     WHERE
     user_name = :name
     LIMIT 1
     ;";
$stmt = $con->prepare($check);
$stmt->bindValue('name', $_POST['name'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);


if($row === [] && password_verify($_POST['password'], $row['user_password'])){
    header('Location: ./index.php?error=nodata');
    exit;
}


header('Location: admin.php?id='.$row[0]['user_id']);

echo $row[0]['user_id'];
var_dump($row);
?>