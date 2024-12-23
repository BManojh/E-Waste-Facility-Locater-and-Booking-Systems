<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Waste Statistics Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        /* Fixed menu bar styling */
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

        /* Logo styling */
        .navbar .logo {
            font-size: 1.5rem;
            color: #2e7d32;
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
            color: #2e7d32;
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

        /* Placeholder content for scrolling */
        .content {
            padding-top: 20px; /* Space for fixed navbar */
            padding: 2rem;
            height: 2000px; /* Makes the page scrollable */
            background-color: #f9f9f9;
        }
    

    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .dashboard {
            width: 90%;
            height: 80%;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .menu {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .menu button {
            margin: 0 10px;
            padding: 10px 20px;
            background: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .menu button:hover {
            background: #388e3c;
        }

        .chart-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        canvas {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">ELocate</div>
        <div class="menu">
            <a href="main.php">Home</a>
            <a href="about us.php">About</a>
            <a href="facility.php">E-Facilities</a>
            <a href="pickup.php">Recycle</a>
            <a href="timeline.php">Guidelines</a>
            <a href="contactus.php">Contact Us</a>
        </div>
        <a href="login.php" class="signup-btn">Login</a>
    </nav>

<div class="dashboard">
    <div class="menu">
        <button onclick="showChart('centers')">E-Waste Centers</button>
        <button onclick="showChart('recycled')">Recycled Products</button>
        <button onclick="showChart('categories')">Product Categories</button>
    </div>

    <div class="chart-container">
        <canvas id="chart"></canvas>
    </div>
</div>

<script>
    // Chart instance
    let chart;

    // Data sets for each chart
    const dataSets = {
        centers: {
            type: 'bar',
            labels: ['kanchipuram', 'chennai', 'chengalpatu', 'vellore', 'coimbatore'],
            data: [15, 20, 8, 12, 10],
            backgroundColor: ['#4caf50', '#8bc34a', '#cddc39', '#ffeb3b', '#ffc107'],
            title: 'E-Waste Centers in Different Cities'
        },
        recycled: {
            type: 'bar',
            labels: ['Mobile Phones', 'Computers', 'Batteries', 'Televisions', 'Others'],
            data: [5000, 7000, 3000, 4000, 2000],
            backgroundColor: ['#4caf50', '#8bc34a', '#cddc39', '#ffeb3b', '#ffc107'],
            title: 'Number of Products Recycled'
        },
        categories: {
            type: 'pie',
            labels: ['Mobile Phones', 'Computers', 'Televisions', 'Batteries', 'Other Electronics'],
            data: [25, 30, 20, 15, 10],
            backgroundColor: ['#4caf50', '#8bc34a', '#cddc39', '#ffeb3b', '#ffc107'],
            title: 'Product Categories in E-Waste'
        }
    };

    // Function to create a new chart
    function createChart(type, labels, data, backgroundColor, title) {
        const ctx = document.getElementById('chart').getContext('2d');

        // Destroy existing chart if present
        if (chart) chart.destroy();

        chart = new Chart(ctx, {
            type: type,
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: backgroundColor,
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: type === 'pie',
                        position: 'bottom'
                    },
                    title: {
                        display: true,
                        text: title,
                        font: {
                            size: 18
                        }
                    }
                },
                scales: type === 'bar' ? {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                } : {}
            }
        });
    }

    // Function to display the selected chart
    function showChart(chartType) {
        const { type, labels, data, backgroundColor, title } = dataSets[chartType];
        createChart(type, labels, data, backgroundColor, title);
    }

    // Initialize with the first chart
    showChart('centers');
</script>

</body>
</html>
