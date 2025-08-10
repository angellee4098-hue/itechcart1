<?php
include("includes/db.connection.php");
session_start();

// Ensure cart exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function sanitize_price($price) {
    return (float) str_replace(',', '', $price);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iTech Cart</title>
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #fdfbfb, #ebedee);
            font-family: "Poppins", "Segoe UI", sans-serif;
            color: #333;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container.layout_padding {
            padding-top: 40px;
            padding-bottom: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            max-width: 1000px;
        }
        h1.fashion_taital {
            text-align: center;
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
            font-size: 2.2rem;
        }
        table {
            background: white;
            border-radius: 12px;
            overflow: hidden;
        }
        thead {
            background: linear-gradient(135deg, #2c3e50, #4b6584);
            color: white;
            text-transform: uppercase;
            font-size: 0.85rem;
        }
        tbody td {
            padding: 12px;
            vertical-align: middle;
            border-bottom: 1px solid #eee;
        }
        tbody tr:hover {
            background-color: #fdfdfd;
        }
        .btn-danger {
            background-color: #ff6b6b;
            border: none;
            padding: 6px 10px;
            border-radius: 6px;
        }
        .btn-danger:hover {
            background-color: #e63946;
        }
        .btn-lg {
            background: linear-gradient(135deg, #ff914d, #ff6f3c);
            border: none;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
        }
        .btn-lg:hover {
            background: linear-gradient(135deg, #ff6f3c, #ff914d);
        }
        .total-price {
            font-weight: 700;
            font-size: 1.5rem;
            margin-top: 20px;
            color: #2c3e50;
        }
    </style>
</head>
<body>
<div class="container layout_padding">
    <h1 class="fashion_taital">Your Shopping Cart</h1>
    <a href="home.php" class="btn btn-outline-dark mb-3">⬅ Back to Shop</a>

    <?php if (empty($_SESSION['cart'])): ?>
        <div class="alert alert-warning text-center">
            Your cart is empty. 
            <a href="home.php" class="btn btn-primary">Continue Shopping</a>
        </div>
    <?php else: ?>
        <form action="checkout.php" method="post">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['cart'] as $item): 
                    $price = sanitize_price($item['price']);
                    $itemTotal = $price * $item['quantity'];
                ?>
                    <tr>
                        <td>
                            <input type="checkbox" class="item-check" 
                                   data-total="<?= $itemTotal ?>" 
                                   name="selected_items[]" 
                                   value="<?= htmlspecialchars($item['id']); ?>">
                        </td>
                        <td><?= htmlspecialchars($item['name']); ?></td>
                        <td>₱<?= number_format($price, 2); ?></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="increase_cart.php?id=<?= urlencode($item['id']); ?>&action=decrease" 
                                   class="btn btn-outline-danger btn-sm">−</a>
                                <span class="px-2"><?= (int) $item['quantity']; ?></span>
                                <a href="increase_cart.php?id=<?= urlencode($item['id']); ?>&action=increase" 
                                   class="btn btn-outline-success btn-sm">+</a>
                            </div>
                        </td>
                        <td>₱<?= number_format($itemTotal, 2); ?></td>
                        <td>
                            <a href="remove_from_cart.php?id=<?= urlencode($item['id']); ?>" 
                               class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-right total-price">
                Total: ₱<span id="selectedTotal">0.00</span>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-lg">Proceed to Checkout</button>
            </div>
        </form>
    <?php endif; ?>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    // Live update total when selecting checkboxes
    // Live update total when selecting checkboxes
    document.querySelectorAll('.item-check').forEach(chk => {
        chk.addEventListener('change', updateTotal);
    });

    function updateTotal() {
        let total = 0;
        document.querySelectorAll('.item-check:checked').forEach(chk => {
            total += parseFloat(chk.dataset.total);
        });
        // Format with commas and two decimals
        document.getElementById('selectedTotal').textContent = total
            .toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }
</script>
</body>
</html>