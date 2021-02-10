<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname="User_Profile";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>