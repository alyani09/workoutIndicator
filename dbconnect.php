<?php
$servername = "localhost";
$username = "root";
$passworddb = "";
$database = "intensity";

  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $passworddb);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>