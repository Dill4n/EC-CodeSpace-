<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register {MK}</title>
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
        <h1 class="display-4">Register</h1>
        <div class="mx-auto" style="width: 100%; max-width: 500px;">

            <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require ('connect_db.php'); 
                $errors = [];
                if (empty($_POST['first_name'])) { $errors[] = 'Enter your first name.'; }
                else { $fn = mysqli_real_escape_string($link, trim($_POST['first_name'])); }
                if (empty($_POST['last_name'])) { $errors[] = 'Enter your last name.'; }
                else { $ln = mysqli_real_escape_string($link, trim($_POST['last_name'])); }
                if (empty($_POST['email'])) { $errors[] = 'Enter your email address.'; }
                else { $e = mysqli_real_escape_string($link, trim($_POST['email'])); }
                if (empty($_POST['pass1'])) { $errors[] = 'Enter a password.'; }
                else { $p = mysqli_real_escape_string($link, trim($_POST['pass1'])); }
                if (!empty($_POST['pass1'])) {
                    if ($_POST['pass1'] != $_POST['pass2']) { $errors[] = 'Passwords do not match.'; }
                    else { $p = mysqli_real_escape_string($link, trim($_POST['pass1'])); }
                } else { $errors[] = 'Enter your password.'; }
                if (empty($errors)) {
                    $q = "SELECT user_id FROM users WHERE email='$e'";
                    $r = @mysqli_query($link, $q);
                    if (mysqli_num_rows($r) != 0) 
                        $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>';
                } 
                if (empty($errors)) {
                    $q = "INSERT INTO users (first_name, last_name, email, pass, reg_date) VALUES ('$fn', '$ln', '$e', '$p', NOW())";
                    $r = @mysqli_query($link, $q);
                    if ($r) { 
                        echo '<p>You are now registered.</p><a class="alert-link" href="login.php">Login</a>'; 
                    }
                    mysqli_close($link); 
                    exit();
                } else {
                    echo '<h4 class="alert-heading" id="err_msg">The following error(s) occurred:</h4>';
                    foreach ($errors as $msg) { echo " - $msg<br>"; }
                    echo '<p>or please try again.</p>';
                    mysqli_close($link);
                }
            }
            ?>

            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="inputfirst_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" required placeholder="* First Name" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputlast_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" required placeholder="* Last Name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputemail">Email</label>
                    <input type="email" name="email" class="form-control" required placeholder="* email@example.com" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputpass1">Create New Password</label>
                    <input type="password" name="pass1" class="form-control" required placeholder="* Create New Password" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputpass2">Confirm Password</label>
                    <input type="password" name="pass2" class="form-control" required placeholder="* Confirm Password" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Create Account Now</button>
            </form>
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