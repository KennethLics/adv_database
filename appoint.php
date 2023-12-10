<?php
// function.php should be included before the PHP block starts
include 'function.php';

// Check if the user is logged in
checkLogin();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book = $_POST['book'] ?? '';
    $category = $_POST['category'] ?? '';
    $date_returned = $_POST['date_returned'] ?? '';

    // Database configuration
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "appointmentdb";

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die('<p class="error-message">Error: Connection failed. ' . $conn->connect_error . '</p>');
    } else {
        $conn->autocommit(FALSE); // Start a transaction
        
        $lastUserId = getLastUserId($conn);

        if ($lastUserId !== null) {
            $stmtClient = $conn->prepare("INSERT INTO clienttbl (user_id, book, category, date_returned, reg_id) VALUES (?, ?, ?, ?, ?)");
            $stmtClient->bind_param("isssi", $lastUserId, $book, $category, $date_returned, $lastUserId);
            
            if ($stmtClient->execute()) {
                $type = "Appointment";
                $stmtAppointment = $conn->prepare("INSERT INTO appointmenttbl (type, user_id) VALUES (?, ?)");
                $stmtAppointment->bind_param("si", $type, $lastUserId);

                if ($stmtAppointment->execute()) {
                    $conn->commit();
                    session_start();
                    $_SESSION['success_message'] = "Data inserted successfully!";
                    $stmtClient->close();
                    $stmtAppointment->close();
                    $conn->close();
                    // Redirect to the dashboard or success page if needed
                    header("Location: navbar.php");
                    exit();
                } else {
                    $conn->rollback();
                    echo '<p class="error-message">Error: Appointment insertion failed.</p>';
                }
            } else {
                echo '<p class="error-message">Error: Client insertion failed.</p>';
            }
        } else {
            echo '<p class="error-message">Error: Failed to retrieve user ID.</p>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK APPOINTMENT</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/style_contact_us_main.css">
</head>
<body>
<div class="container">
    <h1><a href="books.php"><img src="style/images/logos.png" alt="" height="100"></a>Book Appointment</h1>
    
    <!-- Display response message -->
    <div id="response-message" class="response-message">
        <!-- Messages will appear here -->
    </div>
    
    <form id="frmsad" method="POST" action="">
        <input type="text" placeholder="Book" name="book">
        <input type="text" placeholder="Category" name="category">
        <input type="date" placeholder="Date to be Returned" name="date_returned">
        <button type="submit">Send</button>
    </form>
</div>
<script src="style/js/jquery-3.7.1.js"></script>
<script src="style/js/bootstrap.bundle.min.js"></script>
<script>
    $('#frmsad').submit(function () {
        submitForm();
    });

    function submitForm() {
        alert("Form submitted successfully!");
        // Additional actions after form submission can be added here
        // For example, you might want to show a success message on the page
        // or redirect the user to another page.
        // window.location.href = "navbar.php";
    }
</script>
</body>
</html>
