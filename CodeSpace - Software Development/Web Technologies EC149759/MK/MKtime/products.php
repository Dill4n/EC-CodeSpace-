<?php
# Open database connection.
	require ( 'connect_db.php' );
	echo '<div class="row">';	
	# Retrieve items from 'products' database table.
	$q = "SELECT * FROM products" ;
	$r = mysqli_query( $link, $q ) ;
	if ( mysqli_num_rows( $r ) > 0 )
	{
	# Display body section.
	
	while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
	{
	echo '
    <div class="col-md-3  justify-content-center">
	 <div class="card" style="width: 18rem; background: transparent; border-color: #fff;">
	  <img src="'. $row['item_img'].'" class="card-img-top" alt="'. $row['item_name'].'">
	   <div class="card-body text-center" style="color: #fff;">
		<h5 class="card-title">'. $row['item_name'].'</h5>
		<p class="card-text">'. $row['item_desc'].'</p>
	 </div>
	  <div class="card-footer bg-transparent border-dark text-center" style="border-color: #fff;">
		<p class="card-text">&pound '. $row['item_price'].'</p>
	  </div>
	  <div class="card-footer text-muted" style="background: transparent; border-color: #fff;">
		<a href="added.php?id='.$row['item_id'].'" class="btn btn-light btn-block">Add to Cart</a>
	   </div>
	  </div>
	</div>  
	';
	}
	# Close database connection.
	mysqli_close( $link) ; 
	}
	# Or display message.
	else { echo '<p>There are currently no items in the table to display.</p>
	' ; }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Kontinuum</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Import the Arcade font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arcade&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://i.pinimg.com/originals/8e/46/15/8e46150f790fbefe438d9c2767c32ad1.gif");
            background-color: #000;
            background-size: cover;
            background-repeat: repeat;
            /* Use the Arcade font */
            font-family: 'Arcade', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .container-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .center-container {
            position: relative;
        }

        .center-container img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            height: 100px; /* Adjust as needed */
        }

        .circle-layout {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            height: 300px; /* Adjust as needed */
            width: 300px; /* Adjust as needed */
            position: relative;
            border-radius: 50%; /* Make the layout circular */
            margin: auto;
        }

        .circle-layout img {
            object-fit: cover;
            width: 100px; /* Adjust as needed */
            height: 100px; /* Adjust as needed */
            border-radius: 50%; /* Make images circular */
            position: absolute;
        }

        /* Position images around the container */
        .circle-layout img:nth-child(1) {
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .circle-layout img:nth-child(2) {
            top: 50%;
            left: 100%;
            transform: translate(-50%, -50%);
        }

        .circle-layout img:nth-child(3) {
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        .circle-layout img:nth-child(4) {
            top: 50%;
            left: 0;
            transform: translate(50%, -50%);
        }

        /* Additional positions for more images */
        .circle-layout img:nth-child(5) {
            top: 25%;
            left: 25%;
            transform: translate(-50%, -50%);
        }

        .circle-layout img:nth-child(6) {
            top: 25%;
            left: 75%;
            transform: translate(-50%, -50%);
        }

        .circle-layout img:nth-child(7) {
            bottom: 25%;
            left: 25%;
            transform: translate(-50%, 50%);
        }

        .circle-layout img:nth-child(8) {
            bottom: 25%;
            left: 75%;
            transform: translate(-50%, 50%);
        }
    </style>
</head>

<body>
    <div class="container-center">
        <div class="center-container">
            <!-- Central logo -->
            <img src="MKproductslogo.png" alt="Logo">

    </div>
           
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>