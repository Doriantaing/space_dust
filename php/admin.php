<?php
  session_start();


  if (!isset($_GET['id'])) {
    header("Location: ../index.php?error=noidtodetails");
    exit;
}
  require_once 'connect.php';

  $sql = "SELECT 
  `user_id`, 
  `user_name`, 
  `user_firstname`,
  `user_password`
FROM
  `space_dust` . `user`
WHERE
     `user_id` = :id AND
     `user_name` = :login 
LIMIT 1
;";


$stmt = $con->prepare($sql);
$stmt->bindValue('id', $_GET['id']);
$stmt->bindValue('login', $_SESSION['user']['name']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

var_dump($row);

if ($row === false) {
  header("Location: index.php?error=nodatatodetails");
  exit;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace Client</title>
</head>
<body>


<h1>Admin</h1>

<table>
<tr>
        <th>id</th>
        <th>nom</th>
        <th>first name</th>
        <th>password</th>
</tr>

 <tr>
        <td><?= $row['user_id'] ?></td>
        <td><?= $row['user_name'] ?></td>
        <td><?= $row['user_firstname'] ?></td>
        <td><?= $row['user_password'] ?></td>
</tr>
</table>

<a href="logout.php">Log out</a>
</body>
</html>