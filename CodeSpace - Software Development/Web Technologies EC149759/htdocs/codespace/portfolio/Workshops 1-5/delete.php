<?php
require('connect_db.php');

if (isset($_GET['item_id'])) {
    $id = $_GET['item_id'];

    
    $id = intval($id);

  
    $sql = "DELETE FROM products WHERE item_id='$id'";

   
    if ($link->query($sql) === TRUE) {       
        header("Location: read.php");
        exit(); 
    } else {
        echo "Error deleting record: " . $link->error;
    }
}

// Close the database connection

?>