<?php
$servername = "localhost";
$username = "root"; // Update this with your database username
$password = ""; // Update this with your database password
$dbname = "dbgold";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>