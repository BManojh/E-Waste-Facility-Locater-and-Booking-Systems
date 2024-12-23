<?php
// Start session to manage user login state
session_start();

// Initialize variables
$error_message = '';  // For displaying error messages

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection setup
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'dt';

    $conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

    // Check database connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Retrieve and sanitize user inputs
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Check if the email exists in the database
    $sql = "SELECT * FROM signup WHERE email = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        die("Error preparing the SQL statement: " . $conn->error);
    }

    $stmt->bind_param("s", $email);  // Bind email as a parameter
    $stmt->execute();
    $result = $stmt->get_result();

    // If a user with that email exists
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // If password is correct, store session data
            $_SESSION['user_id'] = $user['id']; // Store user ID
            $_SESSION['username'] = $user['username']; // Store username
            $_SESSION['email'] = $user['email']; // Store email in session
            $_SESSION['logged_in'] = true; // Set a flag indicating user is logged in

            // Redirect to the main page (or dashboard)
            header("Location: main.php");
            exit;
        } else {
            $error_message = "Incorrect email or password. Please try again.";
        }
    } else {
        $error_message = "Incorrect email or password. Please try again.";
    }

    // Close the prepared statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Login Form</title>
    <style>
        /* Basic reset */
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
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">ELocate</div>
        <div class="menu">
            <a href="main.php">Home</a>
            <a href="about.php">About</a>
            <a href="fa.php">E-Facilities</a>
            <a href="pickup.php">Recycle</a>
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
                        <input type="email" name="email" required class="login__input" placeholder=" ">
                        <label class="login__label">Email</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" name="password" required class="login__input" placeholder=" ">
                        <label class="login__label">Password</label>
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
