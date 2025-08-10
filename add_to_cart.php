<?php
include("includes/db.connection.php");
session_start();

// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'] ?? 'add'; // Default action is add
    $product_id = $_POST['product_id'];

    if ($action === 'add') {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        // Check if the product is already in the cart
        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $product_id) {
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }

        // If not found, add new product
        if (!$found) {
            $_SESSION['cart'][] = [
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price,
                'quantity' => 1
            ];
        }

        // Set success message in session
        $_SESSION['message'] = "Successfully added to the cart";

    } elseif ($action === 'remove') {
        // Remove item from cart
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $product_id) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
        // Reindex array
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// Redirect back
header("Location: home.php");
exit();
