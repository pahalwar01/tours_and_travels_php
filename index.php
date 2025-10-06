<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <title>Homepage</title>
  <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://images.unsplash.com/photo-1501436513145-30f24e19fcc8?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover fixed no-repeat;
        color:#333;}
  </style>
</head>
<body>

  <?php include 'header.php'; ?>

  <!-- nav bar --> 
  <nav class="navbar" style="background: rgba(0, 0, 0, 0.7); padding: 10px 20px; display: flex; justify-content: center; gap: 20px; position: sticky; top: 0; z-index: 100;">
    <a href="index.php" style="color: white; text-decoration: none; font-weight: bold;">Home</a>
    <a href="pages/services.php" style="color: white; text-decoration: none; font-weight: bold;">Services</a>
    <a href="pages/places/destinations.php" style="color: white; text-decoration: none; font-weight: bold;">Destinations</a>
    <a href="pages/contactus.php" style="color: white; text-decoration: none; font-weight: bold;">Contact Us</a>
  </nav>

  <section id="about">
    <h2 style="margin-top: -30px; font-size: 30px;">Welcome to <?php include 'brand_name.php'; ?></h2>
    <hr style="margin-top: -16px;">
    <h2 class="paragraph-header"><u>Services We Offer</u></h2>
    <div>
      <ul contextmenu="services" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
        <li>Customized Tour Packages – Family & Company</li>
        <li>Corporate Travel Solutions – Hotel booking / Meeting / Event</li>
        <li>Group Off-site / Trip – Companies / Families / etc.</li>
        <li>All type of Cabs / Luxury Buses booking</li>
        <li>All type of Flights booking</li>
      </ul>
    </div><br><hr>

    <!-- Popular Destinations Section -->
    <div>
      <?php include 'pages/popularplaces.php'; ?>
    </div>
    <br><hr>
    <!-- Why Choose Us Section -->
  <div>
    <h2 class="paragraph-header" style="font-size: 22px;"><u>Why Choose Us</u></h2>
    <h2 style="font-size: 17.5px;">Why We Are the Trusted Travel Agency in Delhi & NCR</h2>
    <div>
      <ul contextmenu="reasons" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
        <li>20+ Years of Experience in Corporate Trip Planning</li>
        <li>Customer Satisfaction is Our Top Priority</li>
        <li>Competitive Pricing with No Hidden Costs</li>
        <li>24/7 Customer Support for All Your Travel Needs</li>
      </ul>
    </div>
    <br><hr>
  </div>
  </section>

  <!-- Contact Us Section -->
  <section id="contact" style="margin-top: -90px;">
    <h2 class="paragraph-header"><u>Contact Us</u></h2>
    <div class="contact-form">
      <form action="https://formsubmit.co/pahalwar@gmail.com" method="POST">
        <!--<input type="hidden" name="_cc" value="c-enil.facilities@timesgroup.com">-->
        <!--<input type="hidden" name="_cc" value="another@email.com,yetanother@email.com">-->
        <!--<input type="hidden" name="_next" value="https://yourdomain.co/thanks.html">-->
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="phone" name="phone" placeholder="Your Phone Number" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <input type="hidden" name="_captcha" value="false">
        <button type="submit">Send Message</button>
      </form>
    </div>
    <br><hr>


    <!--About US section-->
        <h2 class="paragraph-header"><u>About US</u></h2>
    <p style="margin-top: -10px;">At TMN Travels, we are a trusted and experienced travel agency dedicated to planning memorable trips for our valued customers. With over 20 years of expertise, we offer personalized travel solutions, seamless trip planning, and reliable support. Our commitment is to provide hassle-free journeys, competitive pricing, and exceptional service, ensuring every customer enjoys a safe and unforgettable travel experience.</p>

  </section>

<!-- footer section-->

  <?php include 'footer.php'; ?>

</body>
</html>
