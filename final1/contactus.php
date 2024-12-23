<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="contactus.css">
  <style>
    /* Navbar styles from the first file */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
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

    /* Padding for content to avoid overlap */
    .contact_us_green {
      margin-top: 100px; /* Matches navbar height */
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
            <a href="fa.php">E-Facilities</a>
            <a href="pickup.php">Recycle</a>
            <a href="timeline.php">Guidelines</a>
            <a href="contactus.php">Contact Us</a>
        </div>
        <a href="login.php" class="signup-btn">Login</a>
    </nav>

  <!-- Contact Us Section -->
  <div class="contact_us_green">
    <div class="responsive-container-block big-container">
      <div class="responsive-container-block container">
        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-7 wk-ipadp-10 line" id="i69b-2">
          <form class="form-box">
            <div class="container-block form-wrapper">
              <div class="head-text-box">
                <p class="text-blk contactus-head">Contact us</p>
                
              </div>
              <div class="responsive-container-block">
                <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt-6">
                  <p class="text-blk input-title">FIRST NAME</p>
                  <input class="input" id="ijowk-6" name="FirstName" type="text">
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <p class="text-blk input-title">LAST NAME</p>
                  <input class="input" id="indfi-4" name="LastName" type="text">
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <p class="text-blk input-title">EMAIL</p>
                  <input class="input" id="ipmgh-6" name="Email" type="email">
                </div>
                <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                  <p class="text-blk input-title">PHONE NUMBER</p>
                  <input class="input" id="imgis-5" name="PhoneNumber" type="tel">
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-6">
                  <p class="text-blk input-title">WHAT DO YOU HAVE IN MIND</p>
                  <textarea class="textinput" id="i5vyy-6" name="Query" placeholder="Please enter query..."></textarea>
                </div>
              </div>
              <div class="btn-wrapper">
                <button type="submit" class="submit-btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-5 wk-ipadp-10" id="ifgi">
          <div class="container-box">
            <div class="text-content">
              <p class="text-blk contactus-head">Contact us</p>
              <p class="text-blk contactus-subhead">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
              </p>
            </div>
            <div class="workik-contact-bigbox">
              <div class="workik-contact-box">
                <div class="phone text-box">
                  <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET21.jpg" alt="Phone">
                  <p class="contact-text">+1258 3258 5679</p>
                </div>
                <div class="address text-box">
                  <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET22.jpg" alt="Email">
                  <p class="contact-text">hello@workik.com</p>
                </div>
                <div class="mail text-box">
                  <img class="contact-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ET23.jpg" alt="Address">
                  <p class="contact-text">102 street, y cross 485656</p>
                </div>
              </div>
              <div class="social-media-links">
                <a href="#"><img class="social-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-mail.svg" alt="Mail"></a>
                <a href="#"><img class="social-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-twitter.svg" alt="Twitter"></a>
                <a href="#"><img class="social-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-insta.svg" alt="Instagram"></a>
                <a href="#"><img class="social-svg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/gray-fb.svg" alt="Facebook"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
