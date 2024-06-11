<?php

session_start();

if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
   content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>session-cart.php</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
crossorigin="anonymous">

  </head>
  <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://static.vecteezy.com/system/resources/previews/011/644/556/original/pixel-art-background-with-rocket-flying-in-night-sky-with-clouds-background-for-8bit-game-vector.jpg");
            background-color: #000;
            background-size: cover;
            background-repeat: repeat;
            font-family: 'Arcade', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .navbar {
            background-color: transparent !important; 
            border-bottom: none;
        }

    </style>
  <body>

  <?php

$current_page = basename($_SERVER['PHP_SELF']);

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="products.php"><?php
  echo "{$_SESSION['first_name']} {$_SESSION['last_name']}";
  ?></a>
  <button class="navbar-toggler" type="button" 
data-toggle="collapse" 
data-target="#navbarNav" 
aria-controls="navbarNav" 
aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link <?php echo $current_page == 'cart.php' ? 'active' : ''; ?>" href="cart.php">Cart</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link <?php echo $current_page == 'logout.php' ? 'active' : ''; ?>" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>  

<div class="bg-img bg-cover" style="background-image: url('cart.png'); height:100vh; width:100vw;">
    
</body>
</html>