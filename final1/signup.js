// Add an event listener to the form submission
document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting in the traditional way

    // Get form values
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const mobile = document.getElementById("mobile").value;
    const city = document.getElementById("city").value;

    // Check if password and confirm password match
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    // Prepare the data to send
    const data = {
        username: username,
        email: email,
        password: password,
        mobile: mobile,
        city: city
    };

    // Send the AJAX request to signup.php
    fetch("signup.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json()) // Parse the JSON response
    .then(result => {
        if (result.status === "success") {
            alert(result.message); // Show success message
        } else {
            alert("Error: " + result.message); // Show error message
        }
    })
    .catch(error => console.error("Error:", error));
});
