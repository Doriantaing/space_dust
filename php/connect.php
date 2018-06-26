<?php

try {
    $con = new PDO('mysql:host=127.0.0.1;dbname = space_dust', 'root', 'hetic');
} catch(PDOException $exception) {
    die("Noooooooo");
}

?>