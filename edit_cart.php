<?php
session_start();
include("includes/db.connection.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function sanitize_price($price) {
    return (float) str_replace(',', '', $price);
}

if (!isset($_GET['id'])) {
    header("Location: cart.php");
    exit();
}

$id = $_GET['id'];
$item = null;

foreach ($_SESSION['cart'] as $cartItem) {
    if ($cartItem['id'] == $id) {
        $item = $cartItem;
        break;
    }
}

if (!$item) {
    header("Location: cart.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_quantity = max(1, (int) $_POST['quantity']);
    foreach ($_SESSION['cart'] as &$cartItem) {
        if ($cartItem['id'] == $id) {
            $cartItem['quantity'] = $new_quantity;
            break;
        }
    }
    unset($cartItem); // remove reference
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Cart Item</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Offline Bootstrap -->
   
    <style>
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #0d6efd;
            padding: 15px 20px;
            border-radius: 8px;
            font-size: 1rem;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
        }
    </style>
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow-lg p-4 border-0 rounded-4">
        <h3 class="mb-4 text-primary">
         <p>✏️ Change Item Quantities</p>

        </h3>
        <form method="POST">
            <div class="info-box mb-4">
                <span class="me-4">
                    <i class="bi bi-box-seam text-dark"></i> 
                    <strong>Product:</strong> 
                    <span class="text-dark"><?php echo htmlspecialchars($item['name']); ?></span>
                </span>
                <span class="me-4">
                    <i class="bi bi-cash-coin text-success"></i> 
                    <strong>Price:</strong> 
                    <span class="text-success">₱<?php echo number_format(sanitize_price($item['price']), 2); ?></span>
                </span>
                <span>
                    <i class="bi bi-stack text-primary"></i> 
                    <strong>Quantity:</strong>
                    <input 
                        type="number" 
                        id="quantity" 
                        name="quantity" 
                        class="form-control d-inline-block w-auto border-primary text-primary ms-2" 
                        value="<?php echo (int)$item['quantity']; ?>" 
                        min="1"
                    >
                </span>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary shadow-sm me-2">
                    <i class="bi bi-check-circle"></i> Save Changes
                </button>
                <a href="cart.php" class="btn btn-outline-secondary shadow-sm">
                    <i class="bi bi-arrow-left"></i> Back to Cart
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Local Bootstrap JS -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
