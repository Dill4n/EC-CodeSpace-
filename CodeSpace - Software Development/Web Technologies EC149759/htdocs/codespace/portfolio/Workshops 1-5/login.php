<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
   content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login/Register</title>

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
  <a class="navbar-brand" href="#">Login</a>
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
        <a class="nav-link <?php echo $current_page == 'login.php' ? 'active' : ''; ?>" href="login.php">Login</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link <?php echo $current_page == 'register.php' ? 'active' : ''; ?>" href="register.php">Register</a>
      </li>
    </ul>
  </div>
</nav>  



<?php 

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>




<form action="login_action.php" method="post">
  <label for="inputemail">Email</label>
  <input type="text" 
		 name="email" 
		 class="form-control" 
		 required 
		 placeholder="* Enter Email"> 
		
  <input type="password" 
		 name="pass"  
	     class="form-control" 
		 required 
	     placeholder="* Enter Password">
		
  <input type="submit" value="Login">
</form>

