<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Replace "your_username" with your actual MySQL username
$password = ""; // Replace "your_password" with your actual MySQL password
$dbname = "FoodDonationDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully"; // This line will output if the connection is successful
}
?>
