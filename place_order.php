<?php
include("includes/db.connection.php");
session_start();

if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}

// Sanitize & assign POST data safely with null coalescing
$fullname       = trim($_POST['fullname'] ?? '');
$address        = trim($_POST['address'] ?? '');
$payment_method = trim($_POST['payment_method'] ?? '');
$shipping_fee   = floatval($_POST['shipping_fee'] ?? 0);
$discount       = floatval($_POST['discount'] ?? 0);
$grand_total    = floatval($_POST['grand_total'] ?? 0);
$total_amount   = floatval($_POST['total_amount'] ?? 0);

if (empty($fullname) || empty($address) || empty($payment_method)) {
    die("Error: Please fill in all required fields.");
}

$order_date = date('Y-m-d H:i:s');

// Prepare insert statement with all needed fields
$sql = "INSERT INTO orders (fullname, address, payment_method, shipping_fee, discount, grand_total, total_amount, order_date) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Prepare failed: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssdddss", $fullname, $address, $payment_method, $shipping_fee, $discount, $grand_total, $total_amount, $order_date);

if (!mysqli_stmt_execute($stmt)) {
    die("Error placing order: " . mysqli_error($conn));
}

$order_id = mysqli_insert_id($conn);

// Insert each cart item into order_items table
foreach ($_SESSION['cart'] as $item) {
    $price = floatval(str_replace(',', '', $item['price']));
    $sql_item = "INSERT INTO order_items (order_id, product_name, price, quantity) 
                 VALUES (?, ?, ?, ?)";
    $stmt_item = mysqli_prepare($conn, $sql_item);
    if (!$stmt_item) {
        die("Prepare failed (order_items): " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt_item, "isdi", $order_id, $item['name'], $price, $item['quantity']);
    mysqli_stmt_execute($stmt_item);
    mysqli_stmt_close($stmt_item);
}

// Clear the cart after order is placed
unset($_SESSION['cart']);
mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0; padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .confirmation-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 480px;
            width: 90%;
            animation: fadeIn 0.5s ease-in-out;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #555;
            margin: 12px 0;
        }
        b {
            color: #000;
        }
        a.go-back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #f26522;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        a.go-back-btn:hover {
            background: #d35400;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <h2>Order Placed Successfully!</h2>
        <p>Your Order ID: <b><?= htmlspecialchars($order_id) ?></b></p>
        <p><b>Delivery Address:</b><br /><?= nl2br(htmlspecialchars($address)) ?></p>
        <p>Total Amount: ₱<?= number_format($grand_total, 2) ?></p>
        <p>Thank you for shopping with us! Your order will be processed soon.</p>
        <a href="home.php" class="go-back-btn">Go Back to Shop</a>
    </div>
</body>
</html>
