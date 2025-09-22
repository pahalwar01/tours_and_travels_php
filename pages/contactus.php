<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>TMN Travels</title>
   <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://cdn.pixabay.com/photo/2024/01/18/10/07/sunset-8516639_1280.jphttps://plus.unsplash.com/premium_photo-1700244449064-ea9d8af9e951?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1hbmFsaSUyMDRrfGVufDB8fDB8fHww') center/cover fixed no-repeat;
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

  <!--header name and contact details-->
    <?php include '../header.php'; ?>
  <!-- nav bar -->
  <nav class="navbar" style="background: rgba(0, 0, 0, 0.7); padding: 10px 20px; display: flex; justify-content: center; gap: 20px; position: sticky; top: 0; z-index: 100;">
    <a href="../index.php" style="color: white; text-decoration: none; font-weight: bold;">Home</a>
    <a href="services.php" style="color: white; text-decoration: none; font-weight: bold;">Services</a>
    <a href="../pages/places/destinations.php" style="color: white; text-decoration: none; font-weight: bold;">Destinations</a>
    <a href="contactus.php" style="color: white; text-decoration: none; font-weight: bold;">Contact Us</a>
  </nav>
  <br><br><br>

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
  <?php include '../footer.php'; ?>
  
</body>
</html>