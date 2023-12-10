
<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "appointmentdb";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$date = $_POST['date'];

// Perform database operations (e.g., insert data)

// Close the database connection
$conn->close();
?>
