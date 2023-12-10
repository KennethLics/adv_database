<?php
include 'function.php';

// Check if the user is logged in
checkLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/style_about_us_main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
  <div class="container">
    <a class="navbar-brand" href="navbar.php"><img src="style/images/logos.png" alt="" height="170"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="navbar.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us_main.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="books.php">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  <style>
    .navbar-light .navbar-nav .nav-link{
    color:black;
    font-family: cursive;
    font-size: 18px;
    text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .navbar-light .navbar-nav .nav-link::after{
    content: '';
    background-color: gray;
    height: 2px;
    width: 100%;
    display: block;
    opacity: 0;
    }
    .navbar-light .navbar-nav .nav-link:hover::after{
    opacity: 1;
    }
    .navbar-light .navbar-brand{
    color:black;
    font-size: 50px;
    }
  </style>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="heading">
        <h1>About Us</h1>
        <p>“Reality doesn’t always give us the life that we desire, but we can always find what we desire between the pages of books.”
―Adelise M. Cullens</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="style/images/librarybooks.jpg">
            </div>
            <div  class="about-content">
                <h2>"Escape, Dream, Learn, within Pages"</h2>
                <p>We are passionate about connecting readers with the books they love.
                 Our mission is to provide a convenient and accessible platform for book enthusiasts to discover, 
                 borrow, and share their favorite reads.We invite you to become a part of our literary community. 
                 Borrow a book, share your thoughts, and connect with fellow readers. 
                 Your feedback and suggestions are valuable to us as we strive to continually improve our service.</p>           
            </div>
        </section>
    </div>
    <br>
    <br>
    
    <!----script---->
    <script src="style/js/bootstrap.bundle.min.js"></script>
    <script src="style/js/jquery-3.7.1.js"></script>
</body>
</html>