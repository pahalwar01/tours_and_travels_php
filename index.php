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
  <title>Homepage</title>
   <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://cdn.pixabay.com/photo/2024/01/18/10/07/sunset-8516639_1280.jpg') center/cover fixed no-repeat;
        color:#333;}
    /* Top Contact Bar */
    .topbar {
      background:#007bff;
      color:white;
      padding:8px 20px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      font-size:13px;
    }
    .topbar a { color:white; text-decoration:none; margin-left:0px; }
    
    /* Hero Header */
    header::before {
      content:"";
      position:absolute;
      top:0; left:0; right:0; bottom:0;
      background:rgba(0,0,0,0.1); /* dark overlay */
    }
    header .hero-text {
      position:relative;
      z-index:1;
    }
    header h1 { font-size:3rem; color: aqua; margin:0; margin-bottom: -10px; }
    header p { font-size:1.2rem; color: white; }
    
    /* Sections */
    section { padding:40px; text-align:center; color: black; }
    .contact-form { max-width:500px; margin:auto; }
    input, textarea { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc; }
    button { padding:10px 20px; background:#007bff; color:white; border:none; border-radius:5px; cursor:pointer; }
    footer { background:rgba(0,0,0,0.5); 
            color:white; 
            padding:10px; 
            text-align:center; 
            border-radius:10px;}
    .social-icons a {
      color:white;
      margin:0 10px;
      font-size:20px;
      text-decoration:none;
    }

    .hover:hover {
      transform: scale(1.25);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    /* WhatsApp Floating Button */
    .whatsapp-float {
      position:fixed;
      bottom:20px;
      right:20px;
      height: 26px;
      background:#25D366;
      color:white;
      border-radius:50%;
      padding:15px;
      font-size:25px;
      box-shadow:0 4px 10px rgba(0,0,0,0.3);
      text-decoration:none;
      z-index:1000;
    }
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
    <h2 class="paragraph-header" style="font-size: 22px;"><u>Popular Destinations</u></h2>
      <div style="display: flex; justify-content: center; gap: 24px; flex-wrap: wrap;">
        <a href="pages/places/manali.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2021/02/19/14/38/mountain-6030438_1280.jpg" alt="Manali" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Manali</b></strong>
            </div>
          </div>
        </a>
        <a href="pages/places/goa.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2017/05/30/05/46/goa-2355885_1280.jpg" alt="Goa" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Goa</b></strong>
            </div>
          </div>
        </a>
        <a href="pages/places/jaipur.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2021/04/06/11/22/hawa-mahal-6156123_1280.jpg" alt="Jaipur" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Jaipur</b></strong>
            </div>
          </div>
        </a>
        <a href="pages/places/rishikesh.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="Rishikesh" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Rishikesh</b></strong>
            </div>
          </div>
        </a>
        <a href="pages/places/agra.php" style="text-decoration: none; color: inherit;">
          <div class="hover" style="width: 180px; background: rgba(255,255,255,0.95); border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); overflow: hidden; transition: transform 0.2s; cursor: pointer;">
            <img src="https://cdn.pixabay.com/photo/2023/03/26/20/48/tajmahal-7879103_640.jpg" alt="Agra" style="width:100%; height:120px; object-fit:cover;">
            <div style="padding: 12px; text-align: center;">
              <strong><b>Agra</b></strong>
            </div>
          </div>
        </a>
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
