<?php
// Ensure the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $razorpay_payment_id = $data['razorpay_payment_id'];
    $booking_id = $data['booking_id'];
    $customer_id = $data['customer_id']; // Get customer_id from the request

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'pickup');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert payment details into the database
    $stmt = $conn->prepare("INSERT INTO updatepaymentstatus (customer_id, booking_id, razorpay_payment_id, status) VALUES (?, ?, ?, 'Completed')");
    $stmt->bind_param("sis", $customer_id, $booking_id, $razorpay_payment_id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update payment status']);
    }

    $stmt->close();
    $conn->close();
}
?>
