<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Borrowed Books</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <style>
        /* Add your CSS styles for the borrowed books page here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include 'function.php';
            
            // Check if the user is logged in
            checkLogin();

        // Database configuration
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "appointmentdb";

        // Create a database connection
        $conn = new mysqli($host, $username, $password, $database);

        // Check the connection
        if ($conn->connect_error) {
            echo '<p class="error-message">Error: Connection failed. ' . $conn->connect_error . '</p>';
        } else {
            // Fetch borrowed books for the logged-in user
            $userId = getLastUserId($conn); // Assuming $conn is established
            if ($userId !== null) {
                $borrowedBooks = getBorrowedBooks($userId, $conn);
                if ($borrowedBooks) {
                    echo '<h1>Your Borrowed Books</h1>';
                    echo '<table>';
                    echo '<tr>
                            <th>Book</th>
                            <th>Category</th>
                            <th>Date Returned</th>
                          </tr>';
                    foreach ($borrowedBooks as $book) {
                        echo '<tr>
                                <td>' . $book['book'] . '</td>
                                <td>' . $book['category'] . '</td>
                                <td>' . $book['date_returned'] . '</td>
                              </tr>';
                    }
                    echo '</table>';
                } else {
                    echo '<p>No borrowed books found.</p>';
                }
            } else {
                echo '<p>Error: Failed to retrieve user ID.</p>';
            }
        }

        $conn->close(); // Close the database connection when done
        ?>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.7.1.js"></script>
</body>
</html>
