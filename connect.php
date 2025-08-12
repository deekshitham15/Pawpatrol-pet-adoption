<?php
$servername = "localhost"; // Server address (use 'localhost' for local server)
$username = "root"; // Default username for MySQL in XAMPP
$password = ""; // Default password (leave it blank in XAMPP)
$dbname = "pet_adoption"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // If the connection fails, display an error message
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; // If the connection is successful, show this message
?>
