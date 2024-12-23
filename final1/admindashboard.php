<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['company_name'])) {
    echo "Please log in to view your dashboard.";
    exit;
}

// Retrieve the logged-in user's facility name from the session
$facility = $_SESSION['company_name'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'pickup');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a button was clicked to update the status
if (isset($_POST['update_status'])) {
    $booking_id = $_POST['booking_id'];
    $new_status = $_POST['status'];

    // Prepare the query to update the booking status
    $stmt = $conn->prepare("UPDATE pickupdetails SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $new_status, $booking_id); // 's' for string, 'i' for integer
    $stmt->execute();
    $stmt->close();
}

// Prepare the query to fetch bookings for the logged-in user
$stmt = $conn->prepare("SELECT * FROM pickupdetails WHERE facility = ?");
$stmt->bind_param("s", $facility); // 's' is the type specifier for a string

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Dashboard</title>
  <style>
    /* Body styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fa;
        padding-top: 80px; /* To account for fixed navbar */
    }

    /* Navbar styling */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f1f8f4;
        padding: 1rem 2rem;
        display: flex;
        justify-content: center; /* Center the content */
        align-items: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .navbar .logo {
        font-size: 1.5rem;
        color: #2e7d32;
        font-weight: bold;
        margin-right: 30px; /* Space between logo and menu */
    }

    /* Menu links */
    .navbar .menu {
        display: flex;
        gap: 2rem;
    }

    .navbar .menu a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        padding: 8px 12px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .navbar .menu a:hover {
        color: #fff;
        background-color: #2e7d32;
    }

    /* Container for main content */
    .container {
        max-width: 1150px;
        margin: 10px auto 20px;  /* Reduced margin-top from 100px to 50px */
        padding: 10px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Main heading */
    h1 {
        text-align: center;
        color: #2e7d32;
        margin-bottom: 20px;
    }

    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
        font-size: 16px;
    }

    th {
        background-color: #2e7d32;
        color: white;
    }

    td {
        background-color: #f9f9f9;
    }

    /* Status column styling */
    .status {
        font-weight: bold;
    }

    .pending {
        color: orange;
    }

    .completed {
        color: green;
    }

    .cancelled {
        color: red;
    }

    .buttons {
        display: flex;
        gap: 10px;
    }

    .buttons form {
        display: inline;
    }

    .btn {
        padding: 5px 10px;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .accept {
        background-color: green;
    }

    .decline {
        background-color: red;
    }

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="logo">ELocate</div>
    <div class="menu">
        <a href="admin.php">Home</a>
        <a href="about us.php">About</a>
        <a href="fa.php">E-Facilities</a>
        <a href="pickup.php">Book a Service</a>
        <a href="timeline.php">Guidelines</a>
        <a href="contactus.php">Contact Us</a>
    </div>
</nav>

<!-- Dashboard Content -->
<div class="container">
    <h1>Your Bookings</h1>

    <?php if ($result->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                <th>Email</th>
                    <th>Device</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Pickup Date</th>
                    <th>Location</th>
                    <th>Pickup Time</th>
                    <th>phone Number</th>
                    <th>status</th>  <!-- New Column for Phone Number -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo htmlspecialchars($row['email']); ?></td> <!-- Display email -->
                        <td><?php echo htmlspecialchars($row['device']); ?></td>
                        <td><?php echo htmlspecialchars($row['model']); ?></td>
                        <td><?php echo htmlspecialchars($row['price']); ?></td>
                        <td><?php echo htmlspecialchars($row['date']); ?></td>
                        <td><?php echo htmlspecialchars($row['location']); ?></td>
                        <td><?php echo htmlspecialchars($row['time']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td class="status <?php echo strtolower($row['status']); ?>">
                            <?php echo ucfirst($row['status']); ?>
                        </td>
                          <!-- Display Phone Number -->
                        <td class="buttons">
                            <form method="POST">
                                <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="status" value="Accepted">
                                <button type="submit" name="update_status" class="btn accept">Accept</button>
                            </form>
                            <form method="POST">
                                <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="status" value="Declined">
                                <button type="submit" name="update_status" class="btn decline">Decline</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <center><p>No bookings found.</p></center>
    <?php endif; ?>
</div>

</body>
</html>

<?php
// Close the connection
$stmt->close();
$conn->close();
?>
