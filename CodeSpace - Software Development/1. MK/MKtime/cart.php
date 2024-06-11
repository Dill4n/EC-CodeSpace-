<?php
include ('session-cart.php');

# Check if form has been submitted for update.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # Update changed quantity field values.
    foreach ($_POST['qty'] as $item_id => $item_qty) {
        # Ensure values are integers.
        $id = (int)$item_id;
        $qty = (int)$item_qty;

        # Change quantity or delete if zero.
        if ($qty == 0) {
            unset($_SESSION['cart'][$id]);
        } elseif ($qty > 0) {
            $_SESSION['cart'][$id]['quantity'] = $qty;
        }
    }
}

# Initialise grand total variable.
$total = 0;

$html_output = ''; // Initialize HTML output variable

if (!empty($_SESSION['cart'])) {

    require('connect_db.php');
    $q = "SELECT * FROM products WHERE item_id IN (";
    foreach ($_SESSION['cart'] as $id => $value) {
        $q .= $id . ',';
    }
    $q = substr($q, 0, -1) . ') ORDER BY item_id ASC';
    $r = mysqli_query($link, $q);

    $html_output .= '<form action="cart.php" method="post"><div class="cart-items"><table>';
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        # Calculate sub-totals and grand total.
        $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
        $total += $subtotal;

        # Display the row/s:
        $html_output .= "<tr>";
        $html_output .= "<td>{$row['item_name']}</td>";
        $html_output .= "<td>&pound;{$row['item_price']}</td>";
        $html_output .= "<td><input type=\"text\" size=\"3\" name=\"qty[{$row['item_id']}]\" value=\"{$_SESSION['cart'][$row['item_id']]['quantity']}\"></td>";
        $html_output .= "<td>&pound;" . number_format($subtotal, 2) . "</td>";
        $html_output .= "</tr>";
    }

    $html_output .= '</table>';

    # Display the total.
    $html_output .= '<div class="cart-total">';
    $html_output .= '<p>Total = &pound;' . number_format($total, 2) . '</p>';
    $html_output .= '<p><input type="submit" name="submit" class="btn btn-light btn-block" value="Update My Cart"></p>';
    $html_output .= '<br><a href="checkout.php?total=' . $total . '" class="btn btn-light btn-block">Checkout Now</a><br>';
    $html_output .= '</div></div></form>';

} else {
    # Or display a message.
    $html_output .= '<p>Your cart is currently empty.</p>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file here -->
</head>

<body>

<div class="container">
    <h1>Shopping Cart</h1>

    <?php echo $html_output; ?>

</div>

</body>

</html>