<?php
//add.php
//This file processes the form submission and inserts the data into the database

// Show errors for easier debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include database connection
include 'connection.php';

// Check if the form was submitted correctly
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and store values from the form safely
    $name = $_POST['name'];
    $address = $_POST['address'];
    $color = $_POST['color'];

    // Check if none of the fields are empty
    if (!empty($name) && !empty($address) && !empty($color)) {
        // Prepare SQL query to insert data into 'orders' table
        $sql = "INSERT INTO orders (name, address, color) VALUES ('$name', '$address', '$color')";

        // Execute the query and check if it was successful
        if ($conn->query($sql) === TRUE) {
            echo "<h3>🎉 Order Placed Successfully!</h3>";
            echo "<a href='view.php'>View All Orders</a> | <a href='index.php'>Order Another</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error; // show error if insertion fails
        }
    } else {
        echo "All fields are required!"; // validation message
    }
} else {
    echo "Invalid Request."; // show message if form was not submitted properly
}

$conn->close(); // close the database connection
?>