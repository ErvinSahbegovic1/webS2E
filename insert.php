<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$name = $_REQUEST['name'];
$surename = $_REQUEST['surename'];
$servername = "localhost";
$username = "root";
$password = "ervajekralj";
$conn = new PDO("mysql:host=$servername;dbname=stake2earndb", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("INSERT INTO users(Name, Surename, Email) VALUES ('$name', '$surename', 'email@das.com')");
$result = $stmt->execute();
print_r($result)
 ?>
