<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste Rules and Conditions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            margin-top: 70px;
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
        <style>
    body {
        background-color: #f8f9fa;
        color: #333;
        margin-top: 70px;
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
        background: #d3f9d8; /* Light green background */
        color: #333; /* Black text */
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
        border-color: transparent #d3f9d8 transparent transparent;
    }
    .timeline-item:nth-child(even) .timeline-item-content:before {
        right: -20px;
        border-width: 10px 0 10px 20px;
        border-color: transparent transparent transparent #d3f9d8;
    }


    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">E-Waste Rules</div>
        <div class="menu">
            <a href="main.php">Home</a>
            <a href="facility.php">location</a>
            <a href="contactus.php">Contact</a>
        </div>
        <a href="login.php" class="signup-btn">Login</a>
    </nav>

    <div class="container">
        <h1 class="text-center my-5">E-Waste Management Rules</h1>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 1</h5>
                    <p>Dispose of e-waste at certified recycling centers or collection points.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 2</h5>
                    <p>Do not throw e-waste in regular household trash bins.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 3</h5>
                    <p>Businesses must keep records of e-waste and its disposal methods.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 4</h5>
                    <p>Producers are responsible for proper recycling or disposal of products.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 5</h5>
                    <p>Consumers should reduce e-waste by reusing or donating functioning electronics.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 6</h5>
                    <p>Separate hazardous components before recycling to prevent contamination.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 7</h5>
                    <p>Recycling facilities must be licensed by environmental authorities.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 8</h5>
                    <p>Manufacturers should offer take-back or recycling services for their products.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 9</h5>
                    <p>Public awareness campaigns must educate consumers about proper e-waste management.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-item-content">
                    <h5>Rule 10</h5>
                    <p>Improper disposal of e-waste pollutes the environment and harms health.</p>
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
