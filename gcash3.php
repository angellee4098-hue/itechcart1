<?php
session_start();

// Check if total_amount exists in session
if (!isset($_SESSION['grand_total'])) {
    die("Invalid access. No total amount found.");
}

// Get the total amount from session
$grand_total = floatval($_SESSION['grand_total']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>GCash Confirm Payment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    .container {
      background-color: #fff;
      width: 100%;
      max-width: 400px;
      border-radius: 16px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .header {
      background-color: #0072CE;
      color: white;
      text-align: center;
      padding: 16px;
      font-size: 20px;
      font-weight: bold;
    }
    .content {
      padding: 20px;
    }
    .info {
      margin-bottom: 20px;
    }
    .info p {
      margin: 8px 0;
      font-size: 16px;
      display: flex;
      justify-content: space-between;
      font-weight: bold;
      color: #0072CE;
    }
    .consent {
      font-size: 14px;
      color: #333;
      line-height: 1.5;
      margin-bottom: 20px;
    }
    .btn {
      width: 100%;
      padding: 14px;
      background-color: #0072CE;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #005fa3;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">GCash</div>
    <div class="content">
      <div class="info">
        <p>Merchant: <span>I-TECH CART</span></p>
        <p><strong>Amount Due:</strong> ₱<?= number_format($grand_total, 2) ?></p>
      </div>
      <div class="consent">
        By confirming, I give my consent to collect, use, process, analyze and store my personal data based on prescribed retention period to facilitate my transactions and avail of GCash services.
      </div>
      <form action="gcash4.php" method="POST">
        <input type="hidden" name="grand_total" value="<?= htmlspecialchars($grand_total) ?>">
        <button type="submit" class="btn">CONFIRM</button>
      </form>
    </div>
  </div>
</body>
</html>
