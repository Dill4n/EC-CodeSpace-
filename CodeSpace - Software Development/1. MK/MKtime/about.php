<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Kontinuum {MK}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://wallpapercave.com/wp/wp2775650.gif'); 
            background-color: #000; 
            background-size: cover; 
            background-repeat: repeat; 
            font-family: 'Arcade', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff; 
        }

        .navbar {
    background-color: transparent !important;
}
        .container {
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
			font-family: 'Arcade', sans-serif;
        }
    </style>
</head>
<body>
<?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <a class="navbar-brand" href="#">
    <img src="MK logo.png" alt="MK Logo" style="width: 80px; height: auto;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'MK.php' ? 'active' : ''; ?>" href="MK.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'products.php' ? 'active' : ''; ?>" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'register.php' ? 'active' : ''; ?>" href="register.php">Join Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
    <h1>About Us</h1>
    <p>Space. Time.. </p>
    <p1> According to Einstein, they go hand-in-hand. In fact, General relativity is known as Albert Einstein's understanding of gravity and how it affects the fabric of space-time. </p1>
    <p></p>
    <p2>Here at Mass Kontinuum, we have made it our mission to understand the fabric of space-time and wear it!</p2>
    <p3>Founded in 2024 by half-antiquesman, half-programmer Dylan Lowrie, we strive to implement Einstein and the Universe' Mind into our watches; our time-pieces..</p3>
    <p></p> 
    <p>According to Einstein, space-time goes hand-in-hand, but really, we know it goes arm-on-arm.</p>
    <h2>YOUR arm. YOUR space. YOUR time.</h2>
</div>
    
    
</body>
</html>