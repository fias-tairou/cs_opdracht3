<?php
// Basic connection settings
$servername = "db";
$username = "s109626";
$password = "plantjes123";
$dbname = "csdb";

// Connect to the database
$conn = mysqli_connect($servername, $username,$password, $dbname); 

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>