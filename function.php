<?php
session_start();

// Function to check if the user is logged in
function checkLogin() {
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // Redirect the user to the login page if not logged in
        header("Location: login.php");
        exit();
    }
}



// Include your database configuration or establish the database connection here if it's not already done
// ...

function getBorrowedBooks($userId, $conn) {
    // Fetch borrowed books for a specific user from the database
    $borrowedBooks = array();

    // Prepare and execute the query to retrieve borrowed books for the given user ID
    $query = "SELECT book, category, date_returned FROM clienttbl WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    // If there are results, fetch and store them in the $borrowedBooks array
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $borrowedBooks[] = $row;
        }
    }

    // Close the prepared statement and return the fetched borrowed books
    $stmt->close();
    return $borrowedBooks;
}

// function.php

// Include database configuration if required
// ...

// Function to get the last user ID
function getLastUserId($connection) {
    $lastUserId = null;
    
    // Assuming 'registrationtbl' is the table name and 'reg_id' is the column name for user ID
    $query = "SELECT reg_id FROM registrationtbl ORDER BY reg_id DESC LIMIT 1";
    $result = $connection->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastUserId = $row['reg_id'];
    }

    return $lastUserId;
}




// Other functions...
?>



