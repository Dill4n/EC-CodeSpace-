<?php

session_start();

if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
?>

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user_name'] = $_POST['user_name'];
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session 01</title>
</head>
<body>
    <?php
    if (isset($_SESSION['user_name'])) {
        echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user_name']) . "!</h2>";
    } else {
        ?> 
        <form method ='POST'>
            <label for='user_name'>Enter your name:</label>
                <input type='text' name='user_name' id='user_name' required>
                <button type='submit'>Submit</button>
    </form>
    <?php
    }
?>
</body>
</html>