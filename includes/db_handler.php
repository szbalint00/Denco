<?php

$dsn = "mysql:host=localhost;dbname=test";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    echo "Connected!";
}
catch (Exception $e) {
    echo "Connection failed... ". $e->getMessage();
}