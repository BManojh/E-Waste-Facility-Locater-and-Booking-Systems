<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Menu with Hero Section</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
</head>
<body>

<nav class="navbar">
        <div class="logo">ELocate</div>
        <div class="menu">
            <a href="main.php">Home</a>
            <a href="about us.php">About</a>
            <a href="fa.php">E-Facilities</a>
            <a href="pickup.php">Book a service</a>
            <a href="timeline.php">Guidelines</a>
            <a href="contactus.php">Contact Us</a>
        </div>
        <?php
        if (isset($_SESSION['company_name'])) {
            // User is logged in, show dropdown menu
            echo '
            <div class="dropdown">
                <button class="dropdown-btn dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ' . htmlspecialchars($_SESSION['company_name']) . '
                </button>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="admindashboard.php">Booking</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>';
        } else {
            // User is not logged in, show the login button
            echo '<a href="login.php" class="signup-btn">Login</a>';
        }
        ?>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-text">
            <h1>Let Your Old Device Help The <span style="text-decoration: underline; color: #1b5e20;">Environment</span></h1>
            <p>Dispose of your e-waste responsibly and find the nearest recycling facility. Together, we can make a difference!</p>
            <a href="fa.php" class="cta-btn">Locate Your Nearest Facility</a>
        </div>
        <div class="hero-image">
            <img src="sample.png" alt="E-waste recycling illustration">
        </div>
    </section>

    <!-- Card Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="e18.jpg" class="card-img-top" width="600" height ="240">
                    <div class="card-body">
                        <h5 class="card-title">E-Waste Statistics</h5>
                        <p class="card-text">Learn about the impact of electronic waste on the environment and the importance of responsible recycling.</p>
                        <a href="statistics.php" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="e12.jpg" class="card-img-top" width="600" height ="240" >
                    <div class="card-body">
                        <h5 class="card-title">Rules for E-Waste Disposal </h5>
                        <p class="card-text">Get practical advice on how to prepare and dispose of your old electronics in a safe manner.</p>
                        <a href="terms.php" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="e14.jpg" class="card-img-top" width="600" height ="240">
                    <div class="card-body">
                        <h5 class="card-title">Locate Recycling Centers</h5>
                        <p class="card-text">Use our tool to find the nearest e-waste recycling facility and contribute to a cleaner planet.</p>
                        <a href="fa.php" class="btn btn-success">Find Centers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FAQ Section -->
    <div class="container mt-5">
    <div class="faq-section">
        <center><h2>Frequently Asked Questions (FAQ):</h2></center>
        <div class="accordion" id="faqAccordion">
            <!-- FAQs with icons -->
            <div class="card">
                <div class="card-header" id="faq1">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            What is an e-waste facility locator? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse1" class="collapse" aria-labelledby="faq1" data-parent="#faqAccordion">
                    <div class="card-body">
                        An e-waste facility locator is a tool that helps users find nearby facilities where they can safely recycle or dispose of electronic waste.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq2">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            How can I find the nearest e-waste recycling facility? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#faqAccordion">
                    <div class="card-body">
                        You can use the e-waste facility locator by entering your location or ZIP code to find the closest recycling centers.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            What items can I recycle at e-waste facilities? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faqAccordion">
                    <div class="card-body">
                        Most e-waste facilities accept items like batteries, computers, mobile phones, televisions, printers, small kitchen appliances, and cables.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq4">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Are there any costs associated with e-waste recycling? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faqAccordion">
                    <div class="card-body">
                        Costs may vary depending on the facility and the type of item being recycled. Some facilities offer free recycling, while others may charge a fee for specific items.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq5">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            How does recycling e-waste help the environment? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#faqAccordion">
                    <div class="card-body">
                        Recycling e-waste helps prevent harmful chemicals from entering the environment and allows valuable materials to be reclaimed and reused, conserving natural resources.
                    </div>
                </div>
            </div>

            <!-- Additional FAQs with icons -->
            <div class="card">
                <div class="card-header" id="faq6">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            What should I do to prepare my e-waste for recycling? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="faq6" data-parent="#faqAccordion">
                    <div class="card-body">
                        Ensure that any personal data is erased from devices before recycling, remove any accessories that are not recyclable, and sort items as required by the facility.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq7">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            Can I recycle broken or non-functional electronics? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="faq7" data-parent="#faqAccordion">
                    <div class="card-body">
                        Yes, most e-waste facilities accept broken or non-functional electronics for recycling. These items are dismantled, and usable components are salvaged.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq8">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            Is it safe to dispose of batteries at e-waste facilities? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="faq8" data-parent="#faqAccordion">
                    <div class="card-body">
                        Yes, e-waste facilities have specialized processes to safely handle and recycle batteries, preventing potential chemical leaks and environmental damage.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq9">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                            What happens to e-waste after it is recycled? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="faq9" data-parent="#faqAccordion">
                    <div class="card-body">
                        E-waste is broken down, and valuable materials are extracted and reused to manufacture new products. Hazardous components are safely disposed of to prevent pollution.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faq10">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                            Do all e-waste facilities accept the same types of items? <i class="fas fa-chevron-down"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="faq10" data-parent="#faqAccordion">
                    <div class="card-body">
                        No, each e-waste facility may have different policies regarding which items they accept. It’s best to check with the specific facility to know what they recycle.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-row">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="About us.php">About Us</a></li>
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
<!-- Bootstrap JS (optional for interactive components) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
