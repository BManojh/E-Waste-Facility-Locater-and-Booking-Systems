<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-waste Facility Locator</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        #container {
            display: flex;
            height: 100vh;
        }
        /* Left Panel */
        #left-panel {
            width: 30%;
            background-color: #f4f4f4;
            padding: 20px;
            overflow-y: auto;
        }
        .facility-card {
            background-color: white;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .facility-card h3 {
            margin-bottom: 10px;
        }
        .facility-card p {
            margin: 5px 0;
        }
        .facility-card button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        .facility-card button:hover {
            background-color: #218838;
        }
        /* Map Panel */
        #map {
            width: 70%;
            height: 100%;
        }
    </style>
</head>
<body>

<div id="container">
    <!-- Left Panel for Facility List -->
    <div id="left-panel">

        <div class="facility-card" id="facility-1">
            <h3>M/s A.K.Enterprises</h3>
            <p>Capacity: 170 T/Annum</p>
            <p>Address: No:12, Chakarapani Street, Velacherry, Chennai – 600 0032.</p>
            <p>Contact: 9176664862</p>
            <p>Email: akenter06@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-2">
            <h3>M/s Abishek Enterprises</h3>
            <p>Capacity: 6000 T/Annum</p>
            <p>Address: SF No. 2G, North Phase, Ambattur, Chennai – 600098.</p>
            <p>Contact: 9884057878</p>
            <p>Email: enterprisesabishek@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-3">
            <h3>M/s AER Worldwide India Pvt Ltd</h3>
            <p>Capacity: 12000 T/Annum</p>
            <p>Address: SF No.774, Elandandheri, Sadayankuppam village, Manali New Town, Chennai – 600103.</p>
            <p>Contact: 9940105999</p>
            <p>Email: jkumar@aerworldwide.com, akaja@aerworld.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-4">
            <h3>M/s Arockia Enterprises</h3>
            <p>Capacity: 216 T/Annum</p>
            <p>Address: S.F.No.4/1E, Seevaram village, Sholinganallur taluk, Chennai – 600 097</p>
            <p>Contact: 9551044431</p>
            <p>Email: associates.grid@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-5">
            <h3>M/s Ascent Urban Recyclers Pvt Limited</h3>
            <p>Capacity: 400 T/Annum</p>
            <p>Address: SF No.62/1B, 2A2, Padur Road, Mevalurkuppam village, Sriperumbudur taluk, Kancheepuram district, Pin - 602 105.</p>
            <p>Contact: 9790099016</p>
            <p>Email: santhosh@ascentedigit.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-6">
            <h3>M/s Blooming Recyclers</h3>
            <p>Capacity: 730 T/Annum</p>
            <p>Address: Plot. No. D9/2, SIDCO Industrial Estate, Maraimalai Nagar, Kizhikaranai village, Chengalpattu district.</p>
            <p>Contact: 9840160149</p>
            <p>Email: bloomingrecycles@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-7">
            <h3>M/s Earth Sense Recycle Private Limited</h3>
            <p>Capacity: 4248 T/Annum</p>
            <p>Address: SF No. 247, Thenmelpakkam village, Chengalpattu taluk, Chengalpattu district.</p>
            <p>Contact: 9962222459</p>
            <p>Email: ewastechennai@earthsense.in</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-8">
            <h3>M/s Ecosible Recyclers Pvt Ltd</h3>
            <p>Capacity: 6000 T/Annum</p>
            <p>Address: No.154A/B, 8th Mahatma Gandhi Road, Tass Industrial Estate, Ambattur, Chennai – 600098.</p>
            <p>Contact: 9500101738</p>
            <p>Email: Ravi.shastry@ecosible.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-9">
            <h3>M/s E PROCESS House</h3>
            <p>Capacity: 435 T/Annum</p>
            <p>Address: c/o Bharat Electronics Limited, SF No 3 & 10/1 Nanthambakkam village, Alandur taluk, Chengalpattu district.</p>
            <p>Contact: --</p>
            <p>Email: --</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-10">
            <h3>M/s Enviro Green E-waste Recycling Solutions</h3>
            <p>Capacity: 1900 T/Annum</p>
            <p>Address: SF No. 2134, Palur village, Chengalpattu taluk, Chengalpattu district.</p>
            <p>Contact: 9445050342</p>
            <p>Email: envirogreenewaste@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-11">
            <h3>M/s G S Enterprises</h3>
            <p>Capacity: 8400 T/Annum</p>
            <p>Address: SF No: 254/2A2A, Mevalurkuppam village, Sriperumbudur taluk, Kancheepuram district.</p>
            <p>Contact: 9789092500</p>
            <p>Email: gsenterprises@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-12">
            <h3>M/s Green E Waste Private Limited</h3>
            <p>Capacity: 422 T/Annum</p>
            <p>Address: SF No. 294/pt, Ayanambakkam village, Poonamallee taluk, Tiruvallur district.</p>
            <p>Contact: 9566214845</p>
            <p>Email: stephen.greenewaste@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-13">
            <h3>M/s Green Era Recyclers</h3>
            <p>Capacity: 146 T/Annum</p>
            <p>Address: SF No. 344/2, Kavundampalayam village, Coimbatore North taluk, Coimbatore district – 641 025.</p>
            <p>Contact: 9965664526, 8300223526</p>
            <p>Email: prasanth@thegreenera.in</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-14">
            <h3>M/s Green India Recyclers</h3>
            <p>Capacity: 456 T/Annum</p>
            <p>Address: SF No. 26/1B, Kovilpalayam road, Soolakkal village, Kinathukadavu taluk, Coimbatore – 642 110.</p>
            <p>Contact: 9003491034, 9894940304</p>
            <p>Email: info@greenindiarecyclers.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-15">
            <h3>M/s INAA Enterprises</h3>
            <p>Capacity: 300 T/Annum</p>
            <p>Address: DP No. AC-31/24, Thirumudivakkam village, Kundrathur taluk, Kancheepuram district.</p>
            <p>Contact: 9444446229</p>
            <p>Email: info@inaaenterprises.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-16">
            <h3>M/s JADG India E-Waste Recyclers Pvt Ltd</h3>
            <p>Capacity: 600 T/Annum</p>
            <p>Address: SF No.256/1A1, Kollur village, Kilikodi post, Ponneri taluk, Tiruvallur district - 601206.</p>
            <p>Contact: 7373919322</p>
            <p>Email: jadgewaste@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-17">
            <h3>M/s John Firm</h3>
            <p>Capacity: 300 T/Annum</p>
            <p>Address: SF No.144/1C2, Kerekodihalli village, Karimangalam taluk, Dharmapuri district.</p>
            <p>Contact: 7904574355</p>
            <p>Email: johnfirm2022@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-18">
            <h3>M/s K.P.P enterprises</h3>
            <p>Capacity: 1000 T/Annum</p>
            <p>Address: No. 535-3C, Santhavellore village, Sunguvarchatram post, Sriperumbudur taluk, Kancheepuram district.</p>
            <p>Contact: 9940858828</p>
            <p>Email: 82.sathya@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-19">
            <h3>M/s KGN Electronics</h3>
            <p>Capacity: 250 T/Annum</p>
            <p>Address: No.48 A, Dr Ambedkar College Road, Erukkenchery village, Perambur taluk, Chennai district.</p>
            <p>Contact: 9382600144</p>
            <p>Email: sonyfarooqzaid@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-20">
            <h3>M/s Leela Traders</h3>
            <p>Capacity: 2640 T/Annum</p>
            <p>Address: SF No. 41/1 part, Cuddaloor village, Chengalpattu taluk, Chengalpattu district.</p>
            <p>Contact: 9380888877</p>
            <p>Email: info@leelatraders.co.in, v.kumaran@hotmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        <div class="facility-card" id="facility-21">
            <h3>M/s Micro E–Waste Recyclers</h3>
            <p>Capacity: 900 T/Annum</p>
            <p>Address: No. 3/3B, Chennai Bye Pass Road, Senthaneerpuram, Trichy – 620 004.</p>
            <p>Contact: 9443141600</p>
            <p>Email: microrecyclers@yahoo.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-22">
            <h3>M/s MG Traders</h3>
            <p>Capacity: 600 T/Annum</p>
            <p>Address: No. 86, Nehru Street, Teachers Colony, Ambattur, Chennai – 600053.</p>
            <p>Contact: --</p>
            <p>Email: --</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-23">
            <h3>M/s Ponniamman Enterprises</h3>
            <p>Capacity: 12000 T/Annum</p>
            <p>Address: SF No. 216/3, Tiruvallur village, Tiruvallur taluk, Tiruvallur district.</p>
            <p>Contact: 9677462993</p>
            <p>Email: ponniammanenterprises@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-24">
            <h3>M/s Punithan Enterprises, Unit-II</h3>
            <p>Capacity: 300 T/Annum</p>
            <p>Address: No.113/19 Part, Rajiv Nagar, Perinjambakkam, Gunduperumbedu Post, Sirperumbudur taluk, Kancheepuram district. Pin – 601 301.</p>
            <p>Contact: 9840611027</p>
            <p>Email: punithanenterprises@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-25">
            <h3>M/s R.M Computers</h3>
            <p>Capacity: 228 T/Annum</p>
            <p>Address: Plot No.229, 9th Street, Ambattur, Chennai – 600098.</p>
            <p>Contact: 9094032959</p>
            <p>Email: rmcomputersin@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-26">
            <h3>M/s RBIA Minerals and Metals Pvt Ltd</h3>
            <p>Capacity: 1400 T/Annum</p>
            <p>Address: SF No. 205-1B2A, Kandur village, Sriperumbudur taluk, Kancheepuram district.</p>
            <p>Contact: 9444055770</p>
            <p>Email: rbiaminerals@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-27">
            <h3>M/s Sai Sri Waste Management Pvt Ltd</h3>
            <p>Capacity: 1680 T/Annum</p>
            <p>Address: SF No 443/1B2, 443/2A, Padaveedu village, Kumarapalayam taluk, Kumarapalayam district.</p>
            <p>Contact: 9942429447</p>
            <p>Email: info@saiwaste.in</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-28">
            <h3>M/s SKV E-Waste Recycling Pvt Ltd</h3>
            <p>Capacity: 560 T/Annum</p>
            <p>Address: Plot No.154 A&B, Tass Industrial Area, Ambattur SIDCO Industrial Estate, Chennai – 600 098.</p>
            <p>Contact: 9094345145</p>
            <p>Email: info@skvewaste.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-29">
            <h3>M/s S.P.P. Enterprises</h3>
            <p>Capacity: 1080 T/Annum</p>
            <p>Address: S.No.184-4C, Mambakkam village, Sriperumbudur taluk, Kancheepuram district.</p>
            <p>Contact: 7299917239</p>
            <p>Email: sppenterprices@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-30">
            <h3>M/s Shri Raam Recycling</h3>
            <p>Capacity: 504 T/Annum</p>
            <p>Address: No.DP-29, SIDCO Industrial Estate, SIPCOT Industrial Complex, Gummidipoondi, Tiruvallur district Pin code– 601201.</p>
            <p>Contact: 9884499191</p>
            <p>Email: info@shriraamrecycling.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-31">
            <h3>M/s Southern Alloys</h3>
            <p>Capacity: 540 T/Annum</p>
            <p>Address: Plot No. S –10 & 106, Putlur village, Tiruvallur taluk, Tiruvallur district.</p>
            <p>Contact: 9500038861</p>
            <p>Email: southernalloys@rediffmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-32">
            <h3>M/s SEZ Recycling</h3>
            <p>Capacity: 1500 T/Annum</p>
            <p>Address: TP-7, IVth Avenue, Mahendra World City Developers Limited, Industrial Estate, S.F.No. 42/1, 43,44, Thenmelpakkam Village, Chengalpattu Taluk, Kancheepuram District.</p>
            <p>Contact: 9790711555</p>
            <p>Email: akshay@sezrecycling.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-33">
            <h3>M/s Tharani Electronics Waste</h3>
            <p>Capacity: 207 T/Annum</p>
            <p>Address: SF No.381/3pt, 381/2pt, 384/2pt, 384/3 pt, Sarkar Samakulam village, Annur taluk, Coimbatore district.</p>
            <p>Contact: 9171450039</p>
            <p>Email: tharaniewast00@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-34">
            <h3>M/s Trishyraya Recycling Private Limited</h3>
            <p>Capacity: 3100 T/Annum</p>
            <p>Address: Plot No. 7, Phase – I, MEPZ-SEZ, Tambaram, Chennai – 600 045.</p>
            <p>Contact: 9840897125</p>
            <p>Email: subash.warrier@simsmm.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-35">
            <h3>M/s Tritech Systems</h3>
            <p>Capacity: 424 T/Annum</p>
            <p>Address: SF No.165, Porur village, Maduravoyal taluk, Chennai – 600 116.</p>
            <p>Contact: 9003077866</p>
            <p>Email: tri-abdullah@yahoo.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-36">
            <h3>M/s Udhaya Traders</h3>
            <p>Capacity: 84 T/Annum</p>
            <p>Address: No:242, Tiny Sector Ambattur Industrial Estate, Chennai – 600 058.</p>
            <p>Contact: 7397438071</p>
            <p>Email: udhayatraders2011@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-37">
            <h3>M/s Virogreen India Pvt Ltd</h3>
            <p>Capacity: 15000 T/Annum</p>
            <p>Address: SF No.297/1B2, No.49, Pappankuppam village, SR Kandigai Road, Gummidipoondi taluk, Tiruvallur district. Pin -601 201.</p>
            <p>Contact: 9940615444</p>
            <p>Email: selvam@virogreen.in</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        <div class="facility-card" id="facility-38">
            <h3>M/s World Scrap Recycling Solution</h3>
            <p>Capacity: 720 T/Annum</p>
            <p>Address: SF No.351/7, Beemanthangal village, Sriperumbudur taluk, Kancheepuram district.</p>
            <p>Contact: 8778458025</p>
            <p>Email: worldscraprecycling@gmail.com</p>
            <button>Get Directions</button>
            <button>Book Recycling</button>
        </div>
        
        
    </div>

    <!-- Right Panel for Map -->
    <div id="map"></div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([19.8762, 75.3433], 13); // Setting the view to Aurangabad, Maharashtra

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var facilities = [
    
    { 
        id: 'facility-1', 
        name: 'M/s A.K.Enterprises', 
        lat: 13.0072, 
        lng: 80.2152, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles household e-waste.',
        email: 'akenter06@gmail.com'
    },
    { 
        id: 'facility-2', 
        name: 'M/s Abishek Enterprises', 
        lat: 13.0972, 
        lng: 80.1884, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles large quantities of e-waste.',
        email: 'enterprisesabishek@gmail.com'
    },
    { 
        id: 'facility-3', 
        name: 'M/s AER Worldwide India Pvt Ltd', 
        lat: 13.1452, 
        lng: 80.2363, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in IT equipment recycling.',
        email: 'jkumar@aerworldwide.com, akaja@aerworld.com'
    },
    { 
        id: 'facility-4', 
        name: 'M/s Arockia Enterprises', 
        lat: 12.9110, 
        lng: 80.2184, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles electronic appliances.',
        email: 'associates.grid@gmail.com'
    },
    { 
        id: 'facility-5', 
        name: 'M/s Ascent Urban Recyclers Pvt Limited', 
        lat: 12.8833, 
        lng: 80.0184, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles urban e-waste recycling.',
        email: 'santhosh@ascentedigit.com'
    },
    { 
        id: 'facility-6', 
        name: 'M/s Blooming Recyclers', 
        lat: 12.6625, 
        lng: 79.9923, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles various types of e-waste.',
        email: 'bloomingrecycles@gmail.com'
    },
    { 
        id: 'facility-7', 
        name: 'M/s Earth Sense Recycle Private Limited', 
        lat: 12.7213, 
        lng: 79.9985, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on electronic waste recycling.',
        email: 'ewastechennai@earthsense.in'
    },
    { 
        id: 'facility-8', 
        name: 'M/s Ecosible Recyclers Pvt Ltd', 
        lat: 13.0838, 
        lng: 80.1854, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles industrial e-waste.',
        email: 'Ravi.shastry@ecosible.com'
    },
    { 
        id: 'facility-9', 
        name: 'M/s E PROCESS House', 
        lat: 12.8741, 
        lng: 80.2203, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles diverse e-waste recycling.',
        email: '--'
    },
    { 
        id: 'facility-10', 
        name: 'M/s Enviro Green E-waste Recycling Solutions', 
        lat: 12.7000, 
        lng: 79.9592, 
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in environmentally-friendly recycling.',
        email: 'envirogreenewaste@gmail.com'
    },
    { 
        id: 'facility-11', 
        name: 'M/s G S Enterprises', 
        lat: 12.9275, // Latitude for G S Enterprises
        lng: 79.9681, // Longitude for G S Enterprises
        image: 'https://via.placeholder.com/150', 
        info: 'This facility processes large quantities of e-waste.',
        email: 'gsenterprises@gmail.com'
    },
    { 
        id: 'facility-12', 
        name: 'M/s Green E Waste Private Limited', 
        lat: 13.0878, // Latitude for Green E Waste Private Limited
        lng: 80.1126, // Longitude for Green E Waste Private Limited
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on electronic waste recycling.',
        email: 'stephen.greenewaste@gmail.com'
    },
    { 
        id: 'facility-13', 
        name: 'M/s Green Era Recyclers', 
        lat: 11.0200, // Latitude for Green Era Recyclers
        lng: 76.9755, // Longitude for Green Era Recyclers
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles e-waste responsibly.',
        email: 'prasanth@thegreenera.in'
    },
    { 
        id: 'facility-14', 
        name: 'M/s Green India Recyclers', 
        lat: 11.0772, // Latitude for Green India Recyclers
        lng: 76.9710, // Longitude for Green India Recyclers
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in recycling various e-waste.',
        email: 'info@greenindiarecyclers.com'
    },
    { 
        id: 'facility-15', 
        name: 'M/s INAA Enterprises', 
        lat: 12.9133, // Latitude for INAA Enterprises
        lng: 80.1444, // Longitude for INAA Enterprises
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles diverse electronic waste.',
        email: 'info@inaaenterprises.com'
    },
    { 
        id: 'facility-16', 
        name: 'M/s JADG India E-Waste Recyclers Pvt Ltd', 
        lat: 13.2000, // Latitude for JADG India E-Waste Recyclers Pvt Ltd
        lng: 80.2280, // Longitude for JADG India E-Waste Recyclers Pvt Ltd
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in e-waste recycling.',
        email: 'jadgewaste@gmail.com'
    },
    { 
        id: 'facility-17', 
        name: 'M/s John Firm', 
        lat: 12.0680, // Latitude for John Firm
        lng: 78.2042, // Longitude for John Firm
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles various types of electronic waste.',
        email: 'johnfirm2022@gmail.com'
    },
    { 
        id: 'facility-18', 
        name: 'M/s K.P.P enterprises', 
        lat: 12.8794, // Latitude for K.P.P enterprises
        lng: 80.1476, // Longitude for K.P.P enterprises
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles large quantities of e-waste.',
        email: '82.sathya@gmail.com'
    },
    { 
        id: 'facility-19', 
        name: 'M/s KGN Electronics', 
        lat: 13.1298, // Latitude for KGN Electronics
        lng: 80.2193, // Longitude for KGN Electronics
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in recycling electronic components.',
        email: 'sonyfarooqzaid@gmail.com'
    },
    { 
        id: 'facility-20', 
        name: 'M/s Leela Traders', 
        lat: 12.5599, // Latitude for Leela Traders
        lng: 80.0530, // Longitude for Leela Traders
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on e-waste recycling.',
        email: 'info@leelatraders.co.in, v.kumaran@hotmail.com'
    },
    { 
        id: 'facility-21', 
        name: 'M/s Micro E–Waste Recyclers', 
        lat: 10.8000,  // Latitude for Micro E-Waste Recyclers
        lng: 78.6820,  // Longitude for Micro E-Waste Recyclers
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles various electronic waste.',
        email: 'microrecyclers@yahoo.com'
    },
    { 
        id: 'facility-22', 
        name: 'M/s MG Traders', 
        lat: 13.1121,  // Updated Latitude for MG Traders, Ambattur
        lng: 80.1792,  // Updated Longitude for MG Traders, Ambattur
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles various electronic waste.',
        email: '--'
    },
    { 
        id: 'facility-23', 
        name: 'M/s Ponniamman Enterprises', 
        lat: 13.1206,  // Updated Latitude for Ponniamman Enterprises
        lng: 79.3171,  // Updated Longitude for Ponniamman Enterprises
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles a large volume of electronic waste.',
        email: 'ponniammanenterprises@gmail.com'
    },
    { 
        id: 'facility-24', 
        name: 'M/s Punithan Enterprises, Unit-II', 
        lat: 12.9792,  // Updated Latitude for Punithan Enterprises
        lng: 79.9090,  // Updated Longitude for Punithan Enterprises
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in recycling electronics.',
        email: 'punithanenterprises@gmail.com'
    },
    { 
        id: 'facility-25', 
        name: 'M/s R.M Computers', 
        lat: 13.0906,  // Updated Latitude for R.M Computers, Ambattur
        lng: 80.1921,  // Updated Longitude for R.M Computers, Ambattur
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles computer waste.',
        email: 'rmcomputersin@gmail.com'
    },
    { 
        id: 'facility-26', 
        name: 'M/s RBIA Minerals and Metals Pvt Ltd', 
        lat: 12.9749,  // Updated Latitude for RBIA Minerals and Metals
        lng: 79.9103,  // Updated Longitude for RBIA Minerals and Metals
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles electronic and metal waste.',
        email: 'rbiaminerals@gmail.com'
    },
    { 
        id: 'facility-27', 
        name: 'M/s Sai Sri Waste Management Pvt Ltd', 
        lat: 11.1490,  // Latitude for Kumarapalayam
        lng: 77.9886,  // Longitude for Kumarapalayam
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in waste management.',
        email: 'info@saiwaste.in'
    },
    { 
        id: 'facility-28', 
        name: 'M/s SKV E-Waste Recycling Pvt Ltd', 
        lat: 13.0692,  // Latitude for SKV E-Waste Recycling, Ambattur
        lng: 80.1707,  // Longitude for SKV E-Waste Recycling, Ambattur
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles electronic waste.',
        email: 'info@skvewaste.com'
    },
    { 
        id: 'facility-29', 
        name: 'M/s S.P.P. Enterprises', 
        lat: 12.9413,  // Latitude for S.P.P. Enterprises
        lng: 80.1364,  // Longitude for S.P.P. Enterprises
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on electronic waste recycling.',
        email: 'sppenterprices@gmail.com'
    },
    { 
        id: 'facility-30', 
        name: 'M/s Shri Raam Recycling', 
        lat: 13.3144,  // Latitude for Shri Raam Recycling
        lng: 80.0217,  // Longitude for Shri Raam Recycling
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles various electronic waste.',
        email: 'info@shriraamrecycling.com'
    },
    { 
        id: 'facility-31', 
        name: 'M/s Southern Alloys', 
        lat: 13.0970,  // Latitude for Southern Alloys
        lng: 79.9628,  // Longitude for Southern Alloys
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in alloy recycling.',
        email: 'southernalloys@rediffmail.com'
    },
    { 
        id: 'facility-32', 
        name: 'M/s SEZ Recycling', 
        lat: 12.8516,  // Latitude for SEZ Recycling
        lng: 79.9735,  // Longitude for SEZ Recycling
        image: 'https://via.placeholder.com/150', 
        info: 'This facility handles electronic waste recycling.',
        email: 'akshay@sezrecycling.com'
    },
    { 
        id: 'facility-33', 
        name: 'M/s Tharani Electronics Waste', 
        lat: 11.0688,  // Latitude for Tharani Electronics Waste
        lng: 77.0211,  // Longitude for Tharani Electronics Waste
        image: 'https://via.placeholder.com/150', 
        info: 'This facility recycles electronic waste.',
        email: 'tharaniewast00@gmail.com'
    },
    { 
        id: 'facility-34', 
        name: 'M/s Trishyraya Recycling Private Limited', 
        lat: 12.9166,  // Latitude for Trishyraya Recycling
        lng: 80.1615,  // Longitude for Trishyraya Recycling
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on recycling various waste.',
        email: 'subash.warrier@simsmm.com'
    },
    { 
        id: 'facility-35', 
        name: 'M/s Tritech Systems', 
        lat: 13.0750,  // Latitude for Tritech Systems
        lng: 80.1877,  // Longitude for Tritech Systems
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in electronic waste.',
        email: 'tri-abdullah@yahoo.com'
    },
    { 
        id: 'facility-36', 
        name: 'M/s Udhaya Traders', 
        lat: 13.0947,  // Latitude for Udhaya Traders
        lng: 80.1791,  // Longitude for Udhaya Traders
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on waste management.',
        email: 'udhayatraders2011@gmail.com'
    },
    { 
        id: 'facility-37', 
        name: 'M/s Virogreen India Pvt Ltd', 
        lat: 13.2286,  // Updated Latitude for Virogreen India Pvt Ltd
        lng: 80.0189,  // Updated Longitude for Virogreen India Pvt Ltd
        image: 'https://via.placeholder.com/150', 
        info: 'This facility specializes in electronic waste recycling.',
        email: 'selvam@virogreen.in'
    },
    { 
        id: 'facility-38', 
        name: 'M/s World Scrap Recycling Solution', 
        lat: 12.9726,  // Latitude for World Scrap Recycling Solution
        lng: 79.9177,  // Longitude for World Scrap Recycling Solution
        image: 'https://via.placeholder.com/150', 
        info: 'This facility focuses on recycling scrap waste.',
        email: 'worldscraprecycling@gmail.com'
    }

];


    facilities.forEach(function(facility) {
        L.marker([facility.lat, facility.lng]).addTo(map)
            .bindPopup(`
                <b>${facility.name}</b><br>
                <img src="${facility.image}" alt="${facility.name}" width="150" height="150"><br>
                <p>${facility.info}</p>
                <p><b>Email:</b> ${facility.email}</p> <!-- Display email -->
                <label for="user-input">Add your notes:</label><br>
                <input type="text" id="user-input" placeholder="Enter information here">
            `)
            .on('click', function() {
                // Scroll the corresponding facility card into view
                var facilityElement = document.getElementById(facility.id);
                facilityElement.scrollIntoView({ behavior: 'smooth' });
            });
    });
</script>

</body>
</html>