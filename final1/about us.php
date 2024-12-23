<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <title>E-Waste Facility Locator</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <style>  
        body {  
            background-color: #e8f5e9; /* Light green background */  
            color: #2e7d32; /* Darker green for text */  
        }  
        /* Navbar styling */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f1f8f4;
        padding: 1rem 2rem;
        display: flex;
        justify-content: center; /* Center the content */
        align-items: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .navbar .logo {
        font-size: 1.5rem;
        color: #2e7d32;
        font-weight: bold;
        margin-right: 30px; /* Space between logo and menu */
    }

    /* Menu links */
    .navbar .menu {
        display: flex;
        gap: 2rem;
    }

    .navbar .menu a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        padding: 8px 12px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .navbar .menu a:hover {
        color: #fff;
        background-color: #2e7d32;
    }


        h1, h2 {  
            color: #1b5e20; /* Dark green for headings */  
        }  

        footer {  
            background-color: #1b5e20; /* Dark green */  
            color: white;  
            padding: 10px 0;  
        }  

        .header {  
            background-color: #4caf50; /* Green header */  
            color: white;  
            padding: 20px 0;  
        }  

        .team-image {  
            border-radius: 50%;  
        }  

        .image-section img {  
            border-radius: 10px;  
        }  
    </style>  
</head>  
<body>  

<!-- Navbar -->
<nav class="navbar">
    <div class="logo">ELocate</div>
    <div class="menu">
        <a href="admin.php">Home</a>
        <a href="about us.php">About</a>
        <a href="fa.php">E-Facilities</a>
        <a href="pickup.php">Book a Service</a>
        <a href="timeline.php">Guidelines</a>
        <a href="contactus.php">Contact Us</a>
    </div>
</nav>
    

    <!-- About Us Section -->  
    <section class="mb-5">  
        <h1 class="text-center mb-4">About Us</h1>  
        <p>At E-Waste Facility Locator, we are dedicated to empowering individuals and businesses to recycle e-waste responsibly and conveniently. Our platform offers a simple, efficient way to locate certified recycling facilities across communities, making environmentally conscious choices more accessible than ever.

Our mission is clear: to support a cleaner, healthier planet by reducing the negative impact of electronic waste. The rapid pace of technological advancement has led to an increase in discarded electronics, which, when improperly disposed of, can harm ecosystems and public health. Through partnerships and an expansive database, we connect users to reputable facilities that recycle e-waste in a safe, eco-friendly manner.

Our vision is to foster a future where e-waste is managed responsibly by all. By promoting awareness and providing accessible recycling solutions, we strive to contribute to a more sustainable world for generations to come. Join us in making a difference!






</p>  
    </section>  

<!-- Slideshow Section -->
<section class="mb-5">
    <h2 class="text-center mb-4">Our Mission & Vision</h2>
    <div id="slideshow" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="e11.jpg" class="d-block w-50 mx-auto" alt="Mission">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Mission</h5>
                    <p>To support a cleaner planet by providing easy access to e-waste recycling.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="e12.jpg" class="d-block w-50 mx-auto" alt="Vision">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Vision</h5>
                    <p>To reduce the environmental impact of electronic waste for a sustainable future.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="e13.jpg" class="d-block w-50 mx-auto" alt="Partnerships">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Partnerships</h5>
                    <p>Collaborating with certified recycling facilities worldwide.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- How It Works Section -->  
<section class="mb-5">
    <h2 class="text-center mb-4">How It Works</h2>
    <div class="row">
        <!-- Search Section -->
        <div class="col-md-4 text-center">
            <img src="e14.jpg" alt="Search Image" class="img-fluid mb-3" style="max-height: 150px;">
            <i class="fas fa-search fa-3x text-success mb-2"></i>
            <h5>Search</h5>
            <p>Enter your location or zip code in our locator tool to find nearby facilities.</p>
        </div>
        <!-- Locate Section -->
        <div class="col-md-4 text-center">
            <img src="e15.jpg" alt="Locate Image" class="img-fluid mb-3" style="max-height: 150px;">
            <i class="fas fa-map-marker-alt fa-3x text-success mb-2"></i>
            <h5>Locate</h5>
            <p>Browse a list of certified e-waste facilities based on your search criteria.</p>
        </div>
        <!-- Recycle Section -->
        <div class="col-md-4 text-center">
            <img src="e16.jpg" alt="Recycle Image" class="img-fluid mb-3" style="max-height: 150px;">
            <i class="fas fa-recycle fa-3x text-success mb-2"></i>
            <h5>Recycle</h5>
            <p>Visit a facility and safely recycle your e-waste, contributing to a cleaner environment.</p>
        </div>
    </div>
</section>

    <!-- Success Stories Section -->  
    <section class="mb-5">
        <h2 class="text-center mb-4">Success Stories</h2>
        <blockquote class="blockquote">
            <p>"Using E-Waste Facility Locator was a game-changer. I was able to quickly find a nearby center, and now I’m more conscious about recycling electronics." - Alex M.</p>
        </blockquote>
        <blockquote class="blockquote">
            <p>"Our company was able to safely recycle old computers with ease. We’re grateful for this tool that helps us stay environmentally responsible!" - GreenTech Inc.</p>
        </blockquote>
    </section>

    <!-- E-Waste Facts Section -->  
    <section class="mb-5">
        <h2 class="text-center mb-4">E-Waste Facts</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="e17.jpg" alt="Fact 1" class="img-fluid">
                <p>Over 50 million tons of e-waste are produced globally each year.</p>
            </div>
            <div class="col-md-4">
                <img src="e18.jpg" height="300" width="450">
                <p>Only 20% of e-waste is formally recycled, while the rest ends up in landfills.</p>
            </div>
            <div class="col-md-4">
                <img src="e19.jpg" alt="Fact 3" class="img-fluid">
                <p>Recycling e-waste can help recover valuable metals, reducing mining and pollution.</p>
            </div>
        </div>
    </section>

    <!-- Quiz Section -->  
<section class="mb-5">
    <h2 class="text-center mb-4">Test Your E-Waste Knowledge</h2>

    <p><strong>Question 1:</strong> What percentage of e-waste is recycled globally?</p>
    <button onclick="alert('Correct! Only about 20% of e-waste is recycled.')">20%</button>
    <button onclick="alert('Incorrect. Try again!')">50%</button>
    <button onclick="alert('Incorrect. Try again!')">75%</button>

    <p class="mt-4"><strong>Question 2:</strong> Which of these is NOT a benefit of recycling e-waste?</p>
    <button onclick="alert('Correct! Recycling e-waste does not reduce water consumption.')">Reduces water consumption</button>
    <button onclick="alert('Incorrect. Recycling does help in recovering valuable metals.')">Recovers valuable metals</button>
    <button onclick="alert('Incorrect. Recycling reduces harmful materials in landfills.')">Reduces harmful materials in landfills</button>

    <p class="mt-4"><strong>Question 3:</strong> Which toxic material is commonly found in e-waste?</p>
    <button onclick="alert('Correct! Lead is commonly found in e-waste.')">Lead</button>
    <button onclick="alert('Incorrect. Iron is not as toxic and is less commonly a concern in e-waste.')">Iron</button>
    <button onclick="alert('Incorrect. Aluminum is not a toxic material in e-waste.')">Aluminum</button>

    <p class="mt-4"><strong>Question 4:</strong> How long can it take for a plastic phone case to decompose?</p>
    <button onclick="alert('Incorrect. It actually takes much longer.')">10 years</button>
    <button onclick="alert('Correct! It can take up to 500 years for a plastic phone case to decompose.')">500 years</button>
    <button onclick="alert('Incorrect. That’s too short for plastic decomposition.')">100 years</button>

    <p class="mt-4"><strong>Question 5:</strong> What is a key reason for properly recycling e-waste?</p>
    <button onclick="alert('Correct! Proper e-waste recycling prevents toxic materials from harming the environment.')">Prevents toxic materials from harming the environment</button>
    <button onclick="alert('Incorrect. Reducing energy use is not the primary reason.')">Reduces energy use</button>
    <button onclick="alert('Incorrect. E-waste recycling doesn’t significantly increase water availability.')">Increases water availability</button>

</section>


<!-- Environmental Impact Calculator -->
<section class="mb-5">
    <h2 class="text-center mb-4">Environmental Impact Calculator</h2>
    <p class="text-center">Estimate the environmental benefits of recycling your electronic devices.</p>
    <form id="impactCalculator" class="p-4 border rounded bg-light">
        <!-- Device Type Selection -->
        <div class="form-group">
            <label for="deviceType" class="font-weight-bold">Type of E-Waste</label>
            <select class="form-control" id="deviceType">
                <option value="" disabled selected>Select the type of e-waste</option>
                <option value="laptop">Laptop</option>
                <option value="smartphone">Smartphone</option>
                <option value="tablet">Tablet</option>
                <option value="desktop">Desktop Computer</option>
                <option value="television">Television</option>
                <option value="printer">Printer</option>
                <option value="monitor">Monitor</option>
                <option value="gameConsole">Game Console</option>
                <option value="motherboard">Motherboard</option>
                <option value="ram">RAM</option>
                <option value="hardDrive">Hard Drive / SSD</option>
                <option value="battery">Battery</option>
                <option value="cable">Cable / Charger</option>
            </select>
        </div>

        <!-- Quantity Input -->
        <div class="form-group">
            <label for="quantity" class="font-weight-bold">Quantity</label>
            <input 
                type="number" 
                class="form-control" 
                id="quantity" 
                placeholder="Enter the quantity (e.g., 1, 2, 10)" 
                min="1" 
                required
            >
        </div>

        <!-- Calculate Button -->
        <div class="text-center">
            <button type="button" onclick="calculateImpact()" class="btn btn-success btn-lg">
                Calculate Impact
            </button>
        </div>

        <!-- Results Display -->
        <p id="impactResult" class="mt-4 text-center font-weight-bold"></p>
    </form>
</section>

<script>
    function calculateImpact() {
        const deviceType = document.getElementById('deviceType').value;
        const quantity = parseInt(document.getElementById('quantity').value);
        const impactResult = document.getElementById('impactResult');
        let impactMessage = '';

        // Environmental impact data per device (in kg)
        const impactData = {
    laptop: { 
        co2: 10, plastic: 1.2, 
        metals: { gold: 0.00025, silver: 0.001, aluminum: 0.8, iron: 0.05, lead: 0.01, cadmium: 0.0003, mercury: 0.00002, arsenic: 0.00001, zinc: 0.002 },
        chemicals: { flameRetardants: 0.01, PCBs: 0.0005, phthalates: 0.0008, phenols: 0.0003, PFAS: 0.0001 }
    },
    smartphone: { 
        co2: 4, plastic: 0.2, 
        metals: { gold: 0.00003, silver: 0.0001, aluminum: 0.2, iron: 0.01, lead: 0.001, cadmium: 0.0001, mercury: 0.00001, arsenic: 0.000005, zinc: 0.0005 },
        chemicals: { flameRetardants: 0.005, PCBs: 0.0002, phthalates: 0.0004, phenols: 0.0001, PFAS: 0.00005 }
    },
    tablet: { 
        co2: 6, plastic: 0.4, 
        metals: { gold: 0.00005, silver: 0.0003, aluminum: 0.4, iron: 0.02, lead: 0.002, cadmium: 0.0002, mercury: 0.00001, arsenic: 0.000008, zinc: 0.001 },
        chemicals: { flameRetardants: 0.008, PCBs: 0.0003, phthalates: 0.0005, phenols: 0.0002, PFAS: 0.00007 }
    },
    desktop: { 
        co2: 20, plastic: 2.5, 
        metals: { gold: 0.0003, silver: 0.002, aluminum: 2, iron: 0.1, lead: 0.03, cadmium: 0.0008, mercury: 0.00005, arsenic: 0.00002, zinc: 0.005 },
        chemicals: { flameRetardants: 0.02, PCBs: 0.001, phthalates: 0.001, phenols: 0.0005, PFAS: 0.0002 }
    },
    television: { 
        co2: 30, plastic: 3.0, 
        metals: { gold: 0.00035, silver: 0.003, aluminum: 2.5, iron: 0.12, lead: 0.05, cadmium: 0.001, mercury: 0.00008, arsenic: 0.00003, zinc: 0.006 },
        chemicals: { flameRetardants: 0.03, PCBs: 0.002, phthalates: 0.002, phenols: 0.001, PFAS: 0.0003 }
    },
    printer: { 
        co2: 8, plastic: 1.5, 
        metals: { gold: 0.0001, silver: 0.0008, aluminum: 1, iron: 0.06, lead: 0.02, cadmium: 0.0005, mercury: 0.00002, arsenic: 0.00001, zinc: 0.003 },
        chemicals: { flameRetardants: 0.01, PCBs: 0.0006, phthalates: 0.0009, phenols: 0.0004, PFAS: 0.00015 }
    },
    monitor: { 
        co2: 12, plastic: 2.0, 
        metals: { gold: 0.0002, silver: 0.0015, aluminum: 1.5, iron: 0.07, lead: 0.03, cadmium: 0.0007, mercury: 0.00003, arsenic: 0.000015, zinc: 0.004 },
        chemicals: { flameRetardants: 0.015, PCBs: 0.0008, phthalates: 0.0012, phenols: 0.0005, PFAS: 0.00018 }
    },
    gameConsole: { 
        co2: 7, plastic: 0.8, 
        metals: { gold: 0.0001, silver: 0.0005, aluminum: 0.7, iron: 0.04, lead: 0.01, cadmium: 0.0002, mercury: 0.00001, arsenic: 0.000005, zinc: 0.002 },
        chemicals: { flameRetardants: 0.007, PCBs: 0.0004, phthalates: 0.0006, phenols: 0.00025, PFAS: 0.00009 }
    },
    motherboard: { 
        co2: 3, plastic: 0.1, 
        metals: { gold: 0.0005, silver: 0.002, aluminum: 0.5, iron: 0.03, lead: 0.02, cadmium: 0.0005, mercury: 0.00002, arsenic: 0.00001, zinc: 0.001 },
        chemicals: { flameRetardants: 0.012, PCBs: 0.001, phthalates: 0.001, phenols: 0.0004, PFAS: 0.00012 }
    },
    ram: { 
        co2: 1, plastic: 0.05, 
        metals: { gold: 0.00002, silver: 0.0001, aluminum: 0.1, iron: 0.005, lead: 0.001, cadmium: 0.00005, mercury: 0.000005, arsenic: 0.000002, zinc: 0.0002 },
        chemicals: { flameRetardants: 0.002, PCBs: 0.0001, phthalates: 0.0002, phenols: 0.00008, PFAS: 0.00003 }
    },
    hardDrive: { 
        co2: 2, plastic: 0.1, 
        metals: { gold: 0.00003, silver: 0.0002, aluminum: 0.3, iron: 0.02, lead: 0.005, cadmium: 0.0001, mercury: 0.00001, arsenic: 0.000005, zinc: 0.0003 },
        chemicals: { flameRetardants: 0.004, PCBs: 0.0002, phthalates: 0.0003, phenols: 0.0001, PFAS: 0.00005 }
    },
    battery: { 
        co2: 2.5, plastic: 0.05, 
        metals: { gold: 0.00001, silver: 0.00005, aluminum: 0.1, iron: 0.01, lead: 0.05, cadmium: 0.002, mercury: 0.00005, arsenic: 0.00001, zinc: 0.0004 },
        chemicals: { flameRetardants: 0.003, PCBs: 0.0001, phthalates: 0.0001, phenols: 0.00005, PFAS: 0.00002 }
    },
    cable: { 
        co2: 0.2, plastic: 0.05, 
        metals: { gold: 0, silver: 0.00001, aluminum: 0.05, iron: 0.002, lead: 0.001, cadmium: 0.00002, mercury: 0, arsenic: 0, zinc: 0.0001 },
        chemicals: { flameRetardants: 0.0005, PCBs: 0.00002, phthalates: 0.00005, phenols: 0.00002, PFAS: 0.00001 }
    }
};

       	

        if (!deviceType) {
            impactMessage = "Please select a type of e-waste.";
        } else if (!quantity || isNaN(quantity) || quantity <= 0) {
            impactMessage = "Please enter a valid quantity.";
        } else if (impactData[deviceType]) {
            const totalCO2 = (impactData[deviceType].co2 * quantity).toFixed(2);
            const totalPlastic = (impactData[deviceType].plastic * quantity).toFixed(2);
            const metals = impactData[deviceType].metals;
            const chemicals = impactData[deviceType].chemicals;

            impactMessage = `
                Recycling ${quantity} ${deviceType}(s) helps save:
                <ul class="list-unstyled text-left mx-auto" style="max-width: 600px;">
                    <li>🌍 <strong>${totalCO2} kg</strong> of CO₂ emissions</li>
                    <li>🛠️ <strong>${totalPlastic} kg</strong> of plastic waste</li>
                    <li>💎 Metals saved:
                        <ul>
                            <li><strong>${(metals.gold * quantity).toFixed(5)} kg</strong> of gold</li>
                            <li><strong>${(metals.silver * quantity).toFixed(5)} kg</strong> of silver</li>
                            <li><strong>${(metals.aluminum * quantity).toFixed(2)} kg</strong> of aluminum</li>
                            <li><strong>${(metals.iron * quantity).toFixed(2)} kg</strong> of iron</li>
                            <li><strong>${(metals.lead * quantity).toFixed(4)} kg</strong> of lead</li>
                            <li><strong>${(metals.cadmium * quantity).toFixed(5)} kg</strong> of cadmium</li>
                            <li><strong>${(metals.mercury * quantity).toFixed(5)} kg</strong> of mercury</li>
                            <li><strong>${(metals.arsenic * quantity).toFixed(6)} kg</strong> of arsenic</li>
                            <li><strong>${(metals.zinc * quantity).toFixed(4)} kg</strong> of zinc</li>
                        </ul>
                    </li>
                    <li>⚗️ Hazardous chemicals avoided:
                        <ul>
                            <li><strong>${(chemicals.flameRetardants * quantity).toFixed(4)} kg</strong> of flame retardants</li>
                            <li><strong>${(chemicals.PCBs * quantity).toFixed(5)} kg</strong> of PCBs</li>
                            <li><strong>${(chemicals.phthalates * quantity).toFixed(5)} kg</strong> of phthalates</li>
                            <li><strong>${(chemicals.phenols * quantity).toFixed(5)} kg</strong> of phenols</li>
                            <li><strong>${(chemicals.PFAS * quantity).toFixed(6)} kg</strong> of PFAS</li>
                        </ul>
                    </li>
                </ul>
                By recycling, you're contributing to a cleaner, healthier planet! 🌱
            `;
        } else {
            impactMessage = "Invalid e-waste type selected.";
        }

        impactResult.innerHTML = impactMessage;
    }
</script>



    <!-- Upcoming Events Section -->  
    <section class="mb-5">
        <h2 class="text-center mb-4">Upcoming Events</h2>
        <ul class="list-unstyled">
            <li><h5>E-Waste Recycling Drive</h5> <p>Date: January 15, 2025</p></li>
            <li><h5>Webinar: The Importance of E-Waste Management</h5> <p>Date: February 10, 2025</p></li>
        </ul>
    </section>

    <!-- Footer -->  
    <footer class="text-center mt-5">  
        <p>&copy; 2023 E-Waste Facility Locator. All Rights Reserved.</p>  
    </footer>  

</div>  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>
