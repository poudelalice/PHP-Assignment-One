<?php
// view.php - This file will show all the plushie pre-orders stored in the database! 🧸

// Include the database connection file
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Plushie Orders</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- linking cute CSS -->
</head>
<body>

<!-- Cute header with site logo and navigation -->
<header>
    <h1>Plushie Paradise 🧸</h1>
    <nav>
        <a href="index.php">Place New Order</a> |
        <a href="view.php">View Orders</a>
    </nav>
</header>

<main>
    <h2>All Plushie Pre-Orders:</h2>

    <?php
    // SQL query to select everything from the 'orders' table
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    // Check if there are any orders in the table
    if ($result->num_rows > 0) {
        // Start the table to display the data nicely
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Plushie Color</th>
                </tr>";

        // Fetch each row and show its data
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["customer_name"]) . "</td>
                    <td>" . htmlspecialchars($row["customer_address"]) . "</td>
                    <td>" . htmlspecialchars($row["plushie_color"]) . "</td>
                  </tr>";
        }

        echo "</table>"; // End of the table
    } else {
        // If there are no orders yet
        echo "<p>No orders yet. Be the first to order a cute plushie! 🧸</p>";
    }
    ?>
</main>

<!-- Footer for copyright -->
<footer>
    <p>© 2025 Plushie Paradise. All rights reserved.</p>
</footer>

</body>
</html>

<?php
// Close the database connection after we're done
$conn->close();
?>
