<?php
$host = "154.12.224.76";
$username = "phpmyadmin";
$password = "fgu@!76EKyu8892";
$dbname = "ACE"; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>