<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
   content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Join Us</title>

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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/Register {MK}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
	
  <div class="bg-img bg-cover" style="background-image: url('https://images6.alphacoders.com/885/885542.png'); height:100vh; width:100vw;">
    
<div>		 
		
<div class="container"> 
        <img src="JOIN_US-removebg-preview.png">
        
    </div>
  


  <div class="container text-center">
  <div class="mx-auto" style="width: 500px;">
  <h1 class="display-4">Login</h1>
  </div>
  
  
  
  <form method="post" action="process_form.php" class="row">
	<div class="col-6">
		<label for="inputEmail"  class="form-label">Email</label>
		<input type="email" class="form-control" id="inputEmail">
	</div>
		  
	<div class="col-6">
		<label for="inputPassword" class="form-label">Password</label>
		<input type="password" class="form-control" id="inputPassword">
	</div>
	<div class="d-grid gap-2">
  <br>
		<button class="btn btn-success" type="button">Submit</button>
	</div>



	  
	
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script>'login.php'</script>
  </body>
</html>

<?php 

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>

<?php
    if (isset($_SESSION['user_name'])) {
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user_name']) . "!</h2>";
    } else {
        ?> 
        <form method ='POST'>
            <label for='user_name'>Enter your username:</label>
                <input type='text' name='user_name' id='user_name' required>
                <button type='submit'>Submit</button>
    </form>
    <?php
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

