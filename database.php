<?php
$username = "if0_37229673";
$password = "Microweigh30";
$database = "if0_37229673_customer";

$conn = new mysqli("sql108.infinityfree.com", $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
