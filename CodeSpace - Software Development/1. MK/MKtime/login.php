<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login {MK}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
      body {
        background-image: url('https://images6.alphacoders.com/885/885542.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      .navbar {
        background-color: black !important;
        border: none;
      }
      .bg-img {
        background-size: cover;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding-top: 50px;
      }
      .container {
        background-color: transparent;
        padding: 20px;
        border-radius: 10px;
      }
      @media (max-width: 576px) {
        .display-4 {
          transform-origin: center;
        }
        .form-group {
          margin-bottom: 20px;
          transform-origin: center;
          margin-right: 0;
        }
        .btn-block {
          margin-right: 0;
        }
      }
    </style>
</head>
<body>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <nav class="navbar navbar-expand-lg bg-black">
      <a class="navbar-brand" href="MK.php">
        <img src="MK logo.png" alt="MK Logo" style="width: 80px; height: auto;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container text-center">
        <h1 class="display-4">Login</h1>
        <div class="mx-auto" style="width: 100%; max-width: 500px;">

                <?php 
                if (isset($errors) && !empty($errors)) {
                    echo '<p id="err_msg">Oops! There was a problem:<br>';
                    foreach ($errors as $msg) {
                        echo " - $msg<br>";
                    }
                    echo 'Please try again or <a href="register.php">Register</a></p>';
                }
                ?>

                <form action="login_action.php" method="post">
                    <div class="form-group">
                        <label for="inputemail">Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="* Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="inputpassword">Password</label>
                        <input type="password" name="pass" class="form-control" required placeholder="* Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" 
    integrity="sha384-eMNrs2pd1mQJoLAJ6boHREbo1q/UfIj69NAlnS5Z+PpRDm4BGu8PgySOqHI9D5zw" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" 
    integrity="sha384-vYY0PeNPuVSM9/w6pJg6moV3+jj9ZypzF4ycNiqby7FyjJftInC8fEj2s0Go3Kfg" 
    crossorigin="anonymous"></script>
</body>
</html>

