<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/admin_style.css">
</head>
<body>
    <div class="hero">
        <nav>
            <img src="style/images/logos.png" class="user-pic" onclick="toggleon()">
            <div class="back" id="backOn">
                <div class="home">
                    <div class="out">
                        <img src="style/images/logos.png">
                        <h2>ADMIN</h2>
                    </div>
                    <hr>
                    <a href="#" class="Homedashbord" onclick="refreshPage()">
                        <img src="style/images/home-removebg-preview.png">
                        <p>Userlist</p>
                    </a>
                    <a href="logout.php" class="Logout">
                        <img src="style/images/logout.png">
                        <p>Logout</p>
                    </a>
                </div>
            </div>
        </nav>

        <table class="First" id="userTable">
            <tr>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>LastName</th>
                <th>Type</th>
                <th>Date Appointed</th>
                <th>Book</th>
                <th>Category</th>
                <th>Date Returned</th>
            </tr>



            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointmentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching data from tables
$query = "SELECT registrationtbl.firstName, registrationtbl.middleName, registrationtbl.lastName, appointmenttbl.type, appointmenttbl.date_appointed, clienttbl.book, clienttbl.category, clienttbl.date_returned 
FROM registrationtbl 
INNER JOIN clienttbl ON registrationtbl.reg_id = clienttbl.reg_id 
INNER JOIN appointmenttbl ON clienttbl.user_id = appointmenttbl.user_id";
            
$result = mysqli_query($conn, $query);

// Displaying data in table rows
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstName'] . "</td>";
    echo "<td>" . $row['middleName'] . "</td>";
    echo "<td>" . $row['lastName'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['date_appointed'] . "</td>";
    echo "<td>" . $row['book'] . "</td>";
    echo "<td>" . $row['category'] . "</td>";
    echo "<td>" . $row['date_returned'] . "</td>";
    echo "</tr>";
}
?>
        </table>

        <script src="style/js/jquery-3.7.1.js"></script>
        <script src="style/js/bootstrap.bundle.min.js"></script>
        <script>
            let backOn = document.getElementById("backOn");

            function toggleon() {
                backOn.classList.toggle("open-menu");
            }

            function refreshPage() {
                location.reload(true);
            }
        </script>
    </body>
</html>
