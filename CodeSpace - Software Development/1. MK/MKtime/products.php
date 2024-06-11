<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Kontinuum</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arcade&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://i.redd.it/pgulpqku4br81.gif");
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

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-direction: column;
            margin-top: 20px;
        }

        .center-container img {
            height: 100px;
        }

        .products-container {
            display: flex;
            margin-left: 10%;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .products-container .card {
            margin: 10px;
        }

        .desktop-only {
            display: none;
        }

        .mobile-only {
            display: block;
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
            .center-container {
                transform: scale(0.5); 
                transform-origin: center;
    }
}
    </style>
</head>

<body>
    
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="MK.php">
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

<div class="center-container">
    <img src="MKproductslogo.png" alt="Logo">
</div>

<div class="products-container">
    <?php
    # Open database connection.
    require('connect_db.php');
    echo '<div class="row">';    
    # Retrieve items from 'products' database table.
    $q = "SELECT * FROM products";
    $r = mysqli_query($link, $q);
    if (mysqli_num_rows($r) > 0) {
        # Display body section.
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '
            <div class="col-md-4 justify-content-center">
                <div class="card" style="width: 18rem; background: transparent; border-color: #fff;">
                    <img src="' . $row['item_img'] . '" class="card-img-top" alt="' . $row['item_name'] . '">
                    <div class="card-body text-center" style="color: #fff;">
                        <h5 class="card-title">' . $row['item_name'] . '</h5>
                        <p class="card-text">' . $row['item_desc'] . '</p>
                    </div>
                    <div class="card-footer bg-transparent border-dark text-center" style="border-color: #fff;">
                        <p class="card-text">&pound ' . $row['item_price'] . '</p>
                    </div>
                    <div class="card-footer text-muted" style="background: transparent; border-color: #fff;">
                        <a href="added.php?id=' . $row['item_id'] . '" class="btn btn-light btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>';
        }
        # Close database connection.
        mysqli_close($link);
    } else {
        echo '<p>There are currently no items in the table to display.</p>';
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>