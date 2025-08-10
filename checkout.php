<?php
include("includes/db.connection.php");
session_start();

if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $price = floatval(str_replace(',', '', $item['price']));
    $subtotal = $price * $item['quantity'];
    $total += $subtotal;
}

// Default shipping fee
$shipping_fee = 50;

// Get voucher from GET
$selected_voucher = isset($_GET['voucher']) ? $_GET['voucher'] : "";

// Default discount
$discount = 0;

// Apply voucher logic
switch ($selected_voucher) {
    case "DISCOUNT50":
        $discount = 50;
        break;
    case "DISCOUNT100":
        $discount = 100;
        break;
    case "FREESHIP":
        $shipping_fee = 0;
        break;
    case "FREESHIP50":
        $shipping_fee = 0;
        $discount = 50;
        break;
    case "FREESHIP100":
        $shipping_fee = 0;
        $discount = 100;
        break;
}

// Compute grand total
$grand_total = $total + $shipping_fee - $discount;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Checkout</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      padding: 20px;
    }
    .checkout-wrapper {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    h2 { text-align: center; color: #000; margin-bottom: 25px; }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 25px;
    }
    th, td {
      border: 1px solid #e0e0e0;
      padding: 12px;
      text-align: left;
    }
    th {
      background: #5e5e5e;
      color: white;
    }
    th:last-child, td:last-child { text-align: right; }
    label {
      font-weight: bold;
      color: #555;
      display: block;
      margin-bottom: 5px;
    }
    input, textarea, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      font-size: 14px;
      border-radius: 6px;
      border: 1px solid #ccc;
      background: #fafafa;
      transition: all 0.2s ease;
    }
    input:focus, textarea:focus, select:focus {
      outline: none;
      border-color: #f26522;
      background: #fff;
    }
    .btn {
      background: #f26522;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
      border-radius: 6px;
      width: 100%;
      transition: background 0.3s ease-in-out;
    }
    .btn:hover {
      background: #d35400;
    }
    @media (max-width: 600px) {
      .checkout-wrapper {
        padding: 20px;
      }
      table, th, td {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

<div class="checkout-wrapper">
  <h2>Checkout</h2>

  <table>
    <tr>
      <th>Product</th>
      <th>Price</th>
      <th>Qty</th>
      <th>Subtotal</th>
    </tr>
    <?php foreach ($_SESSION['cart'] as $item): 
      $price = floatval(str_replace(',', '', $item['price']));
      $subtotal = $price * $item['quantity'];
    ?>
      <tr>
        <td><?= htmlspecialchars($item['name']) ?></td>
        <td>₱<?= number_format($price, 2) ?></td>
        <td><?= $item['quantity'] ?></td>
        <td>₱<?= number_format($subtotal, 2) ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <th colspan="3" style="text-align:right;">Subtotal</th>
      <th>₱<?= number_format($total, 2) ?></th>
    </tr>
    <tr>
      <th colspan="3" style="text-align:right;">Shipping Fee</th>
      <th>₱<?= number_format($shipping_fee, 2) ?></th>
    </tr>
    <tr>
      <th colspan="3" style="text-align:right;">Discount</th>
      <th>-₱<?= number_format($discount, 2) ?></th>
    </tr>
    <tr>
      <th colspan="3" style="text-align:right;">Total</th>
      <th>₱<?= number_format($grand_total, 2) ?></th>
    </tr>
  </table>

  <!-- Voucher Selection -->
  <form method="GET" style="margin-bottom:20px;">
    <label for="voucher">Voucher Code:</label>
    <select name="voucher" id="voucher" onchange="this.form.submit()">
      <option value="">-- Select Voucher --</option>
      <optgroup label="Regular Discounts">
        <option value="DISCOUNT50" <?= $selected_voucher==="DISCOUNT50" ? "selected" : "" ?>>₱50 Off</option>
        <option value="DISCOUNT100" <?= $selected_voucher==="DISCOUNT100" ? "selected" : "" ?>>₱100 Off</option>
        <option value="FREESHIP" <?= $selected_voucher==="FREESHIP" ? "selected" : "" ?>>Free Shipping Only</option>
      </optgroup>
      <optgroup label="Free Shipping + Discount">
        <option value="FREESHIP50" <?= $selected_voucher==="FREESHIP50" ? "selected" : "" ?>>Free Shipping + ₱50 Off</option>
        <option value="FREESHIP100" <?= $selected_voucher==="FREESHIP100" ? "selected" : "" ?>>Free Shipping + ₱100 Off</option>
      </optgroup>
    </select>
    <noscript><button type="submit">Apply</button></noscript>
  </form>

  <form id="checkoutForm" method="POST" action="place_order.php">
    <label>Full Name:</label>
    <input type="text" name="fullname" required placeholder="Juan Dela Cruz" />

    <label>Address:</label>
    <textarea name="address" rows="3" required placeholder="Delivery address"></textarea>

    <label>Payment Method:</label>
    <select name="payment_method" id="paymentMethod" required>
      <option value="">-- Select Payment Method --</option>
      <option value="COD">Cash on Delivery</option>
      <option value="GCash">GCash</option>
    </select>

    <!-- Hidden inputs to pass totals to place_order.php -->
    <input type="hidden" name="shipping_fee" value="<?= $shipping_fee ?>" />
    <input type="hidden" name="discount" value="<?= $discount ?>" />
    <input type="hidden" name="grand_total" value="<?= number_format($grand_total, 2, '.', '') ?>" />
    <input type="hidden" name="total_amount" value="<?= number_format($total, 2, '.', '') ?>" />

    <button type="submit" class="btn">Place Order</button>
  </form>
</div>

<script>
  const form = document.getElementById("checkoutForm");
  const paymentMethod = document.getElementById("paymentMethod");

  form.addEventListener("submit", function(event) {
    const method = paymentMethod.value;
    if (method === "GCash") {
      form.action = "gcash1.php";
    } else {
      form.action = "place_order.php";
    }
  });
</script>

</body>
</html>
