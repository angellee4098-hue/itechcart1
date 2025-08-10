<?php
session_start();

// DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itechcart";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function placeOrder($conn, $fullname, $phone, $address, $city, $postal_code, $user_id, $total) {
    // 1. Insert shipping address first
    $stmt = $conn->prepare("INSERT INTO shipping_addresses (fullname, phone, address, city, postal_code, user_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $fullname, $phone, $address, $city, $postal_code, $user_id);
    if (!$stmt->execute()) {
        return ['error' => "Error saving shipping address: " . $stmt->error];
    }
    $shipping_address_id = $stmt->insert_id;
    $stmt->close();

    // 2. Insert order with shipping_address_id
    $stmt2 = $conn->prepare("INSERT INTO orders (shipping_address_id, user_id, total) VALUES (?, ?, ?)");
    $stmt2->bind_param("iid", $shipping_address_id, $user_id, $total);
    if (!$stmt2->execute()) {
        return ['error' => "Error placing order: " . $stmt2->error];
    }
    $order_id = $stmt2->insert_id;
    $stmt2->close();

    // 3. Return order and shipping info
    return [
        'order_id' => $order_id,
        'shipping_address' => [
            'fullname' => $fullname,
            'phone' => $phone,
            'address' => $address,
            'city' => $city,
            'postal_code' => $postal_code
        ],
        'total_amount' => $total
    ];
}

// --------- MAIN LOGIC -----------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from form (validate/sanitize as needed)
    $fullname = trim($_POST['fullname'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $postal_code = trim($_POST['postal_code'] ?? '');
    $total = floatval($_POST['total'] ?? 0);
    $user_id = $_SESSION['user_id'] ?? null; // optional user ID

    if (!$fullname || !$phone || !$address || !$city || !$postal_code || $total <= 0) {
        die("Please fill all required fields and ensure total amount is valid.");
    }

    $result = placeOrder($conn, $fullname, $phone, $address, $city, $postal_code, $user_id, $total);

    if (isset($result['error'])) {
        die($result['error']);
    }

    // Prepare variables for display
    $order_id = $result['order_id'];
    $shipping = $result['shipping_address'];
    $total_amount = $result['total_amount'];

} else {
    die("Invalid request method.");
}
?>