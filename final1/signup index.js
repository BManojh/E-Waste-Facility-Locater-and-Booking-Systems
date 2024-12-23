function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("emailError");
    
    // Basic email pattern for validation
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (!emailPattern.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        return false; // Prevent form submission
    } else {
        emailError.textContent = ""; // Clear any previous error messages
        alert("Sign up successful!");
        return true; // Allow form submission
    }
}
