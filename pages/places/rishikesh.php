<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <title><?php include '../../brand_name.php'; ?></title>
   <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://plus.unsplash.com/premium_photo-1700244449064-ea9d8af9e951?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1hbmFsaSUyMDRrfGVufDB8fDB8fHww') center/cover fixed no-repeat;
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
            padding:20px; 
            text-align:center; 
            border-radius:10px;  }
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

  <?php include '../../header.php'; ?>

<!-- nav bar -->
  <nav class="navbar" style="background: rgba(0, 0, 0, 0.7); padding: 10px 20px; display: flex; justify-content: center; gap: 20px; position: sticky; top: 0; z-index: 100;">
    <a href="../../index.php" style="color: white; text-decoration: none; font-weight: bold;">Home</a>
    <a href="../services.php" style="color: white; text-decoration: none; font-weight: bold;">Services</a>
    <a href="destinations.php" style="color: white; text-decoration: none; font-weight: bold;">Destinations</a>
    <a href="../contactus.php" style="color: white; text-decoration: none; font-weight: bold;">Contact Us</a>
  </nav>


  <section id="about">

    <div>
        <h2 style="margin-top: -30px; font-size: 30px;">Rishikesh - Yoga City of India</h2>
        <hr style="margin-top: -16px;">
        <p style="text-align: justify; margin: 20px; font-size: 18px;">
        The Yoga Capital of the World – Nestled in the foothills of the Himalayas along the banks of the sacred Ganga River, Rishikesh is a spiritual haven and a hub for yoga, meditation, and adventure. Renowned for its ashrams, temples, and the iconic Laxman Jhula and Ram Jhula suspension bridges, it draws seekers of peace and spirituality from around the globe.
        </p><br>
        <hr style="margin-top: -16px;">
                <div>
                    <marquee behavior="scroll" direction="left" scrollamount="15">
                        <img src="https://cdn.pixabay.com/photo/2018/05/01/14/34/india-3365741_1280.jpg" alt="rishikesh-1" style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2022/10/05/07/11/temple-7499927_1280.jpg" alt="rishikesh-2"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1724432191302-6133b34c7105?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8UmFtJTIwSmh1bGF8ZW58MHx8MHx8fDA%3D" alt="rishikesh-3"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://images.unsplash.com/photo-1679236303854-a47bc30fcfb7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fFJhbSUyMEpodWxhfGVufDB8fDB8fHww" alt="rishikesh-4"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2022/04/25/05/46/lord-shiva-7155120_640.jpg" alt="rishikesh-5"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2020/01/16/08/17/rishikesh-4769868_640.jpg" alt="rishikesh-6"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                    </marquee>
                </div><br><br>
                <hr style="margin-top: -16px;">
                <h2 class="paragraph-header" style="font-size: 22px;"><u>Famous sights to visit at Rishikesh</u></h2>
                <br>
                <div>
                    <ul class="places-to-visit" contextmenu="sopts" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
                        <li><b><u>Triveni Ghat</u></b></li>
                        <p>
                        This sacred bathing spot is the confluence of the Ganges, Yamuna, and Saraswati rivers. It is famous for the enchanting evening Maha Aarti (prayer ceremony) held daily. Devotees and tourists gather here to witness the mesmerizing sight of lamps floating on the river, accompanied by devotional songs and chants.
                        </p>
                        <li><b><u>The Beatles Ashram (Chaurasi Kutia)</u></b></li>
                        <p>
                            This legendary ashram gained fame after the Beatles visited in 1968 to study transcendental meditation. Today, it is an abandoned but peaceful and artistic site. The walls are adorned with vibrant graffiti and murals, making it a popular spot for photography and exploration.    
                        </p>
                        <li><b><u>Neelkanth Mahadev Temple</u></b></li>
                        <p>
                            Situated about 32 km from Rishikesh, this ancient temple is dedicated to Lord Shiva. Nestled amidst the lush forests of the Himalayas, it is believed to be the site where Lord Shiva consumed the poison that emerged during the churning of the ocean (Samudra Manthan). The temple's serene surroundings and spiritual significance make it a must-visit destination for pilgrims and tourists alike.      
                        </p>
                        <li><b><u>Parmarth Niketan</u></b></li>
                        <p>
                            One of the largest ashrams in Rishikesh, Parmarth Niketan offers daily yoga and meditation classes, spiritual discourses, and holistic healing programs. The ashram is set against the backdrop of the Himalayas and the Ganges River, providing a tranquil environment for spiritual growth and self-discovery. It also hosts the annual International Yoga Festival, attracting yoga enthusiasts from around the world.
                        </p>
                        <li><b><u>Tera Manzil Temple</u></b></li>
                        <p>
                            Also known as the Trimbakeshwar Temple, this 13-story temple is a prominent landmark in Rishikesh. Each floor is dedicated to different deities, and the temple offers panoramic views of the Ganges River and the surrounding hills. Visitors can climb to the top for a breathtaking view and a peaceful atmosphere for prayer and meditation.    
                        </p>
                        <li><b><u>Ram Jhula</u></b></li>
                        <p>
                            This iconic suspension bridge spans the Ganges River, connecting the two banks of Rishikesh. It is a popular spot for tourists to take in the scenic views of the river and the surrounding hills. The bridge is also a hub for local shops, cafes, and ashrams, making it a lively area to explore.    
                        </p>
                        <li><b><u>Neer Garh Waterfall</u></b></li>
                        <p>
                            A short trek from Rishikesh leads to this beautiful waterfall, surrounded by lush greenery. It is a perfect spot for nature lovers and adventure enthusiasts. The waterfall provides a refreshing break from the heat and is ideal for picnics and photography.
                        </p>
                    </ul>
                </div>

    </div>

  </section>

  <!--footer start-->
  <?php include '../../footer.php'; ?>
  <!--footer end-->
</body>
</html>