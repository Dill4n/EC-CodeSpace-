<?php
include ('session-cart.php');

if (isset($_GET['total']) && ($_GET['total'] > 0) && (!empty($_SESSION['cart']))) {

    require ('connect_db.php');

    // Insert order into orders table
    $q = "INSERT INTO orders (user_id, total, order_date) VALUES (". $_SESSION['user_id'].",".$_GET['total'].", NOW())";
    $r = mysqli_query($link, $q);

    if ($r) {
        // Get the generated order_id
        $order_id = mysqli_insert_id($link);

        // Prepare to insert into order_contents table
        $q = "SELECT * FROM products WHERE item_id IN (";
        foreach ($_SESSION['cart'] as $id => $value) {
            $q .= $id . ',';
        }
        $q = substr($q, 0, -1) . ') ORDER BY item_id ASC';
        $r = mysqli_query($link, $q);

        // Insert each item into order_contents table
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            $query = "INSERT INTO order_contents (order_id, item_id, quantity, price) VALUES ($order_id, ".$row['item_id'].", ".$_SESSION['cart'][$row['item_id']]['quantity'].", ".$_SESSION['cart'][$row['item_id']]['price'].")";
            $result = mysqli_query($link, $query);
        }

        echo "<p>Thanks for your order. Your Order Number Is #".$order_id."</p>";
        $_SESSION['cart'] = NULL;
    } else {
        echo "<p>Error: Could not place order.</p>";
    }

    mysqli_close($link);
} else {
    echo '<p>Your cart is empty.</p>';
}
?>