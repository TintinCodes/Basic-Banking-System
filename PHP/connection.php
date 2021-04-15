<?php
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "tsfbank";


$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysql_connect_error());
}
?>
