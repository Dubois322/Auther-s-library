<?php

$hostname = "localhost";
$username = "root";
$userpass = "";
$dbname = "authordb";


try {
  $conn = new PDO("mysql:host=$hostname;dbname=authordb", $username, $userpass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>