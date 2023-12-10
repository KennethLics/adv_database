<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/login.css">
</head>
<body>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h1>Registration</h1>
        
        <div class="input-box">
            <input type="text" name="firstName" placeholder="Firstname" required>
        </div>
        <div class="input-box">
            <input type="text" name="middleName" placeholder="Middlename" required>
        </div>
        <div class="input-box">
            <input type="text" name="lastname" placeholder="Lastname" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="input-box">
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
        </div>
        <div class="remember-forget">
            <label><input type="checkbox" required> Agree to our <a href="terms.php">Terms and Services</a></label>
        </div>
        <button type="submit" class="btn">Submit...</button>
        
        <div class="register-link">
            <p>Already have an account?<a href="login.php">Sign In</a></p>
        </div>
        
        <?php
session_start(); // Starting the session for using session variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastname']; // Updated variable name to match HTML form
    $rawPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_POST['email'];

    if ($rawPassword !== $confirmPassword) {
        echo '<p class="error-message">Error: Passwords do not match.</p>';
    } else {
        $host = "localhost";
        $username = "root";
        $password = ""; // Replace with your actual database password
        $database = "appointmentdb";

        // Establishing connection
        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            echo '<p class="error-message">Error: Connection failed. ' . $conn->connect_error . '</p>';
        } else {
            // Preparing and executing the insertion into registrationtbl
            $stmt = $conn->prepare("INSERT INTO registrationtbl (firstName, middleName, lastName, email, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $firstName, $middleName, $lastName, $email, $rawPassword);

            if ($stmt->execute()) {
                // Inserting into activitytbl for logging
                $activity = "User registered";
                $status = "Success";

                // Get the ID of the inserted registration
                $reg_id = $stmt->insert_id;

                $activity_stmt = $conn->prepare("INSERT INTO activitytbl (activity, status, reg_id) VALUES (?, ?, ?)");
                $activity_stmt->bind_param("ssi", $activity, $status, $reg_id);
                $activity_stmt->execute();
                $activity_stmt->close();

                $_SESSION['success_message'] = "Data inserted successfully!";
                header("Location: login.php");
                exit();
            } else {
                echo '<p class="error-message">Error: Data insertion failed.</p>';
            }

            $stmt->close();
            $conn->close();
        }
    }
}
?>


    </form>
</div>

<script src="style/js/bootstrap.bundle.min.js"></script>
<script src="style/js/jquery-3.7.1.js"></script>
</body>
</html>
