<?php 

# Connect  on 'localhost, username, password, database name'.

$link = mysqli_connect('localhost','root', '', 'codespace'); 

if (!$link) { 

# Otherwise fail gracefully and explain the error. 

die('Could not connect to MySQL: ' . mysqli_error()); 

} 




/* remember: <?php

require 'db_connection.php';

include 'other_file.php';

// Now you can use the $link variable, or any other variable to interact with your database
// ... can be used within any script with this function.

?>
*/
?> 
  