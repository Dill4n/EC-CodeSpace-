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
        <a class="nav-link <?php echo $current_page == 'cart.php' ? 'active' : ''; ?>" href="cart.php">Cart</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link <?php echo $current_page == 'logout.php' ? 'active' : ''; ?>" href="logout.php">Read</a>
      </li>
    </ul>
  </div>
</nav>  


    
</body>
</html>