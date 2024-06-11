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
    background-image: url('https://i.pinimg.com/originals/8e/46/15/8e46150f790fbefe438d9c2767c32ad1.gif');
    background-color: #000;
    font-family: 'Arcade', Tahoma, Geneva, Verdana, sans-serif;
    color: #fff;
}

.navbar {
    background-color: black;
}

.container {
    padding: 20px;
}

.MKtime-center {

    .MKlogo {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
}

.MKphrase {
    position: absolute;
    top: 50%;
    left: 56%;
    transform: translate(-50%, 50%);
    z-index: 10;
}

.solar-system {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1000px;
    height: 1000px;
    z-index: 2;
}


.MKwatch {
    position: absolute;
    width: 80px;
    height: 80px;
    border-radius: 50%;
}

}

.MKlogo {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
}

.MKphrase {
    position: absolute;
    top: 50%;
    left: 56%;
    transform: translate(-50%, 50%);
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
    width: 80px;
    height: 80px;
    border-radius: 50%;
}

.MKwatch1 {
    top: 28%;
    left: 35%;
    transform: translate(-50%, -50%);
}

.MKwatch2 {
    top: 43%;
    left: 73%;
    transform: translate(-50%, -50%);
}

.MKwatch3 {
    top: 50%;
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
    top: 62%;
    left: 40%;
    transform: translate(-50%, -50%);
}

.MKsidearm {
    position: absolute;
    top: 49%;
    left: 87%;
    transform: translate(-50%, -50%);
    width: 900px;
    height: 900px;
}

.MKsidewatch {
    position: absolute;
    top: 50%;
    right: 57%;
    transform: translate(-50%, -50%);
    width: 800px;
    height: 800px;
}

.side-solar {
    position: relative;
    left: 5%;
    width: 300px;
    height: 900px;
    margin: 0;
}

.side-solar-order {
    position: absolute;
    width: 300px;
    height: 100px;
    border-radius: 50%;
    z-index: 7;
    left: 10%;
    display: flex;
    align-items: center;
    flex-direction: row;
}

.side-solar1 {
    top: 5%;
}

.side-solar2 {
    top: 20%;
}

.side-solar3 {
    top: 35%;
}

.side-solar4 {
    top: 50%;
}

.side-solar5 {
    top: 65%;
}

.side-solar6 {
    top: 80%;
}

.side-solar-order img {
    margin-right: 10px;
}

.side-solar-order span {
    color: #fff;
}

.desktop-only {
    display: none;
}

.mobile-only {
    display: none;
}

@media (min-width: 992px) {
    .desktop-only {
        display: block;
    }

    .mobile-only {
        display: none;
    }
}


@media (max-width: 768px) {
    .MKtime-center {
        position: relative;
    margin-top: 50%;
    margin-bottom: 150px;
    transform: scale(0.4); 
    transform-origin: center top; 
    }

    .MKlogo {
        margin-top: -30%;
    }
    .MKphrase,
    .solar-system,
    .MKwatch {
        width: auto; 
        
    }
    .mobile-only {
                display: flex; 
                flex-direction: column; 
                align-items: center; 
                margin-top: 50px; 
            }

            .side-solar-order {
                margin-bottom: 10px; 
            }

            .side-solar-order img {
                width: 50px;
                height: auto; 
                margin-bottom: 10px;
                margin-top: 350px; 
                
            }

            .side-solar-order span {
                font-size: 14px; 
                color: #fff; 
                margin-bottom: 10px;
                margin-top: 350px;
            }
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

    <div class="MKtime-center">
        <img class="MKlogo" src="MK logo.png" alt="MK logo">
        <div class="solar-system">
            <img class="solar-system" src="MKsolarsystem.png">
            
            <img class="MKwatch MKwatch1" src="MKwatch1.png" alt="MK Watch 1">
            <img class="MKwatch MKwatch2" src="MKwatch2.png" alt="MK Watch 2">
            <img class="MKwatch MKwatch3" src="MKwatch3.png" alt="MK Watch 3">
            <img class="MKwatch MKwatch4" src="MKwatch4.png" alt="MK Watch 4">
            <img class="MKwatch MKwatch5" src="MKwatch5.png" alt="MK Watch 5">
            <img class="MKwatch MKwatch6" src="MKwatch6.png" alt="MK Watch 6">
            <img class="MKphrase" src="MKphrase.png" alt="MK phrase">
        </div>
    </div>


<div class="desktop-only">

<img class="MKsidearm" src="CDWatch13arm.png" alt="MKsidearm">

<div class="MKtime-left">
        <img class="MKsidewatch" src="CDwatchfull-removebg-preview.png" alt="MKsidewatch">
        <div class="side-solar">
            <a href="MK.php">
                <div class="side-solar-order side-solar1">
                    <img src="3611336910 (1).gif" alt="MK Watch 1">
                    <span>Home</span>
                </div>
            </a>
            <a href="products.php">
                <div class="side-solar-order side-solar2">
                    <img src="4033558940.gif" alt="MK Watch 2">
                    <span>Products</span>
                </div>
            </a>
            <a href="login.php">
                <div class="side-solar-order side-solar3">
                    <img src="2115375466.gif" alt="MK Watch 3">
                    <span>Login</span>
                </div>
            </a>
            <a href="register.php">
                <div class="side-solar-order side-solar4">
                    <img src="3611336910 (3).gif" alt="MK Watch 4">
                    <span>Register</span>
                </div>
            </a>
            <a href="about.php">
                <div class="side-solar-order side-solar5">
                    <img src="2984368225.gif" alt="MK Watch 5">
                    <span>About Us</span>
                </div>
            </a>
            <a href="cart.php">
                <div class="side-solar-order side-solar6">
                    <img src="3611336910.gif" alt="MK Watch 6">
                    <span>My Cart</span>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="mobile-only">
        
        <a href="products.php" class="side-solar-order side-solar2">
            <img src="4033558940.gif" alt="MK Watch 2">
            <span>Products</span>
        </a>
        <a href="login.php" class="side-solar-order side-solar3">
            <img src="2115375466.gif" alt="MK Watch 3">
            <span>Login</span>
        </a>
        <a href="register.php" class="side-solar-order side-solar4">
            <img src="3611336910 (1).gif" alt="MK Watch 3">
            <span>Register</span>
        </a>
       
        <a href="about.php" class="side-solar-order side-solar5">
            <img src="2984368225.gif" alt="MK Watch 3">
            <span>About Us</span>
        </a>
    </div>




</body>

</html>
