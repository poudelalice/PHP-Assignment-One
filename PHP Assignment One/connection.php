<?php
// connection.php
// This file is responsible for connecting to the MySQL database

// Show all PHP errors to make debugging easier during development
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define the database connection details
$servername = "localhost";
$username = "Alice200603293"; // your MySQL username from LAMP
$password = "6sFTn5wY8v";       // your MySQL password from LAMP
$dbname = "Alice200603293";   // your database name from LAMP

// Create the connection to MySQL server using mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // stop and show error if connection fails
}
?>