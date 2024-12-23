<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'dt';

// Database connection setup
$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Initialize variables
$message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form inputs
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $city = $conn->real_escape_string($_POST['city']);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO signup (username, email, password, mobile, city) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $email, $password, $mobile, $city);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "Registration successful!";
        $message1 = "Login";
        echo '<p style="color: green; text-align: center;">' . $message . '</p>';
        echo '<p style="text-align: center;"><a href="login.php" style="color: blue; text-decoration: underline;">' . $message1 . '</a></p>';
    } else {
        $message = "Error: " . $stmt->error;
        echo '<p style="color: red; text-align: center;">' . $message . '</p>';
    }
    
    // Debugging Tip: Make sure there are no redirections or headers being sent later in the script
    
    

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Options</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #f1f8f4;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 1.5rem;
            color: #2e7d32;
            font-weight: bold;
        }

        .navbar .menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            margin: 0 10px;
        }

        .navbar .menu a:hover {
            color: #2e7d32;
        }

        .login-btn {
            padding: 0.5rem 1.5rem;
            background-color: #2e7d32;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">ELocate</div>
        <div class="menu">
            <a href="main.php">Home</a>
            <a href="about.php">About</a>
            <a href="fa.php">E-Facilities</a>
            <a href="pickup.php">Book a Service</a>
            <a href="timeline.php">Guidelines</a>
            <a href="login.php" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Choose Signup Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-4">Please select your signup option:</p>
                    <a href="usersignup.php" class="btn btn-primary btn-lg w-75 mb-3">User Signup</a>
                    <a href="managersignup.php" class="btn btn-secondary btn-lg w-75">Manager Signup</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Automatically show the modal when the page loads
        window.onload = () => {
            const signupModal = new bootstrap.Modal(document.getElementById('signupModal'));
            signupModal.show();
        };
    </script>
</body>
</html>
