<?php

try {
    $con = new PDO('mysql:host=127.0.0.1;dbname = space_dust', 'root', 'kirby');
} catch(PDOException $exception) {
    die("Noooooooo");
}

?>