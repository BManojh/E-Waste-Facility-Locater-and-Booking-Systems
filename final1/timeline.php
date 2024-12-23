<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000; /* Dark background */
            color: #fff;
            margin-top: 70px; /* Ensure content starts below the fixed navbar */
        }
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
        .timeline {
            position: relative;
            margin: 50px 0;
        }
        .timeline:before {
            content: '';
            position: absolute;
            left: 50%;
            width: 4px;
            height: 100%;
            background: #0f9bff;
            transform: translateX(-50%);
        }
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .timeline-item:nth-child(even) {
            justify-content: flex-end;
        }
        .timeline-item.show {
            opacity: 1;
            transform: translateY(0);
        }
        .timeline-item-content {
            background: #333;
            padding: 20px;
            border-radius: 8px;
            width: 250px;
            position: relative;
        }
        .timeline-item-content:before {
            content: '';
            position: absolute;
            top: 20px;
            width: 0;
            height: 0;
            border-style: solid;
        }
        .timeline-item:nth-child(odd) .timeline-item-content:before {
            left: -20px;
            border-width: 10px 20px 10px 0;
            border-color: transparent #333 transparent transparent;
        }
        .timeline-item:nth-child(even) .timeline-item-content:before {
            right: -20px;
            border-width: 10px 0 10px 20px;
            border-color: transparent transparent transparent #333;
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

    <div class="container">
        <h1 class="text-center my-5"><br>E-Waste Disposal Journey</h1>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 1</h5>
                    <p>User learns about the e-waste facility locator</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 2</h5>
                    <p>User checks details of available facilities</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 3</h5>
                    <p>User searches for nearby facilities</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 4</h5>
                    <p>User explores how the platform can help</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 5</h5>
                    <p>User compares facility options</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 6</h5>
                    <p>User selects a suitable facility</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 7</h5>
                    <p>User receives booking confirmation</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 8</h5>
                    <p>User prepares e-waste for disposal</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 9</h5>
                    <p>User books an appointment or pickup service</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 10</h5>
                    <p>User realizes the need to dispose of e-waste properly</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Step 11</h5>
                    <p>User gives feedback and may recommend the service</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Reveal animation on scroll
        window.addEventListener('scroll', function() {
            const items = document.querySelectorAll('.timeline-item');
            const triggerHeight = window.innerHeight * 0.8;

            items.forEach(item => {
                const itemTop = item.getBoundingClientRect().top;
                if (itemTop < triggerHeight) {
                    item.classList.add('show');
                }
            });
        });

        // Initial trigger on page load
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.timeline-item');
            items.forEach(item => {
                const itemTop = item.getBoundingClientRect().top;
                if (itemTop < window.innerHeight) {
                    item.classList.add('show');
                }
            });
        });
    </script>
</body>
</html>
