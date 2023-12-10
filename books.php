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
    <title>books_recommendation</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/style_books_recommendation.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent fixed-top">
<div class="container">
    <a class="navbar-brand" href="navbar.php"></a>
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


    <div class="sidebar">
        <header><img src="style/images/logos.png" alt="" height="100">CATEGORIES</header>
        <ul>
            <li><a href="#" onclick="showBooks('Adventure stories')">Adventure stories</a></li>
            <li><a href="#" onclick="showBooks('Romance')">Romance</a></li>
            <li><a href="#" onclick="showBooks('Historical fiction')">Historical fiction</a></li>
            <li><a href="#" onclick="showBooks('Crime')">Crime</a></li>
            <li><a href="appoint.php">Appoint</a></li>
        </ul>
    </div>
    <div class="books" id="Historical fiction-books" style="display: none;">
        <div class="image">
            <img src="style/images/The_Great_Gatsby_Cover_1925_Retouched.jpg">
        </div>
        <div class="title">
            <h1><a href="appoint.php">The Great Gatsby</a></h1>
        </div>
        <div class="des">
            <p>The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan.</p>
        </div>   
    </div>

    <div class="books" id="Romance-books" style="display: none;">
    <div class="image">
            <img src="style/images/fault.jpg">
        </div>
        <div class="title">
            <h1><a href="appoint.php">The Fault in Our Stars</a></h1>
        </div>
        <div class="des">
            <p>The Fault in Our Stars is a novel by John Green. It is his fourth solo novel, and sixth novel overall. It was published on January 10, 2012. </p>
        </div>   
    </div>

    <div class="books" id="Adventure stories-books" style="display: none;">
    <div class="image">
            <img src="style/images/images.jpg">
        </div>
        <div class="title">
            <h1><a href="appoint.php">The Three Musketeers by Alexandre Dumas</a></h1>
        </div>
        <div class="des">
            <p>In this classic by Dumas, a young man named d’Artagnan joins the Musketeers of the Guard. In doing so, he befriends Athos, Porthos, and Aramis — the King’s most celebrated musketeers — and embarks on a journey of his own.</p>
        </div>   
    </div>

    <div class="books" id="Crime-books" style="display: none;">
    <div class="image">
            <img src="style/images/crime.jpg">
        </div>
        <div class="title">
            <h1><a href="appoint.php">Murder on the Orient Express</a></h1>
        </div>
        <div class="des">
            <p>Murder on the Orient Express is a work of detective fiction by English writer Agatha Christie featuring the Belgian detective Hercule Poirot. It was first published in the United Kingdom by the Collins Crime Club on 1 January 1934.</p>
        </div>   
    </div>
    <!----script---->
    <script>
        function showBooks(category) {
            const bookSections = document.querySelectorAll('.books');
            bookSections.forEach(section => {
                section.style.display = 'none';
            });

            const selectedCategorySection = document.getElementById(`${category}-books`);
            if (selectedCategorySection) {
                selectedCategorySection.style.display = 'block';
            }
        }
    </script>
    <script src="style/js/bootstrap.bundle.min.js"></script>
    <script src="style/js/jquery-3.7.1.js"></script>
</body>
</html>
