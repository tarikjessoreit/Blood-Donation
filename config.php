<?php 
session_start();
date_default_timezone_set('Asia/Dhaka');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ablood_b_17";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

require('functions.php');