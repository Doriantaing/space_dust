<?php

try {
    $con = new PDO('mysql:host=romainmecvromain.mysql.db;dbname = romainmecvromain', 'romainmecvromain', 'Motdepasse123');
} catch(PDOException $exception) {
    die("Noooooooo");
}


?>
