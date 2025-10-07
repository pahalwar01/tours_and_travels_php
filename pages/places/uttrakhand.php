<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <title>Uttrakhand</title>
  <style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; 
        background:url('https://images.unsplash.com/photo-1501436513145-30f24e19fcc8?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover fixed no-repeat;
        color:#333;}
        /* Top Contact Bar */
      .topbar {
          background:#007bff;
          color:white;
          padding:8px 20px;
          display:flex;
          justify-content:space-between;
          align-items: center;
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


      footer { background:rgba(0,0,0,0.5); 
              color:white; 
              padding:10px;
              text-align:center; 
              border-radius:10px;}

      /* Sections */
      section { padding:40px; text-align:center; color: black; }
      .contact-form { max-width:500px; margin:auto; }
      input, textarea { width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc; }
      button { padding:10px 20px; background:#007bff; color:white; border:none; border-radius:5px; cursor:pointer; }

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

      .paragraph-header{
          font-weight: bold;
          margin-top: 20px;
          font-size: 22px;
          margin-bottom: 15px;
      }

      .places-to-visit p{
          margin-bottom: 15px;
          margin-top: 5px;
          font-size: 15px;
      }

      .services-text h3{
          color: rgb(0, 255, 233);
      }

      .services-text p{
          color: white;
          font-size: 14px;
          margin-top: -10px;
      }
      @media screen and (max-width: 600px) {
          .brand-name{
              font-size: 18px;
          }
          .brand-slogan{
              font-size: 12px;
          }
          .brand-slogan-lastline{
              font-size: 14px;
          }
          .navbar a {
              font-size: 12px;
          }

          header h1 { font-size:1.3rem; color: aqua; margin:0; margin-bottom: -10px; }
          header p { font-size:1rem; color: white; }

          .topbar {
          background:#007bff;
          color:white;
          padding:8px 10px;
          display:flex;
          justify-content:space-between;
          align-items: center;
          font-size:0.7rem;
          }

          .topbar a { color:white; text-decoration:none; margin-right:0px; font-size: 0.7rem; } 

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
        <h2 style="margin-top: -30px; font-size: 30px;">Uttarakhand - Devbhumi (Land of the Gods)</h2>
        <hr style="margin-top: -16px;">
        <p style="text-align: justify; margin: 20px; font-size: 18px;">
            Uttarakhand is famous for its spiritual sites like the Char Dham pilgrimage (Yamunotri, Gangotri, Kedarnath, and Badrinath), its stunning natural beauty with the Himalayas, national parks, and hill stations, and as a center for adventure sports like trekking and river rafting
        </p><br>
        <hr style="margin-top: -16px;">
                <div>
                    <marquee behavior="scroll" direction="left" scrollamount="15">
                        <img src="https://cdn.pixabay.com/photo/2022/06/05/05/59/mussoorie-7243347_640.jpg" alt="uttrakhand-1" style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2019/08/13/14/35/nature-4403564_640.jpg" alt="uttrakhand-2"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2019/07/03/16/05/india-4314909_640.jpg" alt="uttrakhand-3"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2017/09/04/14/27/ranikhet-india-2714252_1280.jpg" alt="uttrakhand-4"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2018/01/21/09/56/tiger-3096211_640.jpg" alt="uttrakhand-5"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                        <img src="https://cdn.pixabay.com/photo/2022/10/12/04/05/nature-7515626_640.jpg" alt="uttrakhand-6"  style="height: 200px; width: 250px; margin: 10px; border-width: 3px; border-color: aqua; border-style: groove;">
                    </marquee>
                </div><br><br>
                <hr style="margin-top: -16px;">
                <h2 class="paragraph-header" style="font-size: 22px;"><u>Famous sights to visit at Uttrakhand</u></h2>
                <br>
                <div>
                    <ul class="places-to-visit" contextmenu="sopts" style="list-style-type: square; text-align: left; display: inline-block; margin-top: -10px;">
                        <li><b><u>Mussoorie</u></b></li>
                        <p>
                            Known as the "Queen of the Hills," this scenic hill station offers mesmerizing waterfalls, mountain views, and a charming colonial atmosphere. It's a great place to walk down the Mall Road and take in the panoramic views of the Doon Valley.
                        </p>
                        <li><b><u>Nainital</u></b></li>
                        <p>
                            A popular hill station in the Kumaon region, Nainital is famous for its beautiful lakes and pleasant climate. Visitors can enjoy boating on Naini Lake, explore the Mall Road, or take a cable car to Snow View Point for stunning Himalayan views.    
                        </p>
                        <li><b><u>Auli</u></b></li>
                        <p>
                            This hill station is a popular ski destination in the winter, with snow-covered slopes and breathtaking views of peaks like Nanda Devi. It also serves as a base for trekking during the warmer months.    
                        </p>
                        <li><b><u>Ranikhet</u></b></li>
                        <p>
                            This quaint hill station offers a peaceful retreat with extensive meadows and views of the Himalayas. Its dense forests and golf course make it ideal for nature lovers.    
                        </p>
                        <li><b><u>Jim Corbett National Park</u></b></li>
                        <p>
                            India's first national park is a paradise for wildlife enthusiasts, especially known for its Bengal tigers, elephants, and leopards. You can enjoy safaris to explore the park's diverse flora and fauna.    
                        </p>
                        <li><b><u>Gaumukh Tapovan Trek</u></b></li>
                        <p>
                            This trek takes you to the Gangotri glacier, the origin of the Ganges River, and offers stunning views of the surrounding Himalayan landscape.    
                        </p>
                        <li><b><u>Haridwar</u></b></li>
                        <p>
                            One of India's most sacred cities, Haridwar is situated on the banks of the Ganges River and is famous for its bathing ghats. A visit to Har Ki Pauri for the Ganga Aarti is an unforgettable spiritual experience.    
                        </p>
                    </ul>
                </div>

    </div>

  </section>

<!-- footer start -->

<?php include '../../footer.php'; ?>

</body>
</html>