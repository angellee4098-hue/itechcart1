<?php
include("includes/db.connection.php");
session_start();

// Ensure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Check if required parameters exist
if (isset($_GET['id']) && isset($_GET['action'])) {
    $product_id = trim($_GET['id']); // Remove any accidental spaces
    $action = $_GET['action'];

    foreach ($_SESSION['cart'] as $key => $item) {
        // Loose comparison so "5" matches 5, "P005" matches P005 exactly
        if ($item['id'] == $product_id) {
            if ($action === 'increase') {
                $_SESSION['cart'][$key]['quantity'] = (int)$_SESSION['cart'][$key]['quantity'] + 1;
            } elseif ($action === 'decrease') {
                // Ensure quantity does not go below 1
                if ($_SESSION['cart'][$key]['quantity'] > 1) {
                    $_SESSION['cart'][$key]['quantity'] = (int)$_SESSION['cart'][$key]['quantity'] - 1;
                } else {
                    // If quantity is 1, remove the product
                    unset($_SESSION['cart'][$key]);
                }
            }
            break; // Stop loop after finding the product
        }
    }
}

// Redirect back to cart
header("Location: cart.php");
exit();