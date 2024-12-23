<?php
// Start session
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

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['Company_name'], $_POST['comany_id'])) {
        // Retrieve and sanitize form inputs
        $Company_name = $conn->real_escape_string($_POST['Company_name']);
        $comany_id = $conn->real_escape_string($_POST['comany_id']);

        // Prepare the SQL query to check for a matching Company Name and Company ID
        $query = "SELECT * FROM managersignup WHERE Company_name = ? AND comany_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $Company_name, $comany_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Valid login: Fetch user details
            $user = $result->fetch_assoc();

            // Store user details in the session
            $_SESSION['manager_id'] = $user['id'];
            $_SESSION['manager_name'] = $user['UserName'];
            $_SESSION['company_name'] = $user['Company_name'];

            // Redirect to dashboard or desired page
            header("Location: admin.php");
            exit();
        } else {
            $error_message = "Invalid Company Name or Company ID. Please try again.";
        }

        // Close the statement
        $stmt->close();
    } else {
        $error_message = "Please fill in all the required fields.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Manager Login</title>
    <style>
        /* Reset and basic styles */
        * {
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
body>

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

    <!-- Login Form -->
    <div class="login">
        <form action="" method="POST" class="login__form">
            <h1 class="login__title">Login</h1>

            <!-- Display error message -->
            <?php if (!empty($error_message)): ?>
                <p style="color: red; text-align: center;"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>
                    <div class="login__box-input">
                        <label for="Company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="Company_name" name="Company_name"  required>
                </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>
                    <div class="login__box-input">
                        <label for="comany_id" class="form-label">Company ID</label>
                    <input type="text" class="form-control" id="comany_id" name="comany_id"  required>
                    </div>
                </div>
            </div>

            <div class="login__check">
                <div class="login__check-group">
                    <input type="checkbox" id="login-check">
                    <label for="login-check">Remember me</label>
                </div>
                <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button">Login</button>
            <p>Don't have an account? <a href="signup.php"><b>Sign Up</b></a></p>
        </form>
    </div>

</body>
</html>
