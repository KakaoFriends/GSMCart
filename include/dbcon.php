<?php
session_start();

$servername = "localhost";
$username = "alfk";
$password = "sky0870!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,"alfk");
 // echo "Connected successfully";
?>
