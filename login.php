<?php
session_start(); // Start the session at the beginning of your PHP script

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Admin credentials
    $adminUsername = "admin@gmail.com";
    $adminPassword = "2021";

    // User input
    $enteredUsername = $_POST["email"];
    $enteredPassword = $_POST["password"];

    // Check if the login attempt is from admin
    if ($enteredUsername == $adminUsername && $enteredPassword == $adminPassword) {
        // Admin login successful, redirect to admin.php
        header("Location: admin.php");
        exit();
    }

    // Database connection credentials
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "appointmentdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query using prepared statements to prevent SQL injection
    $query = "SELECT * FROM registrationtbl WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $enteredUsername, $enteredPassword); // Bind parameters

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, set session and redirect to dashboard
        $_SESSION['loggedin'] = true; // Set a session variable to indicate user is logged in
        header("Location: navbar.php");
        exit();
    } else {
        // User not found, redirect back to the login page with an error message
        header("Location: login.php?error=notfound");
        exit();
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}

    // Logout functionality
if (isset($_GET['logout'])) {
    if ($_GET['logout'] == 1) {
        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to login page after logout
        header("Location: login.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/login.css">
</head>
<body>
<div class="container">
    <form action="login.php" method="POST"> <!-- Specify the action to the same file for processing -->
        <h1>Login</h1>
        
        <div class="input-box">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <div class="remember-forget"> <br>
            <a href="">Forgot password?</a>
        </div>

        <button type="Submit" class="btn">Login</button>
        
        <div class="register-link">
            <p>Don't have an account?<a href="register.php">Register</a></p>
        </div>

        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'notfound') {
            echo '<p class="error-message">Can\'t proceed: The provided email and password were not found in the database.</p>';
        }
        ?>
    </form>
</div>
<!-- JavaScript libraries -->
<script src="style/js/bootstrap.bundle.min.js"></script>
<script src="style/js/jquery-3.7.1.js"></script>
</body>
</html>
