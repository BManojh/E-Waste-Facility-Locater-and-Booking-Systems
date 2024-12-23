<?php
session_start();

// Database connection details
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'dt';

// Create connection
$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$error_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login_type'])) {
        $login_type = $_POST['login_type'];
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        if ($login_type === 'user') {
            // User login
            $query = "SELECT * FROM signup WHERE email = ?";
        } elseif ($login_type === 'manager') {
            // Manager login
            $query = "SELECT * FROM managersignup WHERE email = ?";
        }

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Store session data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'] ?? $user['UserName']; // Adjust for table differences
                $_SESSION['login_type'] = $login_type;

                // Redirect to appropriate dashboard
                if ($login_type === 'user') {
                    header("Location: user_dashboard.php");
                } else {
                    header("Location: manager_dashboard.php");
                }
                exit();
            } else {
                $error_message = "Invalid email or password.";
            }
        } else {
            $error_message = "Invalid email or password.";
        }

        $stmt->close();
    } else {
        $error_message = "Please select a login type.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Modal with Navbar</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar styles */
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

        .navbar .menu {
            display: flex;
            gap: 2rem;
        }

        .navbar .menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .navbar .menu a:hover {
            color: #2e7d32;
        }

        .navbar .signup-btn {
            padding: 0.5rem 1.5rem;
            background-color: #2e7d32;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar .signup-btn:hover {
            background-color: #1b5e20;
        }

        .login {
            margin-top: 80px; /* To account for fixed navbar height */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 80px);
            background-color: #e8f5e9;
        }

        .login__form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 128, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">ELocate</div>
        <div class="menu">
            <a href="main.php">Home</a>
            <a href="about.php">About</a>
            <a href="fa.php">E-Facilities</a>
            <a href="pickup.php">Book a service</a>
            <a href="timeline.php">Guidelines</a>
            <a href="contactus.php">Contact Us</a>
        </div>
        <a href="signup.php" class="signup-btn">Signup</a>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Choose Login Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mb-4">Please select your login option:</p>
                    <a href="userlogin.php" class="btn btn-primary btn-lg w-75 mb-3">User Login</a>
                    <a href="managerlogin.php" class="btn btn-secondary btn-lg w-75">Manager Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Automatically show the modal when the page loads
        window.onload = () => {
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        };
    </script>
</body>
</html>
