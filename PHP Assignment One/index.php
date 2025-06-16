<!-- index.php -->
<!-- This page allows users to place their plushie pre-order -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plushie Pre-Order Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>🐻 Plushie Paradise 🐻</h1>
        <nav>
            <a href="index.php">Order Now</a> |
            <a href="view.php">View Orders</a>
        </nav>
    </header>

    <h2>Pre-Order Your Limited Edition Plushie!</h2>

    <form action="add.php" method="POST">
        <!-- Input for user's name -->
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <!-- Input for user's address -->
        <label>Address:</label><br>
        <textarea name="address" required></textarea><br><br>

        <!-- Dropdown for plushie color selection -->
        <label>Color Choice:</label><br>
        <select name="color" required>
            <option value="">--Select Color--</option>
            <option value="Pink">Pink</option>
            <option value="Blue">Blue</option>
            <option value="Rainbow">Rainbow</option>
        </select><br><br>

        <!-- Submit button to send data -->
        <input type="submit" value="Submit Order">
    </form>

    <footer>
        <p>&copy; 2025 Plushie Paradise. All rights reserved.</p>
    </footer>
</body>
</html>
