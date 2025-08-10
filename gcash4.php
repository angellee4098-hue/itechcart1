<?php
// Start session if needed (optional for now)
// session_start();

// --- DB CONNECTION ---
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itechcart";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$delivery_start = date("Y-m-d", strtotime("+2 days"));
$delivery_end   = date("Y-m-d", strtotime("+5 days"));

// --- INSERT DIRECT TO DATABASE ---
$sql = "INSERT INTO gcash_order_number ( delivery_start, delivery_end) 
        VALUES ( ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $delivery_start, $delivery_end);

if ($stmt->execute()) {
    $order_id = $conn->insert_id;
} else {
    $order_id = null;
}

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Payment Success</title>
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px 15px;
      min-height: 100vh;
    }

    .success-container {
      max-width: 500px;
      width: 100%;
      text-align: center;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    .check-icon {
      font-size: 48px;
      color: #27ae60;
      margin-bottom: 10px;
    }

    .status {
      font-size: 20px;
      font-weight: bold;
      color: #27ae60;
      margin-bottom: 10px;
    }

    .order-number {
      font-size: 16px;
      margin-bottom: 20px;
      color: #555;
    }

    .delivery-info {
      text-align: left;
      font-size: 15px;
      margin-bottom: 20px;
    }

    .delivery-info strong {
      color: #333;
    }

    .calendar {
      color: #d35400;
      font-weight: bold;
      margin-top: 5px;
      display: block;
    }

    .view-order-btn {
      display: inline-block;
      margin-top: 10px;
      padding: 12px 20px;
      background: #f26522;
      border: 1px solid #e67e22;
      color: #fff;
      font-weight: bold;
      border-radius: 6px;
      text-decoration: none;
    }

    .view-order-btn:hover {
      background-color:#d35400;
    }

    .footer {
      margin-top: 25px;
      font-size: 13px;
      color: #999;
    }

    @media (max-width: 480px) {
      .success-container {
        padding: 15px;
      }

      .status {
        font-size: 18px;
      }

      .order-number,
      .delivery-info {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <div class="success-container">
    <div class="check-icon">✔️</div>
    <div class="status">Payment Success</div>
    <div class="order-number">
      <?php 
      if ($order_id) {
          echo "Order # " . htmlspecialchars($order_id);
      } else {
          echo "Order number not available.";
      }
      ?>
    </div>

    <div class="delivery-info">
      <strong>Your Delivery Dates:</strong><br>
      Est. <?php echo htmlspecialchars($delivery_start . ' - ' . $delivery_end); ?>
    </div>

    <a href="home.php" class="view-order-btn">Go Back to Shop</a>

    <div class="footer">
      That’s it! Your item purchase is already paid. Now you just have to wait for your delivery to arrive.
    </div>
  </div>

</body>
</html>