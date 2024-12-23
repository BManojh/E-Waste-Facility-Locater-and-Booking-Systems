<?php
// Start the session
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'sustainability_tracker');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assume the username is stored in the session (you may implement a login system as per your needs)
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'JohnDoe';  // You can change this to match your session

// Fetch user data from the database
$query = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Define constants for rewards and carbon reduction rate
$rewards = [
    10 => "Bronze Certificate",
    20 => "Silver Certificate",
    50 => "Gold Certificate",
    100 => "Platinum Certificate"
];

$carbonReductionRate = 0.5; // kg of CO2 per kg of e-waste

// Process form submission (logging e-waste)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $weight = floatval($_POST['weight']);

    if ($product && $weight > 0) {
        // Update e-waste and carbon reduction in the database
        $newEWaste = $user['e_waste'] + $weight;
        $carbonReduction = $weight * $carbonReductionRate;

        // Update user data
        $updateQuery = "UPDATE users SET e_waste = ?, carbon_reduction = ? WHERE username = ?";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param('dds', $newEWaste, $carbonReduction, $username);
        $stmt->execute();

        // Calculate rewards based on the new e-waste amount
        $rewardsUnlocked = [];
        foreach ($rewards as $threshold => $reward) {
            if ($newEWaste >= $threshold && !in_array($reward, explode(',', $user['rewards']))) {
                $rewardsUnlocked[] = $reward;
            }
        }

        $updatedRewards = implode(',', $rewardsUnlocked);
        $updateRewardsQuery = "UPDATE users SET rewards = ? WHERE username = ?";
        $stmt = $conn->prepare($updateRewardsQuery);
        $stmt->bind_param('ss', $updatedRewards, $username);
        $stmt->execute();

        // Refresh user data
        $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
        $user = $result->fetch_assoc();

        $feedback = "Successfully logged $weight kg for $product. Carbon Reduction: $carbonReduction kg.";
    } else {
        $feedback = "Please enter valid product and weight.";
    }
} else {
    $feedback = "";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainability Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        h1, h3 {
            color: #343a40;
        }
        #userFeedback, #logFeedback, #statsFeedback {
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Sustainability Tracker</h1>

        <!-- User Information (Only after Logging) -->
        <div class="mb-4">
            <h3>Welcome, <?php echo htmlspecialchars($user['username']); ?></h3>
            <p id="logFeedback" class="text-success"><?php echo $feedback; ?></p>
        </div>

        <!-- Log E-Waste Section -->
        <div class="mb-4">
            <h3>Log E-Waste</h3>
            <form method="POST">
                <div class="input-group">
                    <input type="text" id="product" name="product" class="form-control" placeholder="Enter product being recycled" required>
                    <input type="number" id="weight" name="weight" class="form-control" placeholder="E-waste (kg)" required>
                    <button type="submit" class="btn btn-success">Log E-Waste</button>
                </div>
            </form>
            <div id="logFeedback" class="mt-2"><?php echo $feedback; ?></div>
        </div>

        <!-- View User Stats Section -->
        <div>
            <h3>Your Current Stats</h3>
            <p><strong>Total E-Waste Recycled:</strong> <?php echo htmlspecialchars($user['e_waste']); ?> kg</p>
            <p><strong>Total Carbon Reduction:</strong> <?php echo htmlspecialchars($user['carbon_reduction']); ?> kg</p>
            <p><strong>Rewards:</strong> <?php echo htmlspecialchars($user['rewards'] ?: 'No rewards yet.'); ?></p>
        </div>
    </div>
</body>
</html>
