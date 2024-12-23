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
$message = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form fields are set
    if (isset($_POST['UserName'], $_POST['Company_name'], $_POST['comany_id'], $_POST['email'], $_POST['password'], $_POST['city'])) {
        // Retrieve and sanitize form inputs
        $UserName = $conn->real_escape_string($_POST['UserName']);
        $Company_name = $conn->real_escape_string($_POST['Company_name']);
        $comany_id = $conn->real_escape_string($_POST['comany_id']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = password_hash($conn->real_escape_string($_POST['password']), PASSWORD_DEFAULT); // Hash password
        $city = $conn->real_escape_string($_POST['city']);

        // Check if the username or company ID already exists
        $checkQuery = "SELECT * FROM managersignup WHERE UserName = ? OR comany_id = ?";
        $stmtCheck = $conn->prepare($checkQuery);
        $stmtCheck->bind_param("ss", $UserName, $comany_id);
        $stmtCheck->execute();
        $result = $stmtCheck->get_result();

        if ($result->num_rows > 0) {
            // Username or company ID already exists
            $_SESSION['message'] = "This username or company ID is already registered. Please choose another.";
        } else {
            // Prepare the SQL statement to insert new data
            $stmt = $conn->prepare("INSERT INTO managersignup (UserName, Company_name, comany_id, email, password, city) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $UserName, $Company_name, $comany_id, $email, $password, $city);

            // Execute the statement
            if ($stmt->execute()) {
                // Set success message in session and redirect
                $_SESSION['message'] = "Registration successful! <a href='managerlogin.php' style='color: blue; text-decoration: underline;'>Login</a>";
                // Redirect to avoid form resubmission
                header("Location: managersignup.php");
                exit();
            } else {
                $_SESSION['message'] = "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        }

        // Close the check statement
        $stmtCheck->close();
    } else {
        $_SESSION['message'] = "Please fill in all the required fields.";
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
    <title>Manager Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: lightgreen;
            padding-top: -0.5rem; /* Ensures space for the fixed navbar */

        }
        .navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: #f1f8f4;
    padding: 1rem 1rem; /* Reduced padding */
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.navbar .logo {
    font-size: 1.2rem; /* Reduced font size */
    color: #2e7d32;
    font-weight: bold;
}

.navbar .menu a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    margin: 0 8px; /* Reduced margin between menu items */
}

.navbar .menu a:hover {
    color: #2e7d32;
}

.login-btn {
    padding: 0.3rem 1rem; /* Reduced padding for the login button */
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


        .signup-container {
            max-width: 600px;
            margin: 4.5rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .signup-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #2e7d32;
        }

        .form-control {
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .btn-signup {
            width: 100%;
            background-color: #2e7d32;
            color: #fff;
            font-weight: bold;
            border: none;
            padding: 0.5rem;
            border-radius: 5px;
        }

        .btn-signup:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>
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

<div class="signup-container">
    <h2>Manager Signup</h2>

    <!-- Display success/error message from session -->
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p style="text-align: center; color: red;">' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']); // Clear message after display
    }
    ?>

    <form action="managersignup.php" method="POST">
        <div class="mb-3">
            <label for="UserName" class="form-label">Username</label>
            <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Enter your username" required>
        </div>
        <div class="mb-3">
            <label for="Company_name" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="Company_name" name="Company_name" placeholder="Enter your company name" required>
        </div>
        <div class="mb-3">
            <label for="comany_id" class="form-label">Company ID</label>
            <input type="text" class="form-control" id="comany_id" name="comany_id" placeholder="Enter your company ID" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
        </div>
        <button type="submit" class="btn btn-signup">Sign Up</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
