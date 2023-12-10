<?php
include 'function.php';

// Check if the user is logged in
checkLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/css/style1.css">
</head>
<body>

<!----img--->
<header>
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
</nav>

    <div class="front">
      <h1>Welcome to our Book Appointment</h1>
      <p>"One glance at a book and you hear the voice of another person, 
      <br> perhaps someone dead for 1,000 years. To read is to voyage through time." 
      <br> – Carl Sagan</p>

      <style>
        .front h1{
          padding-left: 15%;
          padding-top: 13%;
          font-size: 50px;
          font-family: cursive;
          color: black;
          font-weight: bold;
        }
        .front p{
          padding-left: 27%;
          padding-top: 5%;
          font-size: 30px;
          font-weight: bold;
          font-family: 'Courier New', Courier, monospace;
        }
      </style>
    </div>

</header>


<br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car1.png">
      <img src="style/images/car1.png" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book1</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car2.jpg">
      <img src="style/images/car2.jpg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book2</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car3.jpg">
      <img src="style/images/car3.jpg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book3</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car4.jpeg">
      <img src="style/images/car4.jpeg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book4</a></div>
  </div>
  

  <style>
    div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

  </style>
</div>

<div class="clearfix"></div>

<br>
<br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car1.png">
      <img src="style/images/car1.png" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book1</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car2.jpg">
      <img src="style/images/car2.jpg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book2</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car3.jpg">
      <img src="style/images/car3.jpg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book3</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car4.jpeg">
      <img src="style/images/car4.jpeg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book4</a></div>
  </div>

  <style>
    div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

  </style>
</div>

<div class="clearfix"></div>

<br>
<br>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car1.png">
      <img src="style/images/car1.png" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book1</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car2.jpg">
      <img src="style/images/car2.jpg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book2</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car3.jpg">
      <img src="style/images/car3.jpg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book3</a></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="style/images/car4.jpeg">
      <img src="style/images/car4.jpeg" alt="Book">
    </a>
    <div class="desc"><a href="appoint.php">Book4</a></div>
  </div>
  

  <style>
    div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

  </style>
</div>

<div class="clearfix"></div>




    <!----script---->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.7.1.js"></script>
</body>
</html>
