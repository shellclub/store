<?php
$hostname = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_store";

$conn = new mysqli($hostname,$db_user,$db_password,$db_name);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>