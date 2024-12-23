<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup index.css">
</head>
<body>

<div class="signup-container">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST" id="signupForm" onsubmit="return validateEmail()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="emailError" class="error"></span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

      

        <label for="mobile">Mobile No:</label>
        <input type="tel" id="mobile" name="mobile" 
               pattern="[0-9]{10}" maxlength="10" required 
               placeholder="Enter 10-digit mobile number">
        <span id="mobileError" class="error"></span>

        <!-- New City Field -->
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required placeholder="Enter your city">

        <button type="submit">Sign Up</button>
    </form>
</div>

<script src="signup index.js"></script>
<script src="signup.js"></script>
</body>
</html>
