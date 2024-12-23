<?php
// Get customer_id, booking_id, and phone from the URL
$customer_id = isset($_GET['customer_id']) ? $_GET['customer_id'] : '';
$booking_id = isset($_GET['booking_id']) ? $_GET['booking_id'] : '';
$phone = isset($_GET['phone']) ? $_GET['phone'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #2e7d32;
        }

        label {
            font-size: 16px;
            color: #333;
        }

        input[type="tel"], input[type="text"] {
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
            width: 80%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        button {
            font-size: 16px;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        #pay-button {
            background-color: #28a745;
            color: white;
        }

        #pay-button:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        #cancel-button {
            background-color: #d9534f;
            color: white;
        }

        #cancel-button:hover {
            background-color: #c9302c;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h2>Payment for E-Waste Pickup Service</h2>

    <!-- Customer ID Input -->
    <label for="customer_id">Customer ID:</label>
    <input type="text" id="customer_id" name="customer_id" value="<?php echo htmlspecialchars($customer_id); ?>" readonly>
    <br><br>

    <!-- Phone Number Input -->
    <label for="phone">Enter Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" placeholder="Enter your phone number" required>
    <br><br>

    <!-- Payment Button -->
    <button id="pay-button">Proceed to Payment</button>
    <button id="cancel-button" onclick="window.location.href='dashboard.php'">Cancel the Payment</button>

    <!-- Razorpay Checkout Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    const customerId = "<?php echo $customer_id; ?>";
    const bookingId = "<?php echo $booking_id; ?>";
    const phone = "<?php echo $phone; ?>";

    const options = {
        "key": "rzp_test_M4Rj9q5WEASxhG", // Replace with your Razorpay key
        "amount": "10000", // Amount in paise (e.g., ₹100.00 = 10000)
        "currency": "INR",
        "name": "E-Waste Facility Locator",
        "description": "Payment for E-Waste Pickup Service",
        "handler": function (response) {
            // Show success alert
            alert("Payment Successful! Razorpay Payment ID: " + response.razorpay_payment_id);

            // Send payment details to the server
            fetch('updatepaymentstatus.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    razorpay_payment_id: response.razorpay_payment_id,
                    booking_id: bookingId,
                    customer_id: customerId
                })
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert('Payment successfully recorded.');
                        window.location.href = 'dashboard.php';
                    } else {
                        alert('Payment successful, but failed to update the status. Please contact support.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating the payment status. Please try again.');
                });
        },
        "prefill": {
            "contact": phone // Prefill the user's phone number
        },
        "theme": {
            "color": "#528ff0"
        }
    };

    // Add Event Listener to the Payment Button
    document.getElementById("pay-button").addEventListener("click", function () {
        // Get the user-entered phone number
        var phoneInput = document.getElementById("phone").value;

        // Validate the phone number
        if (!phoneInput || phoneInput.length < 10 || phoneInput.length > 15) {
            alert("Please enter a valid phone number.");
            return;
        }

        // Update the prefill contact field dynamically
        options.prefill.contact = phoneInput;

        // Initialize and open the Razorpay payment gateway
        var rzp1 = new Razorpay(options);
        rzp1.open();
    });
</script>

</body>
</html>
