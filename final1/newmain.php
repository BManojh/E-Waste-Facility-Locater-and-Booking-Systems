<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Menu with Hero Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body style */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Fixed menu bar styling */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #f1f8f4; /* Adjust color as needed */
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        /* Logo styling */
        .navbar .logo {
            font-size: 1.5rem;
            color: #2e7d32; /* Adjust color as needed */
            font-weight: bold;
        }

        /* Menu links styling */
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
            color: #2e7d32; /* Adjust hover color as needed */
        }

        /* Signup button styling */
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

        /* Hero section styling */
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 4rem 5%;
            margin-top: 80px; /* Space for fixed navbar */
            background-color: #e0e7f1;
            min-height: 80vh; /* Increases the height */
        }

        .hero-text {
            max-width: 50%;
        }

        .hero-text h1 {
            font-size: 3.5rem; /* Increased font size */
            color: #2e7d32;
            margin-bottom: 1rem;
        }

        .hero-text p {
            font-size: 1.5rem; /* Increased font size */
            color: #555;
            margin: 1.5rem 0;
        }

        .hero-text .cta-btn {
            padding: 1rem 2.5rem; /* Increased padding for the button */
            font-size: 1.2rem; /* Increased font size */
            background-color: #2e7d32;
            color: #fff;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        }

        .hero-text .cta-btn:hover {
            background-color: #1b5e20;
        }

        .hero-image {
            max-width: 50%;
        }

        .hero-image img {
            width: 100%;
            border-radius: 10px;
            max-height: 400px; /* To ensure it doesn't exceed the height */
            object-fit: cover;
        }

        /* Page content styling */
        .content {
            padding: 2rem 5%;
            text-align: center;
        }
        /* Footer CSS */
.footer {
    background-color: #24262b;
    padding: 70px 0;
    color: #ffffff;
}
.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.footer-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-col {
    flex: 1;
    min-width: 200px;
    padding: 0 15px;
    margin-bottom: 30px;
}

.footer-col ul {
    padding: 0;
    list-style: none;
}

.footer-col h4 {
    color: #ffffff;
    margin-bottom: 20px;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col ul li a {
    color: #bbbbbb;
    text-decoration: none;
}

.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 10px;
}

.social-links a {
    display: inline-block;
    margin-right: 10px;
    color: #ffffff;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
}

.social-links a:hover {
    background: #ffffff;
    color: #24262b;
}

.footer-col {
    width: 25%;
    padding: 0 15px;
}

.footer-col h4 {
    font-size: 18px;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}

.footer-col h4::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    height: 2px;
    width: 50px;
    background-color: #e91e63;
}

.footer-col ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
}

.footer-col ul li a {
    font-size: 16px;
    color: #bbbbbb;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
}

.social-links a {
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}

.social-links a:hover {
    color: #24262b;
    background-color: #ffffff;
}

@media (max-width: 767px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}

@media (max-width: 574px) {
    .footer-col {
        width: 100%;
    }
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
            <a href="facility.php">E-Facilities</a>
            <a href="pickup.php">Recycle</a>
            <a href="timeline.php">Guidelines</a>
            <a href="contactus.php">Contact Us</a>
        </div>
        <a href="login.php" class="signup-btn">Login</a>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-text">
            <h1>Let Your Old Device Help The <span style="text-decoration: underline; color: #1b5e20;">Environment</span></h1>
            <p>Dispose of your e-waste responsibly and find the nearest recycling facility. Together, we can make a difference!</p>
            <a href="facility.php" class="cta-btn">Locate Your Nearest Facility</a>
        </div>
        <div class="hero-image">
            <img src="sample.png" alt="E-waste recycling illustration">
        </div>
    </section>

    <!-- Page Content -->
    <div class="content">
        <h1>Welcome to ELocate</h1>
        <p>Your technology partner for innovative and impactful E-Waste Facility Locator...</p>
    </div>
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-row">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="About us1.php">About Us</a></li>
                    <li><a href="terms.php">Terms and Conditions</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="try.php">Our Team</a></li>
                    <li><a href="donate.php">Donate</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Online Shop</h4>
                <ul>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">Bag</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
                    <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
