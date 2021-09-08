<?php

$servername = "localhost:3306";
$username = "admin";
$password = "cuVHM8e6LxznNHId";
$dbname = "project9";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $error) {
    print $error->getMessage();
}