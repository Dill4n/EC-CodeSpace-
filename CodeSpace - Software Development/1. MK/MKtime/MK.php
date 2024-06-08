<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Kontinuum {MK}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/originals/8e/46/15/8e46150f790fbefe438d9c2767c32ad1.gif');
            background-color: #000;
            font-family: 'Arcade', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .navbar {
            color: black;

        }
        
        .container {
            padding: 20px;
        }

        
        .MKlogo {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10; /* Ensure logo is on top */
        }

       
        .MKphrase {
            position: absolute;
            top: 50%;
            left: 56%;
            transform: translate(-50%, 50%); /* Positioning it just below the logo */
            z-index: 10;
        }

        
        .solar-system {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            height: 1000px;
        }

        
        .MKwatch {
            position: absolute;
            width: 150px;
            height: 150px;
            border-radius: 50%; /* Circular images */
        }

        
        .MKwatch1 {
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .MKwatch2 {
            top: 40%;
            left: 90%;
            transform: translate(-50%, -50%);
        }
        .MKwatch3 {
            top: 70%;
            left: 20%;
            transform: translate(-50%, -50%);
        }
        .MKwatch4 {
            top: 30%;
            left: 10%;
            transform: translate(-50%, -50%);
        }
        .MKwatch5 {
            top: 65%;
            left: 60%;
            transform: translate(-50%, -50%);
        }
        .MKwatch6 {
            top: 80%;
            left: 40%;
            transform: translate(-50%, -50%);
        }
		
		.MKsidearm {
		    position: absolute;
            left: 60%;
            
		    }
    </style>
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




    <img class="MKlogo" src="MK logo.png" alt="MK logo">

    
    <img class="MKphrase" src="MKphrase.png" alt="MK phrase">

    
    <div class="solar-system">

        <img class="solar-system" src="MKsolarsystem.png">
        
        <img class="MKwatch MKwatch1" src="MKwatch1.png" alt="MK Watch 1">
        <img class="MKwatch MKwatch2" src="MKwatch2.png" alt="MK Watch 2">
        <img class="MKwatch MKwatch3" src="MKwatch3.png" alt="MK Watch 3">
        <img class="MKwatch MKwatch4" src="MKwatch4.png" alt="MK Watch 4">
        <img class="MKwatch MKwatch5" src="MKwatch5.png" alt="MK Watch 5">
        <img class="MKwatch MKwatch6" src="MKwatch6.png" alt="MK Watch 6">
    </div>
    
	<div class="MKsidearm" src="CDWatch13arm.png" alt="MKsidearm">
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
